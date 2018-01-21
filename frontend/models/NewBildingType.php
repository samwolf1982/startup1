<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "new_bilding_type".
 *
 * @property int $id
 * @property int $date_of_issue_quarter Дата сдачи
 * @property int $date_of_issue_year Год
 * @property string $name_gk_corpus Название ЖК, корпус
 * @property string $developer Застройщик
 * @property string $url Проектная декларация
 *
 * @property Objects[] $objects
 */
class NewBildingType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'new_bilding_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_of_issue_quarter', 'date_of_issue_year'], 'integer'],
            [['name_gk_corpus', 'developer', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_of_issue_quarter' => 'Дата сдачи',
            'date_of_issue_year' => 'Год',
            'name_gk_corpus' => 'Название ЖК, корпус',
            'developer' => 'Застройщик',
            'url' => 'Проектная декларация',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Objects::className(), ['new_bilding_type_id' => 'id']);
    }
}
