<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $imgcover
 * @property string|null $catelogies
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $summary
 * @property string|null $content
 * @property string|null $date_created
 * @property string|null $date_updated
 * @property int|null $user_created
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $post_status
 * @property string|null $tags
 * @property string|null $site_keywords
 * @property string|null $lang
 * @property int|null $lang_parent
 * @property int|null $is_static
 * @property string|null $post_type
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug', 'summary', 'content', 'seo_description'], 'string'],
            [['date_created', 'date_updated'], 'safe'],
            [['user_created', 'lang_parent', 'is_static'], 'integer'],
            [['code', 'imgcover', 'catelogies', 'seo_title', 'tags', 'site_keywords'], 'string', 'max' => 200],
            [['title'], 'string', 'max' => 300],
            [['post_status', 'post_type'], 'string', 'max' => 20],
            [['lang'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'code' => Yii::t('app', 'Code'),
            'imgcover' => Yii::t('app', 'Imgcover'),
            'catelogies' => Yii::t('app', 'Catelogies'),
            'title' => Yii::t('app', 'Title'),
            'slug' => Yii::t('app', 'Slug'),
            'summary' => Yii::t('app', 'Summary'),
            'content' => Yii::t('app', 'Content'),
            'date_created' => Yii::t('app', 'Date Created'),
            'date_updated' => Yii::t('app', 'Date Updated'),
            'user_created' => Yii::t('app', 'User Created'),
            'seo_title' => Yii::t('app', 'Seo Title'),
            'seo_description' => Yii::t('app', 'Seo Description'),
            'post_status' => Yii::t('app', 'Post Status'),
            'tags' => Yii::t('app', 'Tags'),
            'site_keywords' => Yii::t('app', 'Site Keywords'),
            'lang' => Yii::t('app', 'Lang'),
            'lang_parent' => Yii::t('app', 'Lang Parent'),
            'is_static' => Yii::t('app', 'Is Static'),
            'post_type' => Yii::t('app', 'Post Type'),
        ];
    }
}
