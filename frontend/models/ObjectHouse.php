<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "object_house".
 *
 * @property int $id
 * @property int $ipoteka
 * @property int $razstrochka
 * @property string $object_table_name
 * @property double $square_total
 * @property double $square_live
 * @property double $square_kitchen
 * @property int $rooms_total
 * @property int $rooms_divided
 * @property int $rooms_for_sale
 * @property int $floor
 * @property int $floors
 * @property int $room_type_id
 * @property int $base_type_id
 * @property int $repairs_type_id
 * @property int $new_bilding_type_id
 * @property int $heating_type_id
 * @property int $window_view_type_id
 * @property int $restroom_type_id
 * @property int $balkoon_type_id
 * @property int $ceiling_height
 * @property string $type_serial_bilding
 * @property string $status_bild
 * @property int $extra_ipoteka
 * @property int $extra_rastrochka
 * @property int $extra_net
 * @property int $extra_phone
 * @property int $extra_tv
 * @property int $extra_invalid
 * @property int $extra_lift
 * @property int $extra_clift
 * @property int $extra_concierge
 * @property int $extra_sequrity
 * @property int $extra_musor
 * @property int $extra_gas
 * @property int $extra_ogoroza
 *
 * @property Objects[] $objects
 */
class ObjectHouse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'object_house';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ipoteka', 'razstrochka', 'rooms_total', 'rooms_divided', 'rooms_for_sale', 'floor', 'floors', 'room_type_id', 'base_type_id', 'repairs_type_id', 'new_bilding_type_id', 'heating_type_id', 'window_view_type_id', 'restroom_type_id', 'balkoon_type_id', 'ceiling_height', 'extra_ipoteka', 'extra_rastrochka', 'extra_net', 'extra_phone', 'extra_tv', 'extra_invalid', 'extra_lift', 'extra_clift', 'extra_concierge', 'extra_sequrity', 'extra_musor', 'extra_gas', 'extra_ogoroza'], 'integer'],
            [['object_table_name', 'square_total', 'square_live', 'square_kitchen', 'rooms_total', 'rooms_divided', 'floor', 'floors', 'room_type_id', 'base_type_id'], 'required'],
            [['square_total', 'square_live', 'square_kitchen'], 'number'],
            [['object_table_name', 'type_serial_bilding', 'status_bild'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ipoteka' => 'Ipoteka',
            'razstrochka' => 'Razstrochka',
            'object_table_name' => 'Object Table Name',
            'square_total' => 'Square Total',
            'square_live' => 'Square Live',
            'square_kitchen' => 'Square Kitchen',
            'rooms_total' => 'Rooms Total',
            'rooms_divided' => 'Rooms Divided',
            'rooms_for_sale' => 'Rooms For Sale',
            'floor' => 'Floor',
            'floors' => 'Floors',
            'room_type_id' => 'Room Type ID',
            'base_type_id' => 'Base Type ID',
            'repairs_type_id' => 'Repairs Type ID',
            'new_bilding_type_id' => 'New Bilding Type ID',
            'heating_type_id' => 'Heating Type ID',
            'window_view_type_id' => 'Window View Type ID',
            'restroom_type_id' => 'Restroom Type ID',
            'balkoon_type_id' => 'Balkoon Type ID',
            'ceiling_height' => 'Ceiling Height',
            'type_serial_bilding' => 'Type Serial Bilding',
            'status_bild' => 'Status Bild',
            'extra_ipoteka' => 'Extra Ipoteka',
            'extra_rastrochka' => 'Extra Rastrochka',
            'extra_net' => 'Extra Net',
            'extra_phone' => 'Extra Phone',
            'extra_tv' => 'Extra Tv',
            'extra_invalid' => 'Extra Invalid',
            'extra_lift' => 'Extra Lift',
            'extra_clift' => 'Extra Clift',
            'extra_concierge' => 'Extra Concierge',
            'extra_sequrity' => 'Extra Sequrity',
            'extra_musor' => 'Extra Musor',
            'extra_gas' => 'Extra Gas',
            'extra_ogoroza' => 'Extra Ogoroza',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Objects::className(), ['object_model_id' => 'id']);
    }
}
