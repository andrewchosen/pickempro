<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\League */

$this->title = 'Create League';
$this->params['breadcrumbs'][] = ['label' => 'Leagues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="league">
    <div class="container">

    <?= $this->render('../../vendor/dektrium/yii2-user/views/admin/_menu') ?>

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</section>
