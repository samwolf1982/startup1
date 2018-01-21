<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Objects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objects-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group">
    <?= Html::tag('span', Html::submitInput('Cохранить', ['class' => '']), ['class' => 'btn btn-pagination']) ?>
    </div>
    <?php //  cs-select cs-skin-elastic $form->field($model, 'user_id')->textInput() ?>

    <div class="panel panel-default">
    <div class="panel-body">
        <div class="col-md-6 ">
            <?= $form->field($model, 'deal_type_id')->dropDownList($deal_list,['class'=>'cs-select cs-skin-elastic']) ?>
        </div>
        <div class="col-md-6 ">
            <?= $form->field($model, 'object_type_id')->dropDownList($object_type_list,['class'=>'cs-select cs-skin-elastic']) ?>
        </div>
        <div class="col-sm-12 text-center">

            <?= $form->field($model, 'property_type_id')->dropDownList($property_type,[ $prompt_params,'class'=>'cs-select cs-skin-elastic']) ?>
        </div>
    </div>
    </div>


      <!-- map address -->
    <div class="panel panel-default">
        <div class="panel-body">

            <table id="address" hidden style="display: none!important;" class="hidden">
                <tr>
                    <td class="label">Street address</td>
                    <td class="slimField"><input class="field" id="street_number"
                                                 disabled="true"></input></td>
                    <td class="wideField" colspan="2"><input class="field" id="route"
                                                             disabled="true"></input></td>
                </tr>
                <tr>
                    <td class="label">City</td>
                    <!-- Note: Selection of address components in this example is typical.
                         You may need to adjust it for the locations relevant to your app. See
                         https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
                    -->
                    <td class="wideField" colspan="3"><input class="field" id="locality"
                                                             disabled="true"></input></td>
                </tr>
                <tr>
                    <td class="label">State</td>
                    <td class="slimField"><input class="field"
                                                 id="administrative_area_level_1" disabled="true"></input></td>
                    <td class="label">Zip code</td>
                    <td class="wideField"><input class="field" id="postal_code"
                                                 disabled="true"></input></td>
                </tr>
                <tr>
                    <td class="label">Country</td>
                    <td class="wideField" colspan="3"><input class="field"
                                                             id="country" disabled="true"></input></td>
                </tr>
            </table>

            <div class="col-sm-12 col-md-6 col-md-offset-3  col-lg-6 col-lg-offset-3">
                <?= $form->field($model, 'address_text')->textInput(['maxlength' => true]) ?>
            </div>
              <div class="clearfix"></div>

            <div class="col-md-4 col-lg-4">
                <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

            </div>
            <div class="col-md-4 col-lg-4">
                <?= $form->field($model, 'state')->textInput() ?>

            </div>
            <div class="col-md-4 col-lg-4">
                <?= $form->field($model, 'sity')->textInput() ?>

            </div>
<div class="clearfix"></div>
            <div class="col-md-4 col-lg-4">
                <?= $form->field($model, 'district')->textInput() ?>

            </div>
            <div class="col-md-4 col-lg-4">
                <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

            </div>
            <div class="col-md-2 col-lg-2">
                <?= $form->field($model, 'number_street')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2 col-lg-2">
                <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

            </div>
            <div class="clearfix"></div>

<div class="col-sm-12 wrap_map">
    <div id="map"></div>
</div>

            <?= $form->field($model, 'lat')->textInput(['class'=>'hidden'])->label('') ?>

            <?= $form->field($model, 'lng')->textInput(['class'=>'hidden'])->label('') ?>
        </div>
    </div>


 <!-- priche other info -->
    <div class="panel panel-default">
        <div class="panel-body">
        <div class="col-md-9">
        <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <div class="wrp_radio_curency">
        <?= $form->field($model, 'currency_type_id')->radioList($currency_type_list,['class'=>'radio-style']); ?>
            </div>
    </div>
<div class="clearfix"></div>

            <div class="col-md-3">
                <?= $form->field($model, 'square_total')->textInput() ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'square_live')->textInput() ?>

            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'square_kitchen')->textInput() ?>

            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'rooms_total')->textInput() ?>

            </div>
<div class="clearfix"></div>
            <div class="col-md-3">
                <?= $form->field($model, 'rooms_divided')->textInput() ?>

            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'rooms_for_sale')->textInput() ?>

            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'floor')->textInput() ?>

            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'floors')->textInput() ?>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>


    <div class="panel panel-default">
        <div class="panel-body">

    <div class="col-md-4">
        <?= $form->field($model, 'room_type_id')->dropDownList($room_type_list,array_merge( $prompt_params_type_room,['class'=>'cs-select cs-skin-elastic'])) ?>

    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'base_type_id')->dropDownList($base_type_list,array_merge( $prompt_params_type_room,['class'=>'cs-select cs-skin-elastic']))  ?>

    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'repairs_type_id')->dropDownList($repairs_type_list,array_merge( $prompt_params_type_room,['class'=>'cs-select cs-skin-elastic'])) ?>

    </div>
    <div class="clearfix"></div>
<div class="col-sm-12">

                <button class="btn btn-primary" type="button" onclick="toogle_accordion();" data-toggle="collapse"   aria-expanded="false" aria-controls="collapseExample">
                    Button with data-target
                </button>

            <div class="collapse" id="collapseExample">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <section class="wrp_new_bilding">
                            <?= $form->field($model_new_bilding, 'date_of_issue_quarter')->dropDownList($new_bilding_date_end_list,array_merge($prompt_new_bilding,['class'=>'cs-select cs-skin-elastic'])) ?>
                            <?= $form->field($model_new_bilding, 'date_of_issue_year')->dropDownList($new_bilding_year_end_list,array_merge($prompt_new_bilding,['class'=>'cs-select cs-skin-elastic'])) ?>
                            <?= $form->field($model_new_bilding, 'url') ?>
                            <?= $form->field($model_new_bilding, 'name_gk_corpus') ?>
                            <?= $form->field($model_new_bilding, 'developer') ?>
                        </section>
                    </div>
                </div>
            </div>

</div>



        </div>
    </div>


    <script>
      function toogle_accordion(){
           $('#collapseExample').toggle('slow');
        }
    </script>





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

    <?php // $form->field($model, 'status')->textInput() ?>

    <?php // $form->field($model, 'created_at')->textInput() ?>

    <?php // $form->field($model, 'updated_at')->textInput() ?>



    <?php ActiveForm::end(); ?>

</div>
