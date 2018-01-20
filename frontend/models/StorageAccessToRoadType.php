<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "storage_access_to_road_type".
 *
 * @property int $id
 * @property string $name
 *
 * @property Objects[] $objects
 */
class StorageAccessToRoadType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'storage_access_to_road_type';
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
        return $this->hasMany(Objects::className(), ['storage_access_to_road_type_id' => 'id']);
    }
}
