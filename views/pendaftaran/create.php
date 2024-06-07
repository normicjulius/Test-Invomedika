<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbPendaftaran $model */

$this->title = 'Create Pendaftaran';
$this->params['breadcrumbs'][] = ['label' => 'Tb Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-pendaftaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
