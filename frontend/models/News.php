<?php

namespace app\models;

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
            [['news_title'], 'required'],
            [['news_short', 'news_mieuta', 'news_short_vn', 'news_mieuta_vn'], 'string'],
            [['news_cat_id', 'day', 'month', 'year', 'news_hot'], 'integer'],
            [['date'], 'safe'],
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
            'news_title' => 'News Title',
            'news_short' => 'News Short',
            'news_mieuta' => 'News Mieuta',
            'news_cat_id' => 'News Cat ID',
            'date' => 'Date',
            'day' => 'Day',
            'month' => 'Month',
            'year' => 'Year',
            'news_hot' => 'News Hot',
            'news_title_vn' => 'News Title Vn',
            'news_short_vn' => 'News Short Vn',
            'news_mieuta_vn' => 'News Mieuta Vn',
            'news_image' => 'News Image',
        ];
    }
}
