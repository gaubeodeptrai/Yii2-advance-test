<?php

namespace app\models;
use Yii;

/**
 * This is the model class for table "chuyenmuc".
 *
 * @property string $id
 * @property string $ten
 * @property string $ten_vn
 * @property string $parent
 * @property string $gioithieu
 * @property string $link
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
    
    public static function getItems($parentid=0)
    {
    $items = Chuyenmuc::find()->where(['parent'=>$parentid])->orderBy('id')->all();
    $result = []; 
        foreach ($items as $item) {
            if ($item->link <> '')
            {
               $menu_url = $item->link;
            }
            else
            {
              $menu_url = 'site/page/'.$item->id.' ';  
            }
            $result[] = [
                    'label' => $item['ten'],
                    //'url' =>  $item['link'],
                     
                    'url' => ['' . $menu_url . ''],
                    
                    'items' => static::getItems($item['id']),
                ];
        }
        return $result;
    }


    public function rules()
    {
        return [
            [['gioithieu'], 'string'],
            [['ten'], 'string', 'max' => 200],
            [['ten_vn', 'link'], 'string', 'max' => 255],
            [['parent'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Ten',
            'ten_vn' => 'Ten Vn',
            'parent' => 'Parent',
            'gioithieu' => 'Gioithieu',
            'link' => 'Link',
        ];
    }
}
