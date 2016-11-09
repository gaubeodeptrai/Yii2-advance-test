<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "chuyengia".
 *
 * @property integer $id
 * @property string $fullname
 * @property string $lastname
 * @property string $birthdate
 * @property string $sex
 * @property string $nationality
 * @property string $hinhanh
 * @property string $tel
 * @property string $fax
 * @property string $email
 * @property string $address
 * @property string $chuyenmon
 * @property string $chucvu
 * @property string $hoc_vi
 * @property string $hoc_ham
 * @property string $ngoai_ngu
 * @property string $linhvuc_tuvan
 * @property string $loaihinh_tuvan
 */
class Chuyengia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $image;
    public $files;
    public static function tableName()
    {
        return 'chuyengia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullname', 'chucvu'], 'required'],
            [['fullname', 'lastname', 'hinhanh', 'chucvu', 'linhvuc_tuvan', 'loaihinh_tuvan'], 'string', 'max' => 100],
            [['birthdate', 'nationality', 'tel', 'fax', 'email', 'hoc_vi', 'hoc_ham', 'ngoai_ngu'], 'string', 'max' => 50],
            [['sex'], 'string', 'max' => 30],
            
            [['image'], 'safe'],
            [['image'], 'file', 'extensions'=>'jpg, gif, png, jpeg'],
            
            [['files'], 'safe'],
            [['files'], 'file', 'extensions'=>'pdf, doc, docx, xls, xlsx, ppt, pptx'],
            
            [['address', 'chuyenmon'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã chuyên gia',
            'fullname' => 'Họ tên',
            'lastname' => 'Tên chính',
            'birthdate' => 'Ngày sinh',
            'sex' => 'Giới tính',
            'nationality' => 'Quốc tịch',
            'hinhanh' => 'Hinhanh',
            'tel' => 'Điện thoại',
            'fax' => 'Fax',
            'email' => 'Email',
            'address' => 'Địa chỉ',
            'chuyenmon' => 'Chuyên môn',
            'chucvu' => 'Chức vụ',
            'hoc_vi' => 'Học vị',
            'hoc_ham' => 'Học hàm',
            'ngoai_ngu' => 'Ngoại ngữ',
            'linhvuc_tuvan' => 'Lĩnh vực tư vấn',
            'loaihinh_tuvan' => 'Loại hình tư vấn',
        ];
    }
}
