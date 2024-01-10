<?php

namespace app\modules\dashboard\models\base;

use Yii;
use yii\behaviors\SluggableBehavior;
use app\components\CustomFunc;

/**
 * This is the model class for table "news_catelogies".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int|null $pid
 * @property int|null $priority
 * @property int|null $level
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $lang
 * @property string|null $code
 * @property string|null $date_created
 * @property int|null $user_created
 */
class CategoriesBase extends \app\models\NewsCatelogies
{
    CONST URL_CATELOGIES = '/cat/';
    
    /**
     * ---------virtual varible ---------
     */
    public $arr;
    
    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'name',
                'immutable' => true,
                'ensureUnique'=>true,
                //'uniqueValidator'=>[]
                // 'slugAttribute' => 'slug',
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'slug'], 'required'],
            [['pid', 'priority', 'level', 'user_created'], 'integer'],
            [['seo_description'], 'string'],
            [['date_created'], 'safe'],
            [['name', 'slug', 'seo_title', 'code'], 'string', 'max' => 200],
            [['lang'], 'string', 'max' => 20],
        ];
    }
    
    /**
     * before save
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            
            if($this->pid == null){
                $this->pid = 0;
                $this->level = 1;
            } else{
                $this->level = $this::findOne($this->pid)->level + 1;
            }
            //set lang if null
            if($this->lang == null){
                $this->lang = Yii::$app->params['mainLang'];
            }            
        }
        
        //set code
        if($this->code == null){
            $this->code = $this->getRandomCode();
        }
        
        return true;
    }
    
    /**
     * tao random code khi them moi
     * @return string
     */
    public function getRandomCode(){
        $cus = new CustomFunc();
        $code = rand(10,99) . $cus->generateRandomString();
        $model = CategoriesBase::findOne(['code'=>$code]);
        if($model == null){
            return $code;
        } else {
            $this->getRandomCode();
        }
    }
}
