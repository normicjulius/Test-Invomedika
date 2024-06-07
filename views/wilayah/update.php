<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbWilayah $model */

$this->title = 'Update Wilayah: ' . $model->id_wilayah;
$this->params['breadcrumbs'][] = ['label' => 'Tb Wilayahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_wilayah, 'url' => ['view', 'id_wilayah' => $model->id_wilayah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-wilayah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
