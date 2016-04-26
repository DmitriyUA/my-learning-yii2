<?php

namespace app\controllers;

class PageController extends \yii\web\Controller
{
    public function actionHtml()
    {
        return $this->render('html');
    }

    public function actionCss()
    {
        return $this->render('css');
    }

    public function actionPhp()
    {
        return $this->render('php');
    }

    public function actionJavascript()
    {
        return $this->render('javascript');
    }

}
