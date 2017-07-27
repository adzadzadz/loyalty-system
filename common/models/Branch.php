<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%branch}}".
 *
 * @property integer $branch_id
 * @property integer $company_id
 * @property string $branch_code
 * @property string $name
 * @property integer $status
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%branch}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'status'], 'integer'],
            [['branch_code', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'branch_id' => 'Branch ID',
            'company_id' => 'Company ID',
            'branch_code' => 'Branch Code',
            'name' => 'Name',
            'status' => 'Status',
        ];
    }
}
