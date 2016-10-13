<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\League */
/* @var $form yii\widgets\ActiveForm */
?>
    <!-- Form -->
    <section id="create-league-form">
        <div class="container">
            <?php 
                $id = yii::$app->user->id;
                $form = ActiveForm::begin();
                $form->field($model, 'owner')->hiddenInput(['value' => 1])->label(false);
            ?>
                <fieldset>
                    <h3>League Info</h3>
                    <p>
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                    </p>
                    <p>
                        <?= $form->field($model, 'max_players')->dropDownList([2 => '2', 3 => '3', 4 => '4']); ?>
                    </p>
                </fieldset>
                <fieldset>
                    <h3>Game Mode</h3>
                    <p>
                        <?= $form->field($model, 'mode')->radio(array('label'=>'
                            <strong>Classic Mode</strong>
                            This is the classic pick\'em game mode where players/teams gain points each week and winners are chosen either weekly or accumulative or both.
                        ')); ?>
                    </p>
                </fieldset>
                <fieldset>
                    <h3>League Rules</h3>
                    <p>
                        <?= $form->field($model, 'non_underdog_win')->textInput() ?>
                    </p>
                    <p>
                        <?= $form->field($model, 'underdog_win')->textInput() ?>
                    </p>
                    <p>
                        <?= $form->field($model, 'database')->dropDownList([0 => 'PEP']); ?>
                    </p>
                </fieldset>
                <fieldset class="footer">
                    <p>
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'green' : 'btn btn-primary']) ?>
                        <button class="blue">Cancel</button>
                    </p>
                </fieldset>
            <?php ActiveForm::end(); ?>
        </div>
    </section>