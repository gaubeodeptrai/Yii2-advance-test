<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "import".
 *
 * @property integer $id
 * @property string $tentailieu
 * @property string $file_toanvan
 * @property string $dangtailieu
 * @property string $mota
 * @property string $tacgia
 * @property string $nguontrich
 * @property string $sotrang
 * @property string $file
 * @property string $DDC
 * @property string $ngaynhap
 * @property string $quocgia
 * @property integer $tap
 */
class Tailieu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'import';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tentailieu'], 'required'],
            [['mota'], 'string'],
            [['tap'], 'integer'],
            [['tentailieu', 'nguontrich'], 'string', 'max' => 250],
            [['file_toanvan', 'DDC', 'ngaynhap'], 'string', 'max' => 50],
            [['dangtailieu', 'sotrang', 'quocgia'], 'string', 'max' => 100],
            [['tacgia', 'file'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tentailieu' => 'Tên tài liệu',
            'file_toanvan' => 'File Toàn Văn',
            'dangtailieu' => 'Dạng tài liệu',
            'mota' => 'Mô tả',
            'tacgia' => 'Tác giả',
            'nguontrich' => 'Nguồn trích',
            'sotrang' => 'Số trang',
            'file' => 'Ảnh minh họa',
            'DDC' => 'DDC',
            'ngaynhap' => 'Ngày nhập',
            'quocgia' => 'Quốc gia',
            'tap' => 'Tập',
            'image' => 'Upload ảnh minh họa',
            'attachment' => 'File toàn văn',
        ];
    }
}
