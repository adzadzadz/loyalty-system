<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use common\models\UserOperations;
use common\models\Points;

/**
 * This is the model class for table "{{%points}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $points
 */
class Points extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%points}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'points'], 'required'],
            [['user_id', 'created_at', 'updated_at'], 'integer'],
            ['points', 'number']
        ];
    }

    public function savePoints()
    {
        if ($this->validate()) {
            if ($this->addPoints($this->user_id, $this->points)) {
                $levels = $this->points / Yii::$app->appConfig->pointPerLevel;
            }
            return $this->distributePoints(abs($levels), $type = $levels > 0 ? "+" : "-");
        }
        return false;
    }

    public function saveSolo()
    {
        if ($this->validate()) {
            return $this->addPoints($this->user_id, $this->points);
        }
        return false;
    }

    public function addPoints($user_id, $pointsVal)
    {
        $points = Points::findOne(['user_id' => $user_id]);
        if ($points) {
            $totalPoints = floor($points->points + $pointsVal);
            $points->points = $totalPoints;
        } else {
            // Set up new points
            $points = new Points;
            $points->user_id = $user_id;
            $points->points = floor($pointsVal);
        }
        if ($points->save()) {
            return $points;
        }
        return false;
    }

    public function distributePoints($levels, $type = "+")
    {
        $me = User::findOne($this->user_id);
        // Check if there's extra points
        // If there is, then reset the extra points to 0 and add one level
        if (is_numeric($levels) && strpos($levels, '.') == true) {
            if($me->has_one_point == 0) {
                $me->has_one_point = 1;
            } elseif ($me->has_one_point == 1) {
                $me->has_one_point = 0;
                $levels = $levels + 1;
            }
        }
        // 2 points give 2 points to a parent level up to 15 levels.
        $user = [];
        $lastLevel = $me->last_level_given;
        $lastUser = $me->last_user_given;
        if (!$me->direct_upline) {
            return true;
        }
        if (!$lastUser) {
            $user[0] = $me->direct_upline;
        } else {
            $user[0] = User::findOne($lastUser)->direct_upline;
        }

        $counter = 0;
        for ($i=1; $i < (int)floor($levels) + 1; $i++) {
            if ($lastLevel == 15) {
                $user[$counter] = $me->direct_upline;
                $lastLevel = 0;
            }
            if ($user[$counter]) {
                if ($this->addPoints($user[$counter], $type == "+" ? abs(Yii::$app->appConfig->pointsPerLevel) : -abs(Yii::$app->appConfig->pointsPerLevel))) {
                    $history = new History;
                    $history->provider_user_id = $this->user_id;
                    $history->user_id = $user[$counter];
                    $history->type = "points shared";
                    $history->value = Yii::$app->appConfig->pointsPerLevel;
                }
                $history->save();
            }
            if ($direct_upline = User::findOne($user[$counter])->direct_upline) {

                $user[$counter + 1] = $direct_upline;
            }
            
            $lastLevel++;
            $counter++;
        }
        
        $me->last_user_given = $user[$counter - 1];
        $me->last_level_given = $lastLevel;
        if ($me->save()) {
            return $user;
        }
        return false;
    }

    public function getUser()
    {
        return $this->hasOne(\common\models\User::className(), ['user_id' => 'user_id']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'points' => 'Points',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At'
        ];
    }
}