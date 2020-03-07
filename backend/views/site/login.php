<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
$fieldOptions = [
	'options' => ['class' => 'form-group'],
	'inputTemplate' => '{input}',
];
?>

<div class="login-box">
    <div class="text-center">
	<h1 class="h2">Административная панель</h1>
    </div>
    
    <?php $form = ActiveForm::begin([
		'options' => ['class' => 'user'],
		'enableClientValidation' => false,
		'fieldConfig' => [
			'template' => "{input}\n{error}",
			'errorOptions' => [
				'class' => 'text-danger small text-center',
				'style' => 'margin-top: 6px;',
			],
		],
	]) ?>
    
    <?= $form->field($model, 'username', $fieldOptions)
		->label(false)
		->textInput([
			'class' => 'form-control form-control-user',
			'placeholder' => 'Имя',
		])
	?>
    
    <?= $form->field($model, 'password', $fieldOptions)
		->label(false)
		->textInput([
			'type' => 'password',
			'class' => 'form-control form-control-user',
			'placeholder' => 'Пароль',
		])
	?>

    <?= $form->field($model, 'rememberMe', $fieldOptions)
		->checkbox()
	?>

	<hr>

    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'login-button']) ?>

    <?php ActiveForm::end() ?>
    
<!--<div class="site-login">
    <h1><//?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <//?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <//?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <//?= $form->field($model, 'password')->passwordInput() ?>

                <//?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <//?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <//?php ActiveForm::end(); ?>
        </div>
    </div>
</div>-->
</div>
