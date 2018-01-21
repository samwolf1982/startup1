<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "objects".
 *
 * @property int $id
 * @property int $user_id Пользователь
 * @property int $deal_type_id Тип сделки
 * @property int $object_type_id Тип объекта
 * @property int $property_type_id Собственник
 * @property string $address_text Адрес
 * @property string $country Cтрана
 * @property string $state Область
 * @property string $sity Город
 * @property string $street Улица
 * @property string $number_street Номер дома
 * @property string $district Район
 * @property string $zip Почтовый индекс
 * @property double $lat
 * @property double $lng
 * @property string $price Цена за весь объект
 * @property int $currency_type_id Валюта
 * @property double $square_total Общая площадь
 * @property double $square_live Жилая площадь
 * @property double $square_kitchen Кухня
 * @property int $rooms_total Комнат всего
 * @property int $rooms_divided Комнат раздельно
 * @property int $rooms_for_sale Комнат продается
 * @property int $floor Этаж
 * @property int $floors Этажей
 * @property int $room_type_id Тип квартиры
 * @property int $base_type_id Тип здания
 * @property int $repairs_type_id Ремонт
 * @property int $new_bilding_type_id
 * @property string $video_json
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
 * @property int $extra_musoroprovod
 * @property int $extra_gas
 * @property int $extra_ogoroza
 * @property int $extra_condicioner
 * @property int $extra_wash_masine
 * @property int $extra_mebel
 * @property int $extra_holodilnik
 * @property int $extra_wifi
 * @property int $extra_with_animal
 * @property int $extra_with_children
 * @property int $extra_garage
 * @property int $extra_water_pull
 * @property int $extra_boiler
 * @property int $extra_mansandra
 * @property int $extra_propiska
 * @property int $extra_forest
 * @property int $extra_water
 * @property int $extra_year_access
 * @property int $extra_repairs_owner
 * @property int $extra_change_provider
 * @property int $extra_restorane
 * @property int $extra_fitnes
 * @property int $extra_bank
 * @property int $extra_bankomat
 * @property int $extra_supermarket
 * @property int $extra_full_access
 * @property int $extra_video_monitoring
 * @property int $extra_control_access
 * @property int $extra_equipment
 * @property int $extra_separate_entrance
 * @property int $extra_сrane
 * @property int $extra_custom_house
 * @property int $extra_rail_conect
 * @property int $extra_parking_track
 * @property int $extra_port
 * @property int $rooms_rent
 * @property int $sleep_place
 * @property int $time_rent_type_id
 * @property double $pledge
 * @property int $period
 * @property double $comission_client
 * @property double $comission_agent
 * @property string $header
 * @property string $description
 * @property string $url
 * @property int $square_place
 * @property int $obremeneniya
 * @property string $kadastr_number
 * @property string $rail_station
 * @property int $min_to_rail_station
 * @property int $rail_station_min_type
 * @property int $distance_to_forest
 * @property int $distance_to_water
 * @property string $poselok_name
 * @property int $house_type_id
 * @property int $mebli_type_id
 * @property int $otopleniye_type_id
 * @property int $electrification_type_id
 * @property int $gasfication_type_id
 * @property int $waterfication_type_id
 * @property int $cloakfication_type_id
 * @property int $relief_type_id
 * @property int $forma_place_type_id
 * @property int $purpose_of_land_type_id
 * @property int $nds
 * @property double $square_hall
 * @property string $bissnes_center_name
 * @property int $parko_place_count
 * @property int $parko_place_type
 * @property int $year
 * @property int $using_type_id
 * @property int $bilding_type_id
 * @property int $sub_rent
 * @property int $cokol
 * @property int $stock_type_id
 * @property int $storage_mode_type_id
 * @property int $storage_type_id
 * @property int $storage_floar_type_id
 * @property int $storage_unload_type_id
 * @property int $storage_gate_type_id
 * @property int $storage_access_to_road_type_id
 * @property int $storage_load_on_floor
 * @property int $storage_step_of_collumn
 * @property int $storage_power
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property BalkoonType $balkoonType
 * @property BaseType $baseType
 * @property BildingType $bildingType
 * @property CloakficationType $cloakficationType
 * @property CurrencyType $currencyType
 * @property Deal $dealType
 * @property ElectrificationType $electrificationType
 * @property FormaPlaceType $formaPlaceType
 * @property GasficationType $gasficationType
 * @property HeatingType $heatingType
 * @property HouseType $houseType
 * @property MebliType $mebliType
 * @property NewBildingType $newBildingType
 * @property ObjectType $objectType
 * @property OtopleniyeType $otopleniyeType
 * @property PurposeOfLandType $purposeOfLandType
 * @property ReliefType $reliefType
 * @property RepairsType $repairsType
 * @property RestroomType $restroomType
 * @property RoomType $roomType
 * @property StockType $stockType
 * @property StorageAccessToRoadType $storageAccessToRoadType
 * @property StorageFloarType $storageFloarType
 * @property StorageGateType $storageGateType
 * @property StorageModeType $storageModeType
 * @property StorageType $storageType
 * @property StorageUnloadType $storageUnloadType
 * @property TimeRentType $timeRentType
 * @property User $user
 * @property UsingType $usingType
 * @property WaterficationType $waterficationType
 * @property WindowViewType $windowViewType
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
            [['user_id', 'deal_type_id', 'object_type_id', 'address_text', 'country', 'state', 'sity', 'street', 'number_street', 'price', 'currency_type_id', 'square_total', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'deal_type_id', 'object_type_id', 'property_type_id', 'currency_type_id', 'rooms_total', 'rooms_divided', 'rooms_for_sale', 'floor', 'floors', 'room_type_id', 'base_type_id', 'repairs_type_id', 'new_bilding_type_id', 'heating_type_id', 'window_view_type_id', 'restroom_type_id', 'balkoon_type_id', 'ceiling_height', 'extra_ipoteka', 'extra_rastrochka', 'extra_net', 'extra_phone', 'extra_tv', 'extra_invalid', 'extra_lift', 'extra_clift', 'extra_concierge', 'extra_sequrity', 'extra_musoroprovod', 'extra_gas', 'extra_ogoroza', 'extra_condicioner', 'extra_wash_masine', 'extra_mebel', 'extra_holodilnik', 'extra_wifi', 'extra_with_animal', 'extra_with_children', 'extra_garage', 'extra_water_pull', 'extra_boiler', 'extra_mansandra', 'extra_propiska', 'extra_forest', 'extra_water', 'extra_year_access', 'extra_repairs_owner', 'extra_change_provider', 'extra_restorane', 'extra_fitnes', 'extra_bank', 'extra_bankomat', 'extra_supermarket', 'extra_full_access', 'extra_video_monitoring', 'extra_control_access', 'extra_equipment', 'extra_separate_entrance', 'extra_сrane', 'extra_custom_house', 'extra_rail_conect', 'extra_parking_track', 'extra_port', 'rooms_rent', 'sleep_place', 'time_rent_type_id', 'period', 'square_place', 'obremeneniya', 'min_to_rail_station', 'rail_station_min_type', 'distance_to_forest', 'distance_to_water', 'house_type_id', 'mebli_type_id', 'otopleniye_type_id', 'electrification_type_id', 'gasfication_type_id', 'waterfication_type_id', 'cloakfication_type_id', 'relief_type_id', 'forma_place_type_id', 'purpose_of_land_type_id', 'nds', 'parko_place_count', 'parko_place_type', 'year', 'using_type_id', 'bilding_type_id', 'sub_rent', 'cokol', 'stock_type_id', 'storage_mode_type_id', 'storage_type_id', 'storage_floar_type_id', 'storage_unload_type_id', 'storage_gate_type_id', 'storage_access_to_road_type_id', 'storage_load_on_floor', 'storage_step_of_collumn', 'storage_power', 'status'], 'integer'],
            [['lat', 'lng', 'price', 'square_total', 'square_live', 'square_kitchen', 'pledge', 'comission_client', 'comission_agent', 'square_hall'], 'number'],
            [['header', 'description', 'url'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['address_text', 'country', 'state', 'sity', 'street', 'number_street', 'district', 'zip', 'video_json', 'type_serial_bilding', 'status_bild', 'kadastr_number', 'rail_station', 'poselok_name', 'bissnes_center_name'], 'string', 'max' => 255],
            [['balkoon_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => BalkoonType::className(), 'targetAttribute' => ['balkoon_type_id' => 'id']],
            [['base_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => BaseType::className(), 'targetAttribute' => ['base_type_id' => 'id']],
            [['bilding_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => BildingType::className(), 'targetAttribute' => ['bilding_type_id' => 'id']],
            [['cloakfication_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => CloakficationType::className(), 'targetAttribute' => ['cloakfication_type_id' => 'id']],
            [['currency_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => CurrencyType::className(), 'targetAttribute' => ['currency_type_id' => 'id']],
            [['deal_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Deal::className(), 'targetAttribute' => ['deal_type_id' => 'id']],
            [['electrification_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ElectrificationType::className(), 'targetAttribute' => ['electrification_type_id' => 'id']],
            [['forma_place_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => FormaPlaceType::className(), 'targetAttribute' => ['forma_place_type_id' => 'id']],
            [['gasfication_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => GasficationType::className(), 'targetAttribute' => ['gasfication_type_id' => 'id']],
            [['heating_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => HeatingType::className(), 'targetAttribute' => ['heating_type_id' => 'id']],
            [['house_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => HouseType::className(), 'targetAttribute' => ['house_type_id' => 'id']],
            [['mebli_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => MebliType::className(), 'targetAttribute' => ['mebli_type_id' => 'id']],
            [['new_bilding_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => NewBildingType::className(), 'targetAttribute' => ['new_bilding_type_id' => 'id']],
            [['object_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ObjectType::className(), 'targetAttribute' => ['object_type_id' => 'id']],
            [['otopleniye_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => OtopleniyeType::className(), 'targetAttribute' => ['otopleniye_type_id' => 'id']],
            [['purpose_of_land_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PurposeOfLandType::className(), 'targetAttribute' => ['purpose_of_land_type_id' => 'id']],
            [['relief_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReliefType::className(), 'targetAttribute' => ['relief_type_id' => 'id']],
            [['repairs_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => RepairsType::className(), 'targetAttribute' => ['repairs_type_id' => 'id']],
            [['restroom_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => RestroomType::className(), 'targetAttribute' => ['restroom_type_id' => 'id']],
            [['room_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => RoomType::className(), 'targetAttribute' => ['room_type_id' => 'id']],
            [['stock_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StockType::className(), 'targetAttribute' => ['stock_type_id' => 'id']],
            [['storage_access_to_road_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StorageAccessToRoadType::className(), 'targetAttribute' => ['storage_access_to_road_type_id' => 'id']],
            [['storage_floar_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StorageFloarType::className(), 'targetAttribute' => ['storage_floar_type_id' => 'id']],
            [['storage_gate_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StorageGateType::className(), 'targetAttribute' => ['storage_gate_type_id' => 'id']],
            [['storage_mode_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StorageModeType::className(), 'targetAttribute' => ['storage_mode_type_id' => 'id']],
            [['storage_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StorageType::className(), 'targetAttribute' => ['storage_type_id' => 'id']],
            [['storage_unload_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StorageUnloadType::className(), 'targetAttribute' => ['storage_unload_type_id' => 'id']],
            [['time_rent_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TimeRentType::className(), 'targetAttribute' => ['time_rent_type_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['using_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => UsingType::className(), 'targetAttribute' => ['using_type_id' => 'id']],
            [['waterfication_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => WaterficationType::className(), 'targetAttribute' => ['waterfication_type_id' => 'id']],
            [['window_view_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => WindowViewType::className(), 'targetAttribute' => ['window_view_type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Пользователь',
            'deal_type_id' => 'Тип сделки',
            'object_type_id' => 'Тип объекта',
            'property_type_id' => 'Собственник',
            'address_text' => 'Адрес',
            'country' => 'Cтрана',
            'state' => 'Область',
            'sity' => 'Город',
            'street' => 'Улица',
            'number_street' => 'Номер дома',
            'district' => 'Район',
            'zip' => 'Почтовый индекс',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'price' => 'Цена за весь объект',
            'currency_type_id' => 'Валюта',
            'square_total' => 'Общая площадь',
            'square_live' => 'Жилая площадь',
            'square_kitchen' => 'Кухня',
            'rooms_total' => 'Комнат всего',
            'rooms_divided' => 'Комнат раздельно',
            'rooms_for_sale' => 'Комнат продается',
            'floor' => 'Этаж',
            'floors' => 'Этажей',
            'room_type_id' => 'Тип квартиры',
            'base_type_id' => 'Тип здания',
            'repairs_type_id' => 'Ремонт',
            'new_bilding_type_id' => 'New Bilding Type ID',
            'video_json' => 'Video Json',
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
            'extra_musoroprovod' => 'Extra Musoroprovod',
            'extra_gas' => 'Extra Gas',
            'extra_ogoroza' => 'Extra Ogoroza',
            'extra_condicioner' => 'Extra Condicioner',
            'extra_wash_masine' => 'Extra Wash Masine',
            'extra_mebel' => 'Extra Mebel',
            'extra_holodilnik' => 'Extra Holodilnik',
            'extra_wifi' => 'Extra Wifi',
            'extra_with_animal' => 'Extra With Animal',
            'extra_with_children' => 'Extra With Children',
            'extra_garage' => 'Extra Garage',
            'extra_water_pull' => 'Extra Water Pull',
            'extra_boiler' => 'Extra Boiler',
            'extra_mansandra' => 'Extra Mansandra',
            'extra_propiska' => 'Extra Propiska',
            'extra_forest' => 'Extra Forest',
            'extra_water' => 'Extra Water',
            'extra_year_access' => 'Extra Year Access',
            'extra_repairs_owner' => 'Extra Repairs Owner',
            'extra_change_provider' => 'Extra Change Provider',
            'extra_restorane' => 'Extra Restorane',
            'extra_fitnes' => 'Extra Fitnes',
            'extra_bank' => 'Extra Bank',
            'extra_bankomat' => 'Extra Bankomat',
            'extra_supermarket' => 'Extra Supermarket',
            'extra_full_access' => 'Extra Full Access',
            'extra_video_monitoring' => 'Extra Video Monitoring',
            'extra_control_access' => 'Extra Control Access',
            'extra_equipment' => 'Extra Equipment',
            'extra_separate_entrance' => 'Extra Separate Entrance',
            'extra_сrane' => 'Extra сrane',
            'extra_custom_house' => 'Extra Custom House',
            'extra_rail_conect' => 'Extra Rail Conect',
            'extra_parking_track' => 'Extra Parking Track',
            'extra_port' => 'Extra Port',
            'rooms_rent' => 'Rooms Rent',
            'sleep_place' => 'Sleep Place',
            'time_rent_type_id' => 'Time Rent Type ID',
            'pledge' => 'Pledge',
            'period' => 'Period',
            'comission_client' => 'Comission Client',
            'comission_agent' => 'Comission Agent',
            'header' => 'Header',
            'description' => 'Description',
            'url' => 'Url',
            'square_place' => 'Square Place',
            'obremeneniya' => 'Obremeneniya',
            'kadastr_number' => 'Kadastr Number',
            'rail_station' => 'Rail Station',
            'min_to_rail_station' => 'Min To Rail Station',
            'rail_station_min_type' => 'Rail Station Min Type',
            'distance_to_forest' => 'Distance To Forest',
            'distance_to_water' => 'Distance To Water',
            'poselok_name' => 'Poselok Name',
            'house_type_id' => 'House Type ID',
            'mebli_type_id' => 'Mebli Type ID',
            'otopleniye_type_id' => 'Otopleniye Type ID',
            'electrification_type_id' => 'Electrification Type ID',
            'gasfication_type_id' => 'Gasfication Type ID',
            'waterfication_type_id' => 'Waterfication Type ID',
            'cloakfication_type_id' => 'Cloakfication Type ID',
            'relief_type_id' => 'Relief Type ID',
            'forma_place_type_id' => 'Forma Place Type ID',
            'purpose_of_land_type_id' => 'Purpose Of Land Type ID',
            'nds' => 'Nds',
            'square_hall' => 'Square Hall',
            'bissnes_center_name' => 'Bissnes Center Name',
            'parko_place_count' => 'Parko Place Count',
            'parko_place_type' => 'Parko Place Type',
            'year' => 'Year',
            'using_type_id' => 'Using Type ID',
            'bilding_type_id' => 'Bilding Type ID',
            'sub_rent' => 'Sub Rent',
            'cokol' => 'Cokol',
            'stock_type_id' => 'Stock Type ID',
            'storage_mode_type_id' => 'Storage Mode Type ID',
            'storage_type_id' => 'Storage Type ID',
            'storage_floar_type_id' => 'Storage Floar Type ID',
            'storage_unload_type_id' => 'Storage Unload Type ID',
            'storage_gate_type_id' => 'Storage Gate Type ID',
            'storage_access_to_road_type_id' => 'Storage Access To Road Type ID',
            'storage_load_on_floor' => 'Storage Load On Floor',
            'storage_step_of_collumn' => 'Storage Step Of Collumn',
            'storage_power' => 'Storage Power',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBalkoonType()
    {
        return $this->hasOne(BalkoonType::className(), ['id' => 'balkoon_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaseType()
    {
        return $this->hasOne(BaseType::className(), ['id' => 'base_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBildingType()
    {
        return $this->hasOne(BildingType::className(), ['id' => 'bilding_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCloakficationType()
    {
        return $this->hasOne(CloakficationType::className(), ['id' => 'cloakfication_type_id']);
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
    public function getElectrificationType()
    {
        return $this->hasOne(ElectrificationType::className(), ['id' => 'electrification_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormaPlaceType()
    {
        return $this->hasOne(FormaPlaceType::className(), ['id' => 'forma_place_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGasficationType()
    {
        return $this->hasOne(GasficationType::className(), ['id' => 'gasfication_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHeatingType()
    {
        return $this->hasOne(HeatingType::className(), ['id' => 'heating_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouseType()
    {
        return $this->hasOne(HouseType::className(), ['id' => 'house_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMebliType()
    {
        return $this->hasOne(MebliType::className(), ['id' => 'mebli_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewBildingType()
    {
        return $this->hasOne(NewBildingType::className(), ['id' => 'new_bilding_type_id']);
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
    public function getOtopleniyeType()
    {
        return $this->hasOne(OtopleniyeType::className(), ['id' => 'otopleniye_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurposeOfLandType()
    {
        return $this->hasOne(PurposeOfLandType::className(), ['id' => 'purpose_of_land_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReliefType()
    {
        return $this->hasOne(ReliefType::className(), ['id' => 'relief_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRepairsType()
    {
        return $this->hasOne(RepairsType::className(), ['id' => 'repairs_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRestroomType()
    {
        return $this->hasOne(RestroomType::className(), ['id' => 'restroom_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomType()
    {
        return $this->hasOne(RoomType::className(), ['id' => 'room_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockType()
    {
        return $this->hasOne(StockType::className(), ['id' => 'stock_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStorageAccessToRoadType()
    {
        return $this->hasOne(StorageAccessToRoadType::className(), ['id' => 'storage_access_to_road_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStorageFloarType()
    {
        return $this->hasOne(StorageFloarType::className(), ['id' => 'storage_floar_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStorageGateType()
    {
        return $this->hasOne(StorageGateType::className(), ['id' => 'storage_gate_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStorageModeType()
    {
        return $this->hasOne(StorageModeType::className(), ['id' => 'storage_mode_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStorageType()
    {
        return $this->hasOne(StorageType::className(), ['id' => 'storage_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStorageUnloadType()
    {
        return $this->hasOne(StorageUnloadType::className(), ['id' => 'storage_unload_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimeRentType()
    {
        return $this->hasOne(TimeRentType::className(), ['id' => 'time_rent_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsingType()
    {
        return $this->hasOne(UsingType::className(), ['id' => 'using_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWaterficationType()
    {
        return $this->hasOne(WaterficationType::className(), ['id' => 'waterfication_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWindowViewType()
    {
        return $this->hasOne(WindowViewType::className(), ['id' => 'window_view_type_id']);
    }
}
