<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin();?>
<?= $form->field($model,'name')->label('姓名');?>
<?= $form->field($model,'email')->label('邮箱');?>
<div class="form-group">
	<?=Html::submitButton('确定',['class'=>'btn btn-primary'])?>
</div>
<?php ActiveForm::end();?>