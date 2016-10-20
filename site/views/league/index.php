<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LeagueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Leagues';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="league">
    <div class="container">

    <?= $this->render('../../vendor/dektrium/yii2-user/views/admin/_menu') ?>

    <h2><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create League', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'max_players',
            'mode',
            'non_underdog_win',
            // 'underdog_win',
            // 'database',
            // 'created',
            // 'owner',

            [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view}',
            'buttons' => [
                    'view' => function ($url,$model,$key) {
                                    return Html::a('View', $url);
                    },
                ],
                ],
        ],
    ]); ?>
    </div>
</section>
