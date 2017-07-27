<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%company}}".
 *
 * @property integer $company_id
 * @property string $name
 * @property integer $status
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%company}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'name' => 'Name',
            'status' => 'Status',
        ];
    }
}