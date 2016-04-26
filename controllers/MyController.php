<?php
/* @var $hello string*/
namespace app\controllers;

use app\models\RegForm;
use app\models\LoginForm;

class MyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $hello = 'Hello MIR!!!';
        return $this->render('index',
            [
                'hello' => $hello
            ]
            );
    }

    public function actionHtml()
    {
        return $this->render('html');
    }



    public function actionReg()
    {
        $model = new RegForm;
        return $this->render('reg',
            [
                'model' => $model
            ]
            );
    }

    public function actionLogin()
    {
        $model = new LoginForm;
        return $this->render('login',
            [
                'model' => $model
            ]
        );
    }

}
