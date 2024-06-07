<?php

use app\models\TbWilayah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\WilayahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'WILAYAH';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-wilayah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Wilayah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_wilayah',
            'nama_wilayah',
            'longitude',
            'langitude',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TbWilayah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_wilayah' => $model->id_wilayah]);
                 }
            ],
        ],
    ]); ?>


</div>
