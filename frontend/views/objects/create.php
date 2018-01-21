<?php

use frontend\assets\ObjectAsset;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Objects */

$this->title = 'Create Objects';
$this->params['breadcrumbs'][] = ['label' => 'Objects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
ObjectAsset::register($this);

$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyC0W8pvVVI5WnPmQ253sS--xeiq2CpxUII&libraries=places&callback=initAutocomplete',  ['position' => yii\web\View::POS_END,
    'depends' => [\frontend\assets\ObjectAsset::className()]],'js-print-category-map');
?>

<div class="objects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('create_form_list/_form1.php', compact('model','model_new_bilding','deal_list','object_type_list','property_type','prompt_params','currency_type_list','room_type_list','prompt_params_type_room',
        "base_type_list",'repairs_type_list','new_bilding_date_end_list','prompt_new_bilding','new_bilding_year_end_list') ) ?>

</div>
