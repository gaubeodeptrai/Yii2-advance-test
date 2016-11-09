<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "congnghe".
 *
 * @property integer $id
 * @property string $ten_congnghe
 * @property string $thuoc_detai
 * @property string $chunhiem_detai
 * @property string $cq_quanly_detai
 * @property string $ten_sanpham
 * @property string $mota
 * @property string $congsuat
 * @property string $muc_do_trien_khai
 * @property string $so_lieu_kinh_te
 * @property string $hinh_thuc_chuyen_giao
 * @property string $file
 * @property string $file_toanvan
 * @property string $dang_tai_lieu
 * @property string $diachi_lienhe
 */
class Congnghe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'congnghe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten_congnghe'], 'required'],
            [['mota', 'so_lieu_kinh_te'], 'string'],
            [['ten_congnghe', 'ten_sanpham', 'diachi_lienhe'], 'string', 'max' => 200],
            [['thuoc_detai'], 'string', 'max' => 255],
            [['chunhiem_detai', 'cq_quanly_detai', 'congsuat', 'hinh_thuc_chuyen_giao', 'file_toanvan', 'dang_tai_lieu'], 'string', 'max' => 100],
            [['muc_do_trien_khai'], 'string', 'max' => 250],
            [['file'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten_congnghe' => 'Tên công nghệ',
            'thuoc_detai' => 'Thuộc đề tài',
            'chunhiem_detai' => 'Chủ nhiệm',
            'cq_quanly_detai' => 'Cơ quan quản lý',
            'ten_sanpham' => 'Tên sản phẩm',
            'mota' => 'Mô tả công nghệ',
            'congsuat' => 'Công suất',
            'muc_do_trien_khai' => 'Mức độ triển khai',
            'so_lieu_kinh_te' => 'Số liệu kinh tế',
            'hinh_thuc_chuyen_giao' => 'Hình thức chuyển giao',
            'file' => 'File',
            'file_toanvan' => 'File Toanvan',
            'dang_tai_lieu' => 'Dạng tài liệu',
            'diachi_lienhe' => 'Liên hệ',
            'image' => 'Upload ảnh minh họa',
            'attachment' => 'File toàn văn',
        ];
    }
}
