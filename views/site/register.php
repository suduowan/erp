<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = Yii::$app->name.'-用户注册';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>请填写下列信息以完成登录。</p>

    <?php $form = ActiveForm::begin([
        'id' => 'register-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'请填写用户名！']) ?>

        <?= $form->field($model, 'phone')->textInput(['placeholder'=>'请填写手机号！']) ?>

        <?= $form->field($model, 'sex')->radioList([
            1 => '男', 
            2 => '女'
        ]); ?>
        
        <?= $form->field($model, 'note')->textarea(['rows'=>3,'placeholder'=>'请填写备注信息！'])->label('备注') ?>

        <?= $form->field($model, 'password')->passwordInput()->label('登录密码') ?>
        <?= $form->field($model, 'qpassword')->passwordInput()->label('确认密码') ?>



        

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        已有账号？<a href="<?=Url::to(['site/login']);?>">点击登录</a>吧！
    </div>
</div>
