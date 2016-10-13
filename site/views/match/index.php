<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matches';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="matches">
    <div class="container">

    <?= $this->render('../../vendor/dektrium/yii2-user/views/admin/_menu') ?>

    <h2><?= Html::encode($this->title) ?></h2>

    <?php if (!Yii::$app->user->isGuest): ?>

    <p>
        <?= Html::a('Create Match', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'home_team',
            'away_team',
            'is_underdog',
            'season',
            // 'week',
            // 'day',
            // 'time',
            // 'created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php else: ?>

        <p>You are not authorized to view this page. Go <a href="/">Home</a></p>

    <?php endif ?>

    </div>
</section>
