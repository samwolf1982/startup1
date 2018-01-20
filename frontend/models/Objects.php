<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "objects".
 *
 * @property int $id
 * @property int $user_id
 * @property int $deal_type_id
 * @property int $deal_model_id
 * @property int $object_type_id
 * @property int $object_model_id
 * @property string $address_text
 * @property string $country
 * @property int $state
 * @property int $sity
 * @property string $street
 * @property string $number_street
 * @property string $zip
 * @property double $lat
 * @property double $lng
 * @property string $price
 * @property int $currency_type_id
 * @property string $video_json
 * @property string $header
 * @property string $description
 * @property string $url
 * @property int $property_type_id
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property ObjectHouse $objectModel
 * @property ObjectRoom $objectModel0
 * @property RoomRent $dealModel
 * @property RoomSale $dealModel0
 * @property CurrencyType $currencyType
 * @property Deal $dealType
 * @property ObjectType $objectType
 * @property User $user
 */
class Objects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'objects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'deal_type_id', 'deal_model_id', 'object_type_id', 'object_model_id', 'address_text', 'state', 'sity', 'street', 'currency_type_id', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'deal_type_id', 'deal_model_id', 'object_type_id', 'object_model_id', 'state', 'sity', 'currency_type_id', 'property_type_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['address_text', 'header', 'description', 'url'], 'string'],
            [['lat', 'lng', 'price'], 'number'],
            [['country', 'street', 'number_street', 'zip', 'video_json'], 'string', 'max' => 255],
            [['object_model_id'], 'exist', 'skipOnError' => true, 'targetClass' => ObjectHouse::className(), 'targetAttribute' => ['object_model_id' => 'id']],
            [['object_model_id'], 'exist', 'skipOnError' => true, 'targetClass' => ObjectRoom::className(), 'targetAttribute' => ['object_model_id' => 'id']],
            [['deal_model_id'], 'exist', 'skipOnError' => true, 'targetClass' => RoomRent::className(), 'targetAttribute' => ['deal_model_id' => 'id']],
            [['deal_model_id'], 'exist', 'skipOnError' => true, 'targetClass' => RoomSale::className(), 'targetAttribute' => ['deal_model_id' => 'id']],
            [['currency_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => CurrencyType::className(), 'targetAttribute' => ['currency_type_id' => 'id']],
            [['deal_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Deal::className(), 'targetAttribute' => ['deal_type_id' => 'id']],
            [['object_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ObjectType::className(), 'targetAttribute' => ['object_type_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'deal_type_id' => 'Deal Type ID',
            'deal_model_id' => 'Deal Model ID',
            'object_type_id' => 'Object Type ID',
            'object_model_id' => 'Object Model ID',
            'address_text' => 'Address Text',
            'country' => 'Country',
            'state' => 'State',
            'sity' => 'Sity',
            'street' => 'Street',
            'number_street' => 'Number Street',
            'zip' => 'Zip',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'price' => 'Price',
            'currency_type_id' => 'Currency Type ID',
            'video_json' => 'Video Json',
            'header' => 'Header',
            'description' => 'Description',
            'url' => 'Url',
            'property_type_id' => 'Property Type ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectModel()
    {
        return $this->hasOne(ObjectHouse::className(), ['id' => 'object_model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectModel0()
    {
        return $this->hasOne(ObjectRoom::className(), ['id' => 'object_model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDealModel()
    {
        return $this->hasOne(RoomRent::className(), ['id' => 'deal_model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDealModel0()
    {
        return $this->hasOne(RoomSale::className(), ['id' => 'deal_model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencyType()
    {
        return $this->hasOne(CurrencyType::className(), ['id' => 'currency_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDealType()
    {
        return $this->hasOne(Deal::className(), ['id' => 'deal_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectType()
    {
        return $this->hasOne(ObjectType::className(), ['id' => 'object_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
