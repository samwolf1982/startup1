<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ObjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Objects';
$this->params['breadcrumbs'][] = $this->title;
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
            'deal_model_id',
            'object_type_id',
            //'object_model_id',
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
            //'video_json',
            //'header:ntext',
            //'description:ntext',
            //'url:ntext',
            //'property_type_id',
            //'status',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
