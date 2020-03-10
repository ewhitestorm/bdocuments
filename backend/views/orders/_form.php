<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')
             ->dropDownList(\common\models\Orders::titless())
             ->hint('Выберите вид приказа')
           //->textInput(['maxlength' => true])
    ?>
    
    <?= $form->field($model, 'worker')
             ->textInput(['maxlength' => true]) 
             ->hint('Напишите ФИО работника')
    ?>
    
    <?= $form->field($model, 'manager')
             ->textInput(['maxlength' => true]) 
             ->hint('Напишите ФИО руководителя')
    ?>

    <?= $form->field($model, 'text')
             ->textarea(['rows' => 6])
             ->hint('Тект документа')
    ?>

    <?= $form->field($model, 'url')
             ->textInput(['maxlength' => true])
             ->hint('Месторасположение документа на компьютере')
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
