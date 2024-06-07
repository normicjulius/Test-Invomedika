<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbTindakan $model */

$this->title = 'Update Tb Tindakan: ' . $model->id_tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Tb Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tindakan, 'url' => ['view', 'id_tindakan' => $model->id_tindakan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
