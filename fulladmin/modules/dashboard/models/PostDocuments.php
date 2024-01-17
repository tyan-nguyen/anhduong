<?php

namespace app\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "post_documents".
 *
 * @property int $id
 * @property int $pid
 * @property string|null $name
 * @property string|null $url
 * @property string|null $file_name
 * @property string|null $file_extension
 * @property float|null $file_size
 * @property string|null $summary
 * @property string|null $date_created
 * @property int|null $user_created
 */
class PostDocuments extends PostDocuments
{
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pid'], 'required'],
            [['pid', 'user_created'], 'integer'],
            [['file_size'], 'number'],
            [['summary'], 'string'],
            [['date_created'], 'safe'],
            [['name', 'url', 'file_name'], 'string', 'max' => 255],
            [['file_extension'], 'string', 'max' => 10],
        ];
    }
}
