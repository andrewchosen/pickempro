<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LeagueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="league-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'max_players') ?>

    <?= $form->field($model, 'mode') ?>

    <?= $form->field($model, 'non_underdog_win') ?>

    <?php // echo $form->field($model, 'underdog_win') ?>

    <?php // echo $form->field($model, 'database') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'owner') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
