<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class DashboardController extends Controller
{
	public function actionIndex()
    {
        return $this->render('index');
    }
}