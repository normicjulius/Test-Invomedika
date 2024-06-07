<?php

use app\models\TbRiwayat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\RiwayatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tb Riwayats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-riwayat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Riwayat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_riwayat',
            'id_pasien',
            'keluhan:ntext',
            'id_tindakan',
            'id_obat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TbRiwayat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_riwayat' => $model->id_riwayat]);
                 }
            ],
        ],
    ]); ?>


</div>
