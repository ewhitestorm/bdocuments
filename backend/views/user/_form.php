<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'username')
             ->textInput()
             ->hint('Напишите имя пользователя')
    ?>
    
    <?= $form->field($model, 'email')
             ->textInput(['type' => 'email'])
             ->hint('Напишите действующий адрес электронной почты')
    ?>
   
    <?= $form->field($model, 'status')
             ->dropDownList(\common\models\User::statuses())
             ->hint('Выберите статус пользователя')
    ?>
    
    <?= $form->field($model, 'password')
             ->passwordInput()
             ->hint('Напишите пароль (не менее 6-и знаков)')
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
