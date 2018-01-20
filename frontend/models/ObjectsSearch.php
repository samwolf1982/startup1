<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Objects;

/**
 * ObjectsSearch represents the model behind the search form of `frontend\models\Objects`.
 */
class ObjectsSearch extends Objects
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'deal_type_id', 'object_type_id', 'property_type_id', 'state', 'sity', 'currency_type_id', 'rooms_total', 'rooms_divided', 'rooms_for_sale', 'floor', 'floors', 'room_type_id', 'base_type_id', 'repairs_type_id', 'new_bilding_type_id', 'heating_type_id', 'window_view_type_id', 'restroom_type_id', 'balkoon_type_id', 'ceiling_height', 'extra_ipoteka', 'extra_rastrochka', 'extra_net', 'extra_phone', 'extra_tv', 'extra_invalid', 'extra_lift', 'extra_clift', 'extra_concierge', 'extra_sequrity', 'extra_musoroprovod', 'extra_gas', 'extra_ogoroza', 'extra_condicioner', 'extra_wash_masine', 'extra_mebel', 'extra_holodilnik', 'extra_wifi', 'extra_with_animal', 'extra_with_children', 'extra_garage', 'extra_water_pull', 'extra_boiler', 'extra_mansandra', 'extra_propiska', 'extra_forest', 'extra_water', 'extra_year_access', 'extra_repairs_owner', 'extra_change_provider', 'extra_restorane', 'extra_fitnes', 'extra_bank', 'extra_bankomat', 'extra_supermarket', 'extra_full_access', 'extra_video_monitoring', 'extra_control_access', 'extra_equipment', 'extra_separate_entrance', 'extra_сrane', 'extra_custom_house', 'extra_rail_conect', 'extra_parking_track', 'extra_port', 'rooms_rent', 'sleep_place', 'time_rent_type_id', 'period', 'square_place', 'obremeneniya', 'min_to_rail_station', 'rail_station_min_type', 'distance_to_forest', 'distance_to_water', 'house_type_id', 'mebli_type_id', 'otopleniye_type_id', 'electrification_type_id', 'gasfication_type_id', 'waterfication_type_id', 'cloakfication_type_id', 'relief_type_id', 'forma_place_type_id', 'purpose_of_land_type_id', 'nds', 'parko_place_count', 'parko_place_type', 'year', 'using_type_id', 'bilding_type_id', 'sub_rent', 'cokol', 'stock_type_id', 'storage_mode_type_id', 'storage_type_id', 'storage_floar_type_id', 'storage_unload_type_id', 'storage_gate_type_id', 'storage_access_to_road_type_id', 'storage_load_on_floor', 'storage_step_of_collumn', 'storage_power', 'status', 'created_at', 'updated_at'], 'integer'],
            [['address_text', 'country', 'street', 'number_street', 'zip', 'video_json', 'type_serial_bilding', 'status_bild', 'header', 'description', 'url', 'kadastr_number', 'rail_station', 'poselok_name', 'bissnes_center_name'], 'safe'],
            [['lat', 'lng', 'price', 'square_total', 'square_live', 'square_kitchen', 'pledge', 'comission_client', 'comission_agent', 'square_hall'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Objects::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'deal_type_id' => $this->deal_type_id,
            'object_type_id' => $this->object_type_id,
            'property_type_id' => $this->property_type_id,
            'state' => $this->state,
            'sity' => $this->sity,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'price' => $this->price,
            'currency_type_id' => $this->currency_type_id,
            'square_total' => $this->square_total,
            'square_live' => $this->square_live,
            'square_kitchen' => $this->square_kitchen,
            'rooms_total' => $this->rooms_total,
            'rooms_divided' => $this->rooms_divided,
            'rooms_for_sale' => $this->rooms_for_sale,
            'floor' => $this->floor,
            'floors' => $this->floors,
            'room_type_id' => $this->room_type_id,
            'base_type_id' => $this->base_type_id,
            'repairs_type_id' => $this->repairs_type_id,
            'new_bilding_type_id' => $this->new_bilding_type_id,
            'heating_type_id' => $this->heating_type_id,
            'window_view_type_id' => $this->window_view_type_id,
            'restroom_type_id' => $this->restroom_type_id,
            'balkoon_type_id' => $this->balkoon_type_id,
            'ceiling_height' => $this->ceiling_height,
            'extra_ipoteka' => $this->extra_ipoteka,
            'extra_rastrochka' => $this->extra_rastrochka,
            'extra_net' => $this->extra_net,
            'extra_phone' => $this->extra_phone,
            'extra_tv' => $this->extra_tv,
            'extra_invalid' => $this->extra_invalid,
            'extra_lift' => $this->extra_lift,
            'extra_clift' => $this->extra_clift,
            'extra_concierge' => $this->extra_concierge,
            'extra_sequrity' => $this->extra_sequrity,
            'extra_musoroprovod' => $this->extra_musoroprovod,
            'extra_gas' => $this->extra_gas,
            'extra_ogoroza' => $this->extra_ogoroza,
            'extra_condicioner' => $this->extra_condicioner,
            'extra_wash_masine' => $this->extra_wash_masine,
            'extra_mebel' => $this->extra_mebel,
            'extra_holodilnik' => $this->extra_holodilnik,
            'extra_wifi' => $this->extra_wifi,
            'extra_with_animal' => $this->extra_with_animal,
            'extra_with_children' => $this->extra_with_children,
            'extra_garage' => $this->extra_garage,
            'extra_water_pull' => $this->extra_water_pull,
            'extra_boiler' => $this->extra_boiler,
            'extra_mansandra' => $this->extra_mansandra,
            'extra_propiska' => $this->extra_propiska,
            'extra_forest' => $this->extra_forest,
            'extra_water' => $this->extra_water,
            'extra_year_access' => $this->extra_year_access,
            'extra_repairs_owner' => $this->extra_repairs_owner,
            'extra_change_provider' => $this->extra_change_provider,
            'extra_restorane' => $this->extra_restorane,
            'extra_fitnes' => $this->extra_fitnes,
            'extra_bank' => $this->extra_bank,
            'extra_bankomat' => $this->extra_bankomat,
            'extra_supermarket' => $this->extra_supermarket,
            'extra_full_access' => $this->extra_full_access,
            'extra_video_monitoring' => $this->extra_video_monitoring,
            'extra_control_access' => $this->extra_control_access,
            'extra_equipment' => $this->extra_equipment,
            'extra_separate_entrance' => $this->extra_separate_entrance,
            'extra_сrane' => $this->extra_сrane,
            'extra_custom_house' => $this->extra_custom_house,
            'extra_rail_conect' => $this->extra_rail_conect,
            'extra_parking_track' => $this->extra_parking_track,
            'extra_port' => $this->extra_port,
            'rooms_rent' => $this->rooms_rent,
            'sleep_place' => $this->sleep_place,
            'time_rent_type_id' => $this->time_rent_type_id,
            'pledge' => $this->pledge,
            'period' => $this->period,
            'comission_client' => $this->comission_client,
            'comission_agent' => $this->comission_agent,
            'square_place' => $this->square_place,
            'obremeneniya' => $this->obremeneniya,
            'min_to_rail_station' => $this->min_to_rail_station,
            'rail_station_min_type' => $this->rail_station_min_type,
            'distance_to_forest' => $this->distance_to_forest,
            'distance_to_water' => $this->distance_to_water,
            'house_type_id' => $this->house_type_id,
            'mebli_type_id' => $this->mebli_type_id,
            'otopleniye_type_id' => $this->otopleniye_type_id,
            'electrification_type_id' => $this->electrification_type_id,
            'gasfication_type_id' => $this->gasfication_type_id,
            'waterfication_type_id' => $this->waterfication_type_id,
            'cloakfication_type_id' => $this->cloakfication_type_id,
            'relief_type_id' => $this->relief_type_id,
            'forma_place_type_id' => $this->forma_place_type_id,
            'purpose_of_land_type_id' => $this->purpose_of_land_type_id,
            'nds' => $this->nds,
            'square_hall' => $this->square_hall,
            'parko_place_count' => $this->parko_place_count,
            'parko_place_type' => $this->parko_place_type,
            'year' => $this->year,
            'using_type_id' => $this->using_type_id,
            'bilding_type_id' => $this->bilding_type_id,
            'sub_rent' => $this->sub_rent,
            'cokol' => $this->cokol,
            'stock_type_id' => $this->stock_type_id,
            'storage_mode_type_id' => $this->storage_mode_type_id,
            'storage_type_id' => $this->storage_type_id,
            'storage_floar_type_id' => $this->storage_floar_type_id,
            'storage_unload_type_id' => $this->storage_unload_type_id,
            'storage_gate_type_id' => $this->storage_gate_type_id,
            'storage_access_to_road_type_id' => $this->storage_access_to_road_type_id,
            'storage_load_on_floor' => $this->storage_load_on_floor,
            'storage_step_of_collumn' => $this->storage_step_of_collumn,
            'storage_power' => $this->storage_power,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'address_text', $this->address_text])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'number_street', $this->number_street])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'video_json', $this->video_json])
            ->andFilterWhere(['like', 'type_serial_bilding', $this->type_serial_bilding])
            ->andFilterWhere(['like', 'status_bild', $this->status_bild])
            ->andFilterWhere(['like', 'header', $this->header])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'kadastr_number', $this->kadastr_number])
            ->andFilterWhere(['like', 'rail_station', $this->rail_station])
            ->andFilterWhere(['like', 'poselok_name', $this->poselok_name])
            ->andFilterWhere(['like', 'bissnes_center_name', $this->bissnes_center_name]);

        return $dataProvider;
    }
}
