<?php

namespace app\modules\dashboard\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use webvimark\modules\UserManagement\models\User;
use app\modules\dashboard\models\base\PostsBase;

class Posts extends PostsBase
{
    /**
     * get new link publish
     */
    public function getUrl(){
        return Yii::getAlias('@web/') . $this->slug;
    }
    
    /**
     * get new link edited
     */
    public function getUrlEdit(){
        return Yii::getAlias('@web/admin/news/update?id=') . $this->id;
    }
    
    /**
     * get categories
     */
    public function getCategoriesList(){
        $result = array();
        $list = explode(';', $this->categories);
        foreach ($list as $item){
            $cat = Catelogies::find()->where(['slug'=>$item])->one();
            if($cat != null)
                $result[$item] = $cat->showName;
        }
        return $result;
    }
    
    /**
     * view categories in gridview
     */
    public function getCatelogiesView(){
        $result = '';
        $list = explode(';', $this->categories);
        foreach ($list as $item){
            $cat = Catelogies::find()->where(['slug'=>$item])->one();
            if($cat != null)
                $result .= '<span class="label label-primary">' . $cat->name . '</span> ';
        }
        return $result;
    }
    
    /**
     * get list tags list by name
     */
    public function getListTagName(){
        $idTags = array();
        if($this->tags != null){
            $tagSlugs = explode(';', $this->tags);
            foreach ($tagSlugs as $indexTag=>$tagSlug){
                $tagModel = TagList::find()->where(['slug'=>$tagSlug])->one();
                if($tagModel != null)
                    $idTags[] = $tagModel->name;
            }
        }
        return $idTags;
    }
    
    /**
     * get list tags list by name
     */
    public function getListTags(){
        $idTags = array();
        if($this->tags != null){
            $tagSlugs = explode(';', $this->tags);
            foreach ($tagSlugs as $indexTag=>$tagSlug){
                $tagModel = TagList::find()->where(['slug'=>$tagSlug])->one();
                if($tagModel != null)
                    $idTags[$tagSlug] = $tagModel->name;
            }
        }
        return $idTags;
    }
    
    /**
     * get summarry
     */
    public function getSummary150(){
        if($this->summary != '' && strlen($this->summary) > 150){
            $pos=strpos($this->summary, ' ', 150);
            return substr($this->summary,0,$pos ) . '...';
        } else {
            return $this->summary;
        }
    }
    
    /**
     * get summarry
     */
    public function getSummary300(){
        if($this->summary != '' && strlen($this->summary) > 300){
            $pos=strpos($this->summary, ' ', 300);
            return substr($this->summary,0,$pos ) . '...'; 
        } else {
            return $this->summary;
        }
    }
    
    /**
     * get summarry
     */
    public function getSummary500(){
        if($this->summary != '' && strlen($this->summary) > 500){
            $pos=strpos($this->summary, ' ', 500);
            return substr($this->summary,0,$pos ) . '...';
        } else {
            return $this->summary;
        }
    }
    
    /**
     * get user created
     */
    public function getUserCreated(){
        if($this->user_created == null){
            return 'Auto';
        } else {
            return User::findOne($this->user_created)->username;
        }
    }
    
    /**
     * get images
     */
   /*  public function getImageCover(){
        $picFolder = Yii::getAlias('@webroot/images/posts/'. $this->code . '/');
        $picWebFolder = Yii::getAlias('@web/images/posts/'. $this->code . '/');
        $picDefault = Yii::getAlias('@web/images/posts/default.jpg');
        //find fist image in folder, if not found get default image
        $firstFile = 'default.jpg';
        if(file_exists($picFolder)){
            if(!$this->is_dir_empty($picFolder)){
                $firstFile = scandir($picFolder)[2];
                return $picWebFolder . $firstFile;
            } else {
                return $picDefault;
            }
        } else {
            return $picDefault;
        }
        
    } */
    
    /**
     * get images
     */
   /*  public function getImageCover1(){
        $picFolder = Yii::getAlias('@webroot/images/posts/'. $this->code . '/');
        $picWebFolder = Yii::getAlias('@web/images/posts/'. $this->code . '/');
        $picDefault = Yii::getAlias('@web/images/default.jpg');
        //find fist image in folder, if not found get default image
        $firstFile = 'default.jpg';
        if(file_exists($picFolder)){
            if(!$this->is_dir_empty($picFolder)){
              
                $firstFile = scandir($picFolder)[2];
                return $picWebFolder . $firstFile;
            } else {
                return $picDefault;
            }
        } else {
            return $picDefault;
        }      
        
    } */
    
    public function getCover(){
        if($this->imgcover != null)
            return $this->imgcover;
        else 
            return Yii::getAlias('@web/images/default.jpg');
            //return $this->getImageCover();
    }
    
    public function getImageCover(){
        /* $picFolder = Yii::getAlias('@webroot/images/posts/'. $this->code . '/');
        $fi = new \FilesystemIterator($picFolder);
        return iterator_count($fi); */
        $picFolder = Yii::getAlias('@webroot/images/posts/'. $this->code . '/');
        $picWebFolder = Yii::getAlias('@web/images/posts/'. $this->code . '/');
        $picDefault = Yii::getAlias('@web/images/default.jpg');
        //find fist image in folder, if not found get default image
        $firstFile = 'default.jpg';
        if(file_exists($picFolder)){
            if(!$this->is_dir_empty($picFolder)){
                //count file in folder
                $fi = new \FilesystemIterator($picFolder);
                $numFile = iterator_count($fi);
                $files = glob($picFolder . '/*.{jpg,png,gif}', GLOB_BRACE);
                $bestImageVal = null;
                $bestFile = null;
                $bestName =  null;
                foreach($files as $file) {
                    //do your work here
                    list($width, $height, $type, $attr) = getimagesize($file);
                   // if($width - $height >=0){
                        if($bestImageVal == null){
                            $bestImageVal = $width - $height;
                            $bestFile = $file;
                            $bestName = basename($file);
                        }
                        else if( ($width - $height) > $bestImageVal){
                             $bestImageVal = $width - $height;
                             $bestFile = $file;
                             $bestName = basename($file);
                        }
                            
                   // }
                    
                }
                if($bestFile != null && $bestImageVal >= 0)
                    return $picWebFolder . $bestName;
                else
                    return $picDefault;
                
               // $firstFile = scandir($picFolder)[2];
               # return $picWebFolder . $firstFile;
            } else {
                return $picDefault;
            }
        } else {
            return $picDefault;
        } 
    }
    
    /**
     * seo
     */
    public function getSeoTitle(){
        return $this->seo_title == null ? $this->title : $this->seo_title;
    }
    
    public function getSeoDescription(){
        return $this->seo_description == null ? $this->summary : $this->seo_description;
    }
    
}
