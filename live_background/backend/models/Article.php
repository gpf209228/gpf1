<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $article_id
 * @property string $article_title
 * @property string $article_content
 * @property integer $article_time
 * @property string $article_name
 * @property integer $article_sort
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_content'], 'string'],
            [['article_time', 'article_sort'], 'integer'],
            [['article_title', 'article_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => 'Article ID',
            'article_title' => 'Article Title',
            'article_content' => 'Article Content',
            'article_time' => 'Article Time',
            'article_name' => 'Article Name',
            'article_sort' => 'Article Sort',
        ];
    }
}
