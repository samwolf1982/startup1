<?php

use frontend\assets\ObjectAsset;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ObjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Objects';
$this->params['breadcrumbs'][] = $this->title;
ObjectAsset::register($this);
?>

<div class="objects-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Objects', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'deal_type_id',
            'object_type_id',
            'property_type_id',
            //'address_text:ntext',
            //'country',
            //'state',
            //'sity',
            //'street',
            //'number_street',
            //'zip',
            //'lat',
            //'lng',
            //'price',
            //'currency_type_id',
            //'square_total',
            //'square_live',
            //'square_kitchen',
            //'rooms_total',
            //'rooms_divided',
            //'rooms_for_sale',
            //'floor',
            //'floors',
            //'room_type_id',
            //'base_type_id',
            //'repairs_type_id',
            //'new_bilding_type_id',
            //'video_json',
            //'heating_type_id',
            //'window_view_type_id',
            //'restroom_type_id',
            //'balkoon_type_id',
            //'ceiling_height',
            //'type_serial_bilding',
            //'status_bild',
            //'extra_ipoteka',
            //'extra_rastrochka',
            //'extra_net',
            //'extra_phone',
            //'extra_tv',
            //'extra_invalid',
            //'extra_lift',
            //'extra_clift',
            //'extra_concierge',
            //'extra_sequrity',
            //'extra_musoroprovod',
            //'extra_gas',
            //'extra_ogoroza',
            //'extra_condicioner',
            //'extra_wash_masine',
            //'extra_mebel',
            //'extra_holodilnik',
            //'extra_wifi',
            //'extra_with_animal',
            //'extra_with_children',
            //'extra_garage',
            //'extra_water_pull',
            //'extra_boiler',
            //'extra_mansandra',
            //'extra_propiska',
            //'extra_forest',
            //'extra_water',
            //'extra_year_access',
            //'extra_repairs_owner',
            //'extra_change_provider',
            //'extra_restorane',
            //'extra_fitnes',
            //'extra_bank',
            //'extra_bankomat',
            //'extra_supermarket',
            //'extra_full_access',
            //'extra_video_monitoring',
            //'extra_control_access',
            //'extra_equipment',
            //'extra_separate_entrance',
            //'extra_сrane',
            //'extra_custom_house',
            //'extra_rail_conect',
            //'extra_parking_track',
            //'extra_port',
            //'rooms_rent',
            //'sleep_place',
            //'time_rent_type_id:datetime',
            //'pledge',
            //'period',
            //'comission_client',
            //'comission_agent',
            //'header:ntext',
            //'description:ntext',
            //'url:ntext',
            //'square_place',
            //'obremeneniya',
            //'kadastr_number',
            //'rail_station',
            //'min_to_rail_station',
            //'rail_station_min_type',
            //'distance_to_forest',
            //'distance_to_water',
            //'poselok_name',
            //'house_type_id',
            //'mebli_type_id',
            //'otopleniye_type_id',
            //'electrification_type_id',
            //'gasfication_type_id',
            //'waterfication_type_id',
            //'cloakfication_type_id',
            //'relief_type_id',
            //'forma_place_type_id',
            //'purpose_of_land_type_id',
            //'nds',
            //'square_hall',
            //'bissnes_center_name',
            //'parko_place_count',
            //'parko_place_type',
            //'year',
            //'using_type_id',
            //'bilding_type_id',
            //'sub_rent',
            //'cokol',
            //'stock_type_id',
            //'storage_mode_type_id',
            //'storage_type_id',
            //'storage_floar_type_id',
            //'storage_unload_type_id',
            //'storage_gate_type_id',
            //'storage_access_to_road_type_id',
            //'storage_load_on_floor',
            //'storage_step_of_collumn',
            //'storage_power',
            //'status',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
