<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Program */

$this->title = 'Update Program'   ;
$this->params['breadcrumbs'][] = ['label' => 'Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="program-update">

    <h1><?= Html::encode($this->title) ?></h1><br>

    <?= Html::a('Add Memebers', ['create'], ['class' => 'btn btn-success']) ?>
    <br><br><br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
