<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sangche".
 *
 * @property integer $id
 * @property string $so_don
 * @property string $so_don_uu_tien
 * @property string $ngay_cong_bo
 * @property string $ngay_don_cong_bo
 * @property string $IPC
 * @property string $file
 * @property string $file_toanvan
 * @property string $file_video
 * @property string $ten_sang_che
 * @property string $tomtat
 * @property string $so_bang
 * @property string $ngay_cap_bang
 * @property string $ngay_nop_don
 * @property string $tacgia
 * @property string $chu_so_huu
 * @property string $chu_bang
 * @property string $ten_dai_dien
 * @property string $so_don_ptc
 * @property string $so_congbo_ptc
 * @property integer $baohotaivietnam
 * @property string $ngonngu
 */
class Sangche extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sangche';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten_sang_che'], 'required'],
            [['tomtat'], 'string'],
            [['baohotaivietnam'], 'integer'],
            [['so_don', 'ngay_cong_bo', 'ngay_don_cong_bo', 'IPC', 'file', 'file_toanvan', 'so_bang', 'ngay_nop_don'], 'string', 'max' => 50],
            [['so_don_uu_tien', 'tacgia', 'chu_so_huu', 'ten_dai_dien', 'so_don_ptc', 'so_congbo_ptc'], 'string', 'max' => 200],
            [['file_video', 'ngay_cap_bang', 'ngonngu'], 'string', 'max' => 100],
            [['ten_sang_che', 'chu_bang'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'so_don' => 'Số đơn',
            'so_don_uu_tien' => 'Số đơn ưu tiên',
            'ngay_cong_bo' => 'Ngày công bố',
            'ngay_don_cong_bo' => 'Ngày công bố đơn',
            'IPC' => 'Ipc',
            'file' => 'File',
            'file_video' => 'File Video',
            'ten_sang_che' => 'Tên sáng chế',
            'tomtat' => 'Tóm tắt',
            'so_bang' => 'Số bằng',
            'ngay_cap_bang' => 'Ngày cấp bằng',
            'ngay_nop_don' => 'Ngày nộp đơn',
            'tacgia' => 'Tác giả',
            'chu_so_huu' => 'Chủ sở hữu',
            'chu_bang' => 'Chủ bằng',
            'ten_dai_dien' => 'Tên đại diện',
            'so_don_ptc' => 'Số đơn PTC',
            'so_congbo_ptc' => 'Số công bố PTC',
            'baohotaivietnam' => 'Bảo hộ tại Việt Nam',
            'ngonngu' => 'Ngôn ngữ',
            'image' => 'Upload ảnh minh họa',
            'attachment' => 'File toàn văn',
        ];
    }
}
