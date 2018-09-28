<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = '编辑国家信息：'.$model->name;
$this->params['breadcrumbs'][] = ['label' => '国家', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'submitButton'=>['编辑']
    ]) ?>
	<!-- <?=Html::submitButton('编辑',['class'=>'btn btn-success'])?> -->
</div>
