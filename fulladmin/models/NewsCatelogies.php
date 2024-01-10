<?php

namespace app\models;

use Yii;

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
class NewsCatelogies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news_catelogies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'slug'], 'required'],
            [['pid', 'priority', 'level', 'lang_parent'], 'integer'],
            [['seo_description', 'seo_description_en'], 'string'],
            [['name', 'slug', 'seo_title', 'name_en', 'seo_title_en'], 'string', 'max' => 200],
            [['lang'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
            'pid' => Yii::t('app', 'Pid'),
            'priority' => Yii::t('app', 'Priority'),
            'level' => Yii::t('app', 'Level'),
            'seo_title' => Yii::t('app', 'Seo Title'),
            'seo_description' => Yii::t('app', 'Seo Description'),
            'lang' => Yii::t('app', 'Lang'),
            'lang_parent' => Yii::t('app', 'Lang Parent'),
            'name_en' => Yii::t('app', 'Name En'),
            'seo_title_en' => Yii::t('app', 'Seo Title En'),
            'seo_description_en' => Yii::t('app', 'Seo Description En'),
        ];
    }
}
