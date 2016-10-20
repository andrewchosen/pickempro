<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TeamsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teams-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'team_name') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'current_wins') ?>

    <?= $form->field($model, 'current_losses') ?>

    <?php // echo $form->field($model, 'division') ?>

    <?php // echo $form->field($model, 'conference') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
