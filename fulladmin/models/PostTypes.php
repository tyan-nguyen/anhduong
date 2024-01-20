<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post_types".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int|null $enable
 * @property int|null $enable_images
 * @property int|null $enable_documents
 * @property int|null $enable_cover
 * @property int|null $enable_seo
 * @property int|null $enable_summary
 * @property int|null $enable_content
 */
class PostTypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['enable', 'enable_images', 'enable_documents', 'enable_cover', 'enable_seo', 'enable_summary', 'enable_content'], 'integer'],
            [['code'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 200],
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
            'name' => Yii::t('app', 'Name'),
            'enable' => Yii::t('app', 'Enable'),
            'enable_images' => Yii::t('app', 'Enable Images'),
            'enable_documents' => Yii::t('app', 'Enable Documents'),
            'enable_cover' => Yii::t('app', 'Enable Cover'),
            'enable_seo' => Yii::t('app', 'Enable Seo'),
            'enable_summary' => Yii::t('app', 'Enable Summary'),
            'enable_content' => Yii::t('app', 'Enable Content'),
        ];
    }
}
