<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "deal".
 *
 * @property int $id
 * @property string $deal_name
 * @property string $deal_table_name
 *
 * @property Objects[] $objects
 */
class Deal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deal_name', 'deal_table_name'], 'required'],
            [['deal_name', 'deal_table_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'deal_name' => 'Deal Name',
            'deal_table_name' => 'Deal Table Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Objects::className(), ['deal_type_id' => 'id']);
    }
}
