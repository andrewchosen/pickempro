<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Match */

$this->title = 'Update Match: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section id="matches">
    <div class="container">

    <?= $this->render('../../vendor/dektrium/yii2-user/views/admin/_menu') ?>

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</section>
