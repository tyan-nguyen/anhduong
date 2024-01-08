<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\DataProduct;
use app\models\DataApplication;
use app\models\DataSanPham;

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
        $data = DataProduct::data();
        
        $model = array();
        foreach($data as $key => $value) {
            if($slug == $value['slug']) {
                $model = $value;
                break;
            }
        }
        return $this->render('vat-lieu-chi-tiet', [
            'model'=>$model, 
            'otherVatLieu'=>array_slice($data,0,4)
        ]);
    }
    
    public function actionDuAn($page=null){
        $this->layout = 'duAnLayout';
        $data = DataApplication::data();
        return $this->render('du-an', ['models'=>$data]);
    }
    
    public function actionDuAnChiTiet($slug){
        $this->layout = 'duAnLayout';
        $data = DataApplication::data();
        
        $needle = $slug;
        $model = array();
        foreach($data as $key => $value) {
            if($needle == $value['slug']) {
                $model = $value;
                break;
            }
        }
        return $this->render('du-an-chi-tiet', [
            'model'=>$model, 
            'otherDuAn'=>array_slice($data,0,4)
        ]);
    }
    
    public function actionThietKe($page=null){
        $this->layout = 'thietKeLayout';
        $data = DataApplication::data();
        return $this->render('thiet-ke', ['models'=>$data]);
    }
    
    public function actionSanPham($type){
        $this->layout = 'sanPhamLayout';
        $data = DataSanPham::data();
        $title = '';
        if($type=='tam-op'){
            $title = 'Tấm ốp';
        } else if($type=='cua-inox'){
            $title = 'Cửa Inox';
        }
        
        $model = array();
        foreach($data as $key => $value) {
            if($type == $value['type']) {
                $model[] = $value;
            }
        }
        return $this->render('san-pham', ['model'=>$model, 'title'=>$title]);
    }
    
    public function actionSanPhamChiTiet($slug){
        $this->layout = 'sanPhamLayout';
        $data = DataSanPham::data();
        
        $redata = array();
       
        
        $model = array();
        $title = '';
        foreach($data as $key => $value) {
            if($slug == $value['slug']) {
                $model = $value;
                if($value['type'] == 'tam-op'){
                    $title = 'Tấm ốp';
                    foreach($data as $key1 => $value1) {
                        if($value1['type'] == 'tam-op') {
                            $redata[] = $value1;
                        }
                    }
                }else if($value['type'] == 'cua-inox'){
                    $title = 'Cửa Inox';
                    foreach($data as $key1 => $value1) {
                        if($value1['type'] == 'cua-inox') {
                            $redata[] = $value1;
                        }
                    }
                }
                break;
            }
        }
        
        return $this->render('san-pham-chi-tiet', [
            'model'=>$model,
            'title'=>$title,
            'otherVatLieu'=>array_slice($redata,0,4)
        ]);
    }
    
    public function actionTranKimLoai(){
        $this->layout = 'sanPhamSingleLayout';
        $data = DataSanPham::data();
        
        $model = array();
        foreach($data as $key => $value) {
            if($value['type'] == 'tran-kim-loai') {
                $model[] = $value;
            }
        }
        return $this->render('tran-kim-loai', ['model'=>$model]);
    }
    
    public function actionXemTranKimLoai($slug){
        $this->layout = 'sanPhamSingleLayout';
        $data = DataSanPham::data();
        
        $redata = array();
        
        
        $model = array();
        foreach($data as $key => $value) {
            if($slug == $value['slug']) {
                $model = $value;
                if($value['type'] == 'tran-kim-loai'){
                    foreach($data as $key1 => $value1) {
                        if($value1['type'] == 'tran-kim-loai' && $value1['slug'] != $slug) {
                            $redata[] = $value1;
                        }
                    }
                }
                break;
            }
        }
        return $this->render('tran-kim-loai-view', [ 'model'=>$model,
            'otherVatLieu'=>array_slice($redata,0,4)]);
    }
    
}