<?php
namespace app\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\widgets\ImageGridWidget;

class ImageWidget extends Widget{
    public $id_tham_chieu;
    
    public function init(){
        parent::init();
    }
    
    public function run(){
        
        $maHtml = Html::a('<i class="fas fa fa-plus" aria-hidden="true"></i> Thêm hình',
            [Yii::getAlias('@web').'/dashboard/images/create-outer?pid='.$this->id_tham_chieu],['role'=>'modal-remote','title'=> 'Thêm mới hình ảnh','class'=>'btn btn-outline-primary']);
        
        $maHtml .= ImageGridWidget::widget([
            'id_tham_chieu' => $this->id_tham_chieu
        ]);
        $maHtml .= '</div>';
        return $maHtml;
    }
}
?>  