<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use common\models\History;
use common\models\Points;

/**
 * This is the model class for table "{{%sales}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $amount
 * @property integer $created_at
 */
class Sales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sales}}';
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
            [['user_id', 'amount'], 'required'],
            [['user_id', 'created_at', 'updated_at'], 'integer'],
            ['amount', 'number']
        ];
    }

    public function createSales()
    {
        if ($this->validate()) {
            $sale = Sales::findOne(['user_id' => $this->user_id]);
            
            $totalPoints = $this->amount / Yii::$app->appConfig->pointValue;
            
            if ($sale) {
                $sale->amount = $sale->amount + $this->amount;
            } else {
                // Setting up Sales
                $sale = new Sales;
                $sale->user_id = $this->user_id;
                $sale->amount = $this->amount;
             }

            // Setting up History for future reference
            $history = new History;
            $history->user_id = $this->user_id;
            $history->type = "sales";
            $history->value = $this->amount;

            // $points = new Points;
            // $pointsData = [
            //     'Points' => [
            //         'user_id' => $this->user_id,
            //         'points'  => $totalPoints,
            //     ]
            // ];
            // $points->load($pointsData);
            // return $points->savePoints();
            if ($sale->save() && $history->save()) {
                return $sale;
            }
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
            'amount' => 'Amount',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At'
        ];
    }
}
