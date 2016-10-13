<?php

namespace app\controllers;

use Yii;
use app\models\League;
use yii\filters\AccessControl;
use yii\web\Controller;

class DashboardController extends Controller
{
	public function actionIndex()
    {
    	$user_id = Yii::$app->user->getId();
    	$league_list = League::find()
    		->where(['owner' => $user_id])->all();
    	$model = $league_list;
        return $this->render('index', [
                'model' => $model,
            ]);
    }
}