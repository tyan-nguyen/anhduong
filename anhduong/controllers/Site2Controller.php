<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class Site2Controller extends Controller
{
    public function actionIndex(){
        $this->layout = 'main';
        return $this->render('index');
    }
    
    public function actionPage(){
        $this->layout = 'pageLayout';
        return $this->render('about');
    }
}