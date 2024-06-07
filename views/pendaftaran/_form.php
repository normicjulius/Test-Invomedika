<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TbWilayah;

/** @var yii\web\View $this */
/** @var app\models\TbPendaftaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-pendaftaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'jenis_kelamin')->dropDownList(
                ['L' => 'Laki-Laki', 'P' => 'Perempuan']
    ); ?>

    <?php $dataPost=ArrayHelper::map(\app\models\TbWilayah::find()
        ->asArray()->all(), 'id_wilayah', 'nama_wilayah');
        echo $form->field($model, 'id_wilayah')
        ->dropDownList(
            $dataPost, ['id_wilayah'=>'nama_wilayah']
    ); ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nomor_telepon')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
