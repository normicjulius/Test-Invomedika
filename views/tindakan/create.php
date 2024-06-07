<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TbTindakan $model */

$this->title = 'Create Tb Tindakan';
$this->params['breadcrumbs'][] = ['label' => 'Tb Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-tindakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
