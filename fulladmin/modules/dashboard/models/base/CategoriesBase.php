<?php

namespace app\modules\dashboard\models\base;

use Yii;
use yii\behaviors\SluggableBehavior;

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
 * @property int|null $lang_parent
 * @property string|null $name_en
 * @property string|null $seo_title_en
 * @property string|null $seo_description_en
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
            [['pid', 'priority', 'level', 'lang_parent'], 'integer'],
            [['lang'], 'string', 'max' => 20],
            [['name', 'slug', 'seo_title', 'seo_title_en', 'name_en'], 'string', 'max' => 200],
            [['seo_description', 'seo_description_en'], 'string'],
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
            //set parent lang if null
            if($this->lang_parent == null){
                $this->lang_parent = 0;
            }
        }
        return true;
    }
}
