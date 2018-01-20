<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "object_type".
 *
 * @property int $id
 * @property string $object_type_name
 * @property string $object_table_name
 *
 * @property Objects[] $objects
 */
class ObjectType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'object_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['object_type_name', 'object_table_name'], 'required'],
            [['object_type_name', 'object_table_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'object_type_name' => 'Object Type Name',
            'object_table_name' => 'Object Table Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Objects::className(), ['object_type_id' => 'id']);
    }
}
