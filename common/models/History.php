<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%history}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $type
 * @property integer $value
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%history}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by'
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'value', 'provider_user_id', 'created_at', 'updated_at', 'created_by'], 'integer'],
            ['provider_user_id', 'default', 'value' => 0],
            [['type'], 'string', 'max' => 255],
        ];
    }

    public function getUser()
    {
        return $this->hasOne(\common\models\User::className(), ['user_id' => 'user_id']);
    }

    public function getProvider()
    {
        return $this->hasOne(\common\models\User::className(), ['user_id' => 'provider_user_id']);
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provider_user_id' => 'Provider User ID',
            'user_id' => 'User ID',
            'type' => 'Type',
            'value' => 'Value',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }
}
