<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Match */

$this->title = 'Create Match';
$this->params['breadcrumbs'][] = ['label' => 'Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="league">
    <div class="container">

    <?= $this->render('../../vendor/dektrium/yii2-user/views/admin/_menu') ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</section>
