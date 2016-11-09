<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property integer $id
 * @property string $file_name
 * @property string $file_name_vn
 * @property string $file_content
 * @property string $file_type
 * @property integer $sangche_id
 * @property integer $tailieu_id
 * @property integer $chuyengia_id
 * @property integer $congnghe_id
 * @property integer $user_id
 * @property integer $cat_id
 * @property string $file_date
 * @property string $link_video
 * @property integer $sort
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_content'], 'string'],
            [['sangche_id', 'tailieu_id', 'chuyengia_id', 'congnghe_id'], 'required'],
            [['sangche_id', 'tailieu_id', 'chuyengia_id', 'congnghe_id', 'user_id', 'cat_id', 'sort'], 'integer'],
            [['file_date'], 'safe'],
            [['file_name', 'file_name_vn', 'link_video'], 'string', 'max' => 250],
            [['file_type'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_name' => 'File Name',
            'file_name_vn' => 'File Name Vn',
            'file_content' => 'File Content',
            'file_type' => 'File Type',
            'sangche_id' => 'Sangche ID',
            'tailieu_id' => 'Tailieu ID',
            'chuyengia_id' => 'Chuyengia ID',
            'congnghe_id' => 'Congnghe ID',
            'user_id' => 'User ID',
            'cat_id' => 'Cat ID',
            'file_date' => 'File Date',
            'link_video' => 'Link Video',
            'sort' => 'Sort',
        ];
    }
    public function getSangche()
    {
        return $this->hasOne(Sangche::className(), ['id' => 'sangche_id']);
    }
}
