<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matches';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="league">
    <div class="container">

    <?= $this->render('../../vendor/dektrium/yii2-user/views/admin/_menu') ?>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Match', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            // 'home_team',
            // 'away_team',
            'is_underdog',
            'season',
            // 'week',
            // 'day',
            // 'time',
            // 'created',
            [
                'attribute' => 'awayTeam',
                'value' => 'awayTeam.team_name'
                ],
                [
                'attribute' => 'homeTeam',
                'value' => 'homeTeam.team_name'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</section>
