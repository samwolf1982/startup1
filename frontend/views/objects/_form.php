<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Objects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'deal_type_id')->textInput() ?>

    <?= $form->field($model, 'object_type_id')->textInput() ?>

    <?= $form->field($model, 'property_type_id')->textInput() ?>

    <?= $form->field($model, 'address_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput() ?>

    <?= $form->field($model, 'sity')->textInput() ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lat')->textInput() ?>

    <?= $form->field($model, 'lng')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currency_type_id')->textInput() ?>

    <?= $form->field($model, 'square_total')->textInput() ?>

    <?= $form->field($model, 'square_live')->textInput() ?>

    <?= $form->field($model, 'square_kitchen')->textInput() ?>

    <?= $form->field($model, 'rooms_total')->textInput() ?>

    <?= $form->field($model, 'rooms_divided')->textInput() ?>

    <?= $form->field($model, 'rooms_for_sale')->textInput() ?>

    <?= $form->field($model, 'floor')->textInput() ?>

    <?= $form->field($model, 'floors')->textInput() ?>

    <?= $form->field($model, 'room_type_id')->textInput() ?>

    <?= $form->field($model, 'base_type_id')->textInput() ?>

    <?= $form->field($model, 'repairs_type_id')->textInput() ?>

    <?= $form->field($model, 'new_bilding_type_id')->textInput() ?>

    <?= $form->field($model, 'video_json')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'heating_type_id')->textInput() ?>

    <?= $form->field($model, 'window_view_type_id')->textInput() ?>

    <?= $form->field($model, 'restroom_type_id')->textInput() ?>

    <?= $form->field($model, 'balkoon_type_id')->textInput() ?>

    <?= $form->field($model, 'ceiling_height')->textInput() ?>

    <?= $form->field($model, 'type_serial_bilding')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_bild')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extra_ipoteka')->textInput() ?>

    <?= $form->field($model, 'extra_rastrochka')->textInput() ?>

    <?= $form->field($model, 'extra_net')->textInput() ?>

    <?= $form->field($model, 'extra_phone')->textInput() ?>

    <?= $form->field($model, 'extra_tv')->textInput() ?>

    <?= $form->field($model, 'extra_invalid')->textInput() ?>

    <?= $form->field($model, 'extra_lift')->textInput() ?>

    <?= $form->field($model, 'extra_clift')->textInput() ?>

    <?= $form->field($model, 'extra_concierge')->textInput() ?>

    <?= $form->field($model, 'extra_sequrity')->textInput() ?>

    <?= $form->field($model, 'extra_musoroprovod')->textInput() ?>

    <?= $form->field($model, 'extra_gas')->textInput() ?>

    <?= $form->field($model, 'extra_ogoroza')->textInput() ?>

    <?= $form->field($model, 'extra_condicioner')->textInput() ?>

    <?= $form->field($model, 'extra_wash_masine')->textInput() ?>

    <?= $form->field($model, 'extra_mebel')->textInput() ?>

    <?= $form->field($model, 'extra_holodilnik')->textInput() ?>

    <?= $form->field($model, 'extra_wifi')->textInput() ?>

    <?= $form->field($model, 'extra_with_animal')->textInput() ?>

    <?= $form->field($model, 'extra_with_children')->textInput() ?>

    <?= $form->field($model, 'extra_garage')->textInput() ?>

    <?= $form->field($model, 'extra_water_pull')->textInput() ?>

    <?= $form->field($model, 'extra_boiler')->textInput() ?>

    <?= $form->field($model, 'extra_mansandra')->textInput() ?>

    <?= $form->field($model, 'extra_propiska')->textInput() ?>

    <?= $form->field($model, 'extra_forest')->textInput() ?>

    <?= $form->field($model, 'extra_water')->textInput() ?>

    <?= $form->field($model, 'extra_year_access')->textInput() ?>

    <?= $form->field($model, 'extra_repairs_owner')->textInput() ?>

    <?= $form->field($model, 'extra_change_provider')->textInput() ?>

    <?= $form->field($model, 'extra_restorane')->textInput() ?>

    <?= $form->field($model, 'extra_fitnes')->textInput() ?>

    <?= $form->field($model, 'extra_bank')->textInput() ?>

    <?= $form->field($model, 'extra_bankomat')->textInput() ?>

    <?= $form->field($model, 'extra_supermarket')->textInput() ?>

    <?= $form->field($model, 'extra_full_access')->textInput() ?>

    <?= $form->field($model, 'extra_video_monitoring')->textInput() ?>

    <?= $form->field($model, 'extra_control_access')->textInput() ?>

    <?= $form->field($model, 'extra_equipment')->textInput() ?>

    <?= $form->field($model, 'extra_separate_entrance')->textInput() ?>

    <?= $form->field($model, 'extra_сrane')->textInput() ?>

    <?= $form->field($model, 'extra_custom_house')->textInput() ?>

    <?= $form->field($model, 'extra_rail_conect')->textInput() ?>

    <?= $form->field($model, 'extra_parking_track')->textInput() ?>

    <?= $form->field($model, 'extra_port')->textInput() ?>

    <?= $form->field($model, 'rooms_rent')->textInput() ?>

    <?= $form->field($model, 'sleep_place')->textInput() ?>

    <?= $form->field($model, 'time_rent_type_id')->textInput() ?>

    <?= $form->field($model, 'pledge')->textInput() ?>

    <?= $form->field($model, 'period')->textInput() ?>

    <?= $form->field($model, 'comission_client')->textInput() ?>

    <?= $form->field($model, 'comission_agent')->textInput() ?>

    <?= $form->field($model, 'header')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'url')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'square_place')->textInput() ?>

    <?= $form->field($model, 'obremeneniya')->textInput() ?>

    <?= $form->field($model, 'kadastr_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rail_station')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'min_to_rail_station')->textInput() ?>

    <?= $form->field($model, 'rail_station_min_type')->textInput() ?>

    <?= $form->field($model, 'distance_to_forest')->textInput() ?>

    <?= $form->field($model, 'distance_to_water')->textInput() ?>

    <?= $form->field($model, 'poselok_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'house_type_id')->textInput() ?>

    <?= $form->field($model, 'mebli_type_id')->textInput() ?>

    <?= $form->field($model, 'otopleniye_type_id')->textInput() ?>

    <?= $form->field($model, 'electrification_type_id')->textInput() ?>

    <?= $form->field($model, 'gasfication_type_id')->textInput() ?>

    <?= $form->field($model, 'waterfication_type_id')->textInput() ?>

    <?= $form->field($model, 'cloakfication_type_id')->textInput() ?>

    <?= $form->field($model, 'relief_type_id')->textInput() ?>

    <?= $form->field($model, 'forma_place_type_id')->textInput() ?>

    <?= $form->field($model, 'purpose_of_land_type_id')->textInput() ?>

    <?= $form->field($model, 'nds')->textInput() ?>

    <?= $form->field($model, 'square_hall')->textInput() ?>

    <?= $form->field($model, 'bissnes_center_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parko_place_count')->textInput() ?>

    <?= $form->field($model, 'parko_place_type')->textInput() ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'using_type_id')->textInput() ?>

    <?= $form->field($model, 'bilding_type_id')->textInput() ?>

    <?= $form->field($model, 'sub_rent')->textInput() ?>

    <?= $form->field($model, 'cokol')->textInput() ?>

    <?= $form->field($model, 'stock_type_id')->textInput() ?>

    <?= $form->field($model, 'storage_mode_type_id')->textInput() ?>

    <?= $form->field($model, 'storage_type_id')->textInput() ?>

    <?= $form->field($model, 'storage_floar_type_id')->textInput() ?>

    <?= $form->field($model, 'storage_unload_type_id')->textInput() ?>

    <?= $form->field($model, 'storage_gate_type_id')->textInput() ?>

    <?= $form->field($model, 'storage_access_to_road_type_id')->textInput() ?>

    <?= $form->field($model, 'storage_load_on_floor')->textInput() ?>

    <?= $form->field($model, 'storage_step_of_collumn')->textInput() ?>

    <?= $form->field($model, 'storage_power')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
