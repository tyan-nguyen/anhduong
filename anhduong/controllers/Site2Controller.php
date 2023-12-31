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
    
   /*  public function actionSingle(){
        $this->layout = 'singleLayout';
        return $this->render('single');
    } */
    
    public function actionProduct(){
        $this->layout = 'productLayout';
        return $this->render('about');
    }
    
    public function actionAbout(){
        $this->layout = 'aboutLayout';
        return $this->render('about');
    }
    
    public function actionNangLucNhaMay(){
        $this->layout = 'nangLucLayout';
        return $this->render('about');
    }
    
    public function actionTuyenDung(){
        $this->layout = 'tuyenDungLayout';
        return $this->render('about');
    }
    
    public function actionVatLieu($page=null){
        $this->layout = 'vatLieuLayout';
        return $this->render('vat-lieu', ['page'=>$page]);
    }
}