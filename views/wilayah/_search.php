<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\WilayahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-wilayah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_wilayah') ?>

    <?= $form->field($model, 'nama_wilayah') ?>

    <?= $form->field($model, 'longitude') ?>

    <?= $form->field($model, 'langitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
