<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Objects */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Objects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objects-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'deal_type_id',
            'deal_model_id',
            'object_type_id',
            'object_model_id',
            'address_text:ntext',
            'country',
            'state',
            'sity',
            'street',
            'number_street',
            'zip',
            'lat',
            'lng',
            'price',
            'currency_type_id',
            'video_json',
            'header:ntext',
            'description:ntext',
            'url:ntext',
            'property_type_id',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
