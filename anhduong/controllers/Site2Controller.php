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
    
    public function actionVatLieuChiTiet($slug){
        $this->layout = 'vatLieuLayout';
        $model = [
            'id'=>1,
            'slug'=>'vat-lieu-1',
            'image'=>'vat-lieu-1.jpg',
            'title'=>'AD008/Cross Hairline Golden',
            'subTitle'=>'Bề mặt sọc chéo chống vân tay màu vàng',
            'desc'=>'Inox mạ màu vàng mang tới vẻ đẹp trang nhã, thanh lịch rất hợp với các dạng không gian có phần cổ điển mang tới cho người nhìn sự phá cách, lạ mắt rất ấn tượng, đơn giản không phô trương.'
        ];
        return $this->render('vat-lieu-chi-tiet', ['vatLieu'=>$model]);
    }
}