<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "new_bilding_type".
 *
 * @property int $id
 * @property int $date_of_issue_quarter
 * @property int $date_of_issue_year
 * @property string $name_gk_corpus
 * @property string $developer
 * @property string $url
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
            [['url'], 'string'],
            [['name_gk_corpus', 'developer'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_of_issue_quarter' => 'Date Of Issue Quarter',
            'date_of_issue_year' => 'Date Of Issue Year',
            'name_gk_corpus' => 'Name Gk Corpus',
            'developer' => 'Developer',
            'url' => 'Url',
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
