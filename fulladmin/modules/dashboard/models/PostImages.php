<?php

namespace app\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "post_images".
 *
 * @property int $id
 * @property int $pid
 * @property string|null $name
 * @property string|null $url
 * @property string|null $img_name
 * @property string|null $img_extension
 * @property float|null $img_size
 * @property string|null $img_wh
 * @property string|null $summary
 * @property string|null $date_created
 * @property int|null $user_created
 */
class PostImages extends PostImages
{
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pid'], 'required'],
            [['pid', 'user_created'], 'integer'],
            [['img_size'], 'number'],
            [['summary'], 'string'],
            [['date_created'], 'safe'],
            [['name', 'url', 'img_name'], 'string', 'max' => 255],
            [['img_extension'], 'string', 'max' => 10],
            [['img_wh'], 'string', 'max' => 20],
        ];
    }

}
