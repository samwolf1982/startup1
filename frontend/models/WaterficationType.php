<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "waterfication_type".
 *
 * @property int $id
 * @property string $name
 *
 * @property Objects[] $objects
 */
class WaterficationType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'waterfication_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Objects::className(), ['waterfication_type_id' => 'id']);
    }
}
