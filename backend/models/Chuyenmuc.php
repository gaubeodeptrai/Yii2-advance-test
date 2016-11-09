<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "chuyenmuc".
 *
 * @property string $id
 * @property string $ten_vn
 * @property string $ten
 * @property string $parent
 * @property string $gioithieu
 * @property string $link
 * @property integer $sort
 * @property string $kieu
 * @property string $icon
 * @property integer $active
 * @property string $ma_danhmuc
 */
class Chuyenmuc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chuyenmuc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten'], 'required'],
            [['gioithieu'], 'string'],
           
            [['ten_vn', 'ten', 'link'], 'string', 'max' => 255],
            [['parent'], 'string', 'max' => 5],
            
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten_vn' => 'Tên danh mục',
            'ten' => 'Tên danh mục',
            'parent' => 'Thuộc mục',
            'gioithieu' => 'Mô tả',
            'link' => 'Link',
            'sort' => 'Sort',
            'kieu' => 'Kieu',
            'icon' => 'Icon',
            'active' => 'Active',
            'ma_danhmuc' => 'Ma Danhmuc',
        ];
    }
}
