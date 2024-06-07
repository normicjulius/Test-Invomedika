<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TbRiwayat $model */

$this->title = $model->id_riwayat;
$this->params['breadcrumbs'][] = ['label' => 'Tb Riwayats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-riwayat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_riwayat' => $model->id_riwayat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_riwayat' => $model->id_riwayat], [
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
            'id_riwayat',
            'id_pasien',
            'keluhan:ntext',
            'id_tindakan',
            'id_obat',
        ],
    ]) ?>

</div>
