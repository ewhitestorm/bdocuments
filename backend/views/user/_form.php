<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'username')->textInput() ?>
    
    <?= $form->field($model, 'email')->textInput(['type' => 'email']) ?>
   
    <?= $form->field($model, 'status')->dropDownList([
        \common\models\User::STATUS_INACTIVE => 'Неактивный',
        \common\models\User::STATUS_ACTIVE => 'Активный',
        \common\models\User::STATUS_DELETED => 'Удаленный',
    ]) ?>
    
    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
