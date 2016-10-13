<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\League */

$this->title = 'Create League';
$this->params['breadcrumbs'][] = ['label' => 'Leagues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="page-title">
		<div class="container">
			<h2><?= Html::encode($this->title) ?></h2>
		</div>
	</section>
<section id="create-league-form">
	<div class="container">
	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
	</div>
</section>
