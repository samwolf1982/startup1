<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "currency_type".
 *
 * @property int $id
 * @property string $currency_type_name
 *
 * @property Objects[] $objects
 */
class CurrencyType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'currency_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['currency_type_name'], 'required'],
            [['currency_type_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'currency_type_name' => 'Currency Type Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Objects::className(), ['currency_type_id' => 'id']);
    }
}
