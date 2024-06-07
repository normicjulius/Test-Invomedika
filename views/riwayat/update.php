<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbRiwayat $model */

$this->title = 'Update Tb Riwayat: ' . $model->id_riwayat;
$this->params['breadcrumbs'][] = ['label' => 'Tb Riwayats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_riwayat, 'url' => ['view', 'id_riwayat' => $model->id_riwayat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-riwayat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
