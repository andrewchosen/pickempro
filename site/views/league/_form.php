<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\League */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="league-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'max_players')->textInput() ?>

    <?= $form->field($model, 'mode')->textInput() ?>

    <?= $form->field($model, 'non_underdog_win')->textInput() ?>

    <?= $form->field($model, 'underdog_win')->textInput() ?>

    <?= $form->field($model, 'database')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owner')->hiddenInput(['value' => 1])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
