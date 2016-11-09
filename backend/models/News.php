<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $news_title
 * @property string $news_short
 * @property string $news_mieuta
 * @property integer $news_cat_id
 * @property string $date
 * @property integer $day
 * @property integer $month
 * @property integer $year
 * @property integer $news_hot
 * @property string $news_title_vn
 * @property string $news_short_vn
 * @property string $news_mieuta_vn
 * @property string $news_image
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $image;
    
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['news_title_vn'], 'required'],
            [['news_short', 'news_mieuta', 'news_short_vn', 'news_mieuta_vn'], 'string'],
            [['news_cat_id', 'day', 'month', 'year', 'news_hot'], 'integer'],
            [['date'], 'safe'],
            [['image'], 'safe'],
            [['image'], 'file', 'extensions'=>'jpg, gif, png, jpeg'],
            [['news_title', 'news_title_vn', 'news_image'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'news_title' => 'Tiêu đề tin',
            'news_short' => 'Nội dung rút gọn',
            'news_mieuta' => 'Nội dung chi tiết',
            'news_cat_id' => 'News Cat ID',
            'date' => 'Date',
            'day' => 'Day',
            'month' => 'Month',
            'year' => 'Year',
            'news_hot' => 'News Hot',
            'news_title_vn' => 'Tiêu đề tin',
            'news_short_vn' => 'Nội dung rút gọn',
            'news_mieuta_vn' => 'Nội dung chi tiết',
            'news_image' => 'News Image',
            'image' => 'Ảnh minh họa',
        ];
    }
}
