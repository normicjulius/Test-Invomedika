<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\RiwayatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-riwayat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_riwayat') ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'keluhan') ?>

    <?= $form->field($model, 'id_tindakan') ?>

    <?= $form->field($model, 'id_obat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
