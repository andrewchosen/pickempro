<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MatchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="match-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'home_team') ?>

    <?= $form->field($model, 'away_team') ?>

    <?= $form->field($model, 'is_underdog') ?>

    <?= $form->field($model, 'season') ?>

    <?php // echo $form->field($model, 'week') ?>

    <?php // echo $form->field($model, 'day') ?>

    <?php // echo $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
