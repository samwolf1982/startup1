<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ObjectsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'deal_type_id') ?>

    <?= $form->field($model, 'object_type_id') ?>

    <?= $form->field($model, 'property_type_id') ?>

    <?php // echo $form->field($model, 'address_text') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'sity') ?>

    <?php // echo $form->field($model, 'street') ?>

    <?php // echo $form->field($model, 'number_street') ?>

    <?php // echo $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'lat') ?>

    <?php // echo $form->field($model, 'lng') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'currency_type_id') ?>

    <?php // echo $form->field($model, 'square_total') ?>

    <?php // echo $form->field($model, 'square_live') ?>

    <?php // echo $form->field($model, 'square_kitchen') ?>

    <?php // echo $form->field($model, 'rooms_total') ?>

    <?php // echo $form->field($model, 'rooms_divided') ?>

    <?php // echo $form->field($model, 'rooms_for_sale') ?>

    <?php // echo $form->field($model, 'floor') ?>

    <?php // echo $form->field($model, 'floors') ?>

    <?php // echo $form->field($model, 'room_type_id') ?>

    <?php // echo $form->field($model, 'base_type_id') ?>

    <?php // echo $form->field($model, 'repairs_type_id') ?>

    <?php // echo $form->field($model, 'new_bilding_type_id') ?>

    <?php // echo $form->field($model, 'video_json') ?>

    <?php // echo $form->field($model, 'heating_type_id') ?>

    <?php // echo $form->field($model, 'window_view_type_id') ?>

    <?php // echo $form->field($model, 'restroom_type_id') ?>

    <?php // echo $form->field($model, 'balkoon_type_id') ?>

    <?php // echo $form->field($model, 'ceiling_height') ?>

    <?php // echo $form->field($model, 'type_serial_bilding') ?>

    <?php // echo $form->field($model, 'status_bild') ?>

    <?php // echo $form->field($model, 'extra_ipoteka') ?>

    <?php // echo $form->field($model, 'extra_rastrochka') ?>

    <?php // echo $form->field($model, 'extra_net') ?>

    <?php // echo $form->field($model, 'extra_phone') ?>

    <?php // echo $form->field($model, 'extra_tv') ?>

    <?php // echo $form->field($model, 'extra_invalid') ?>

    <?php // echo $form->field($model, 'extra_lift') ?>

    <?php // echo $form->field($model, 'extra_clift') ?>

    <?php // echo $form->field($model, 'extra_concierge') ?>

    <?php // echo $form->field($model, 'extra_sequrity') ?>

    <?php // echo $form->field($model, 'extra_musoroprovod') ?>

    <?php // echo $form->field($model, 'extra_gas') ?>

    <?php // echo $form->field($model, 'extra_ogoroza') ?>

    <?php // echo $form->field($model, 'extra_condicioner') ?>

    <?php // echo $form->field($model, 'extra_wash_masine') ?>

    <?php // echo $form->field($model, 'extra_mebel') ?>

    <?php // echo $form->field($model, 'extra_holodilnik') ?>

    <?php // echo $form->field($model, 'extra_wifi') ?>

    <?php // echo $form->field($model, 'extra_with_animal') ?>

    <?php // echo $form->field($model, 'extra_with_children') ?>

    <?php // echo $form->field($model, 'extra_garage') ?>

    <?php // echo $form->field($model, 'extra_water_pull') ?>

    <?php // echo $form->field($model, 'extra_boiler') ?>

    <?php // echo $form->field($model, 'extra_mansandra') ?>

    <?php // echo $form->field($model, 'extra_propiska') ?>

    <?php // echo $form->field($model, 'extra_forest') ?>

    <?php // echo $form->field($model, 'extra_water') ?>

    <?php // echo $form->field($model, 'extra_year_access') ?>

    <?php // echo $form->field($model, 'extra_repairs_owner') ?>

    <?php // echo $form->field($model, 'extra_change_provider') ?>

    <?php // echo $form->field($model, 'extra_restorane') ?>

    <?php // echo $form->field($model, 'extra_fitnes') ?>

    <?php // echo $form->field($model, 'extra_bank') ?>

    <?php // echo $form->field($model, 'extra_bankomat') ?>

    <?php // echo $form->field($model, 'extra_supermarket') ?>

    <?php // echo $form->field($model, 'extra_full_access') ?>

    <?php // echo $form->field($model, 'extra_video_monitoring') ?>

    <?php // echo $form->field($model, 'extra_control_access') ?>

    <?php // echo $form->field($model, 'extra_equipment') ?>

    <?php // echo $form->field($model, 'extra_separate_entrance') ?>

    <?php // echo $form->field($model, 'extra_сrane') ?>

    <?php // echo $form->field($model, 'extra_custom_house') ?>

    <?php // echo $form->field($model, 'extra_rail_conect') ?>

    <?php // echo $form->field($model, 'extra_parking_track') ?>

    <?php // echo $form->field($model, 'extra_port') ?>

    <?php // echo $form->field($model, 'rooms_rent') ?>

    <?php // echo $form->field($model, 'sleep_place') ?>

    <?php // echo $form->field($model, 'time_rent_type_id') ?>

    <?php // echo $form->field($model, 'pledge') ?>

    <?php // echo $form->field($model, 'period') ?>

    <?php // echo $form->field($model, 'comission_client') ?>

    <?php // echo $form->field($model, 'comission_agent') ?>

    <?php // echo $form->field($model, 'header') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'square_place') ?>

    <?php // echo $form->field($model, 'obremeneniya') ?>

    <?php // echo $form->field($model, 'kadastr_number') ?>

    <?php // echo $form->field($model, 'rail_station') ?>

    <?php // echo $form->field($model, 'min_to_rail_station') ?>

    <?php // echo $form->field($model, 'rail_station_min_type') ?>

    <?php // echo $form->field($model, 'distance_to_forest') ?>

    <?php // echo $form->field($model, 'distance_to_water') ?>

    <?php // echo $form->field($model, 'poselok_name') ?>

    <?php // echo $form->field($model, 'house_type_id') ?>

    <?php // echo $form->field($model, 'mebli_type_id') ?>

    <?php // echo $form->field($model, 'otopleniye_type_id') ?>

    <?php // echo $form->field($model, 'electrification_type_id') ?>

    <?php // echo $form->field($model, 'gasfication_type_id') ?>

    <?php // echo $form->field($model, 'waterfication_type_id') ?>

    <?php // echo $form->field($model, 'cloakfication_type_id') ?>

    <?php // echo $form->field($model, 'relief_type_id') ?>

    <?php // echo $form->field($model, 'forma_place_type_id') ?>

    <?php // echo $form->field($model, 'purpose_of_land_type_id') ?>

    <?php // echo $form->field($model, 'nds') ?>

    <?php // echo $form->field($model, 'square_hall') ?>

    <?php // echo $form->field($model, 'bissnes_center_name') ?>

    <?php // echo $form->field($model, 'parko_place_count') ?>

    <?php // echo $form->field($model, 'parko_place_type') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'using_type_id') ?>

    <?php // echo $form->field($model, 'bilding_type_id') ?>

    <?php // echo $form->field($model, 'sub_rent') ?>

    <?php // echo $form->field($model, 'cokol') ?>

    <?php // echo $form->field($model, 'stock_type_id') ?>

    <?php // echo $form->field($model, 'storage_mode_type_id') ?>

    <?php // echo $form->field($model, 'storage_type_id') ?>

    <?php // echo $form->field($model, 'storage_floar_type_id') ?>

    <?php // echo $form->field($model, 'storage_unload_type_id') ?>

    <?php // echo $form->field($model, 'storage_gate_type_id') ?>

    <?php // echo $form->field($model, 'storage_access_to_road_type_id') ?>

    <?php // echo $form->field($model, 'storage_load_on_floor') ?>

    <?php // echo $form->field($model, 'storage_step_of_collumn') ?>

    <?php // echo $form->field($model, 'storage_power') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
