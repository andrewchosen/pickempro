<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Dashboard extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}