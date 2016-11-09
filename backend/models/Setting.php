<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property integer $id
 * @property string $title
 * @property string $keyword
 * @property integer $num_hotnews
 * @property integer $num_news
 * @property string $company_name
 * @property string $email
 * @property string $tel_branch
 * @property string $tel
 * @property string $address
 * @property string $address_branch
 * @property string $website
 * @property string $fax
 * @property string $fax_branch
 * @property integer $products_new
 * @property integer $products_per_page
 * @property string $email_nhan_thu
 * @property string $branch
 * @property string $hotline
 * @property integer $template
 * @property string $sologan_home
 * @property string $logo_home
 * @property string $logo_sangche
 * @property string $sologan_sangche
 * @property string $logo_congnghe
 * @property string $sologan_congnghe
 * @property string $logo_nckh
 * @property string $sologan_nckh
 * @property string $logo_chuyengia
 * @property string $sologan_chuyengia
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           
            [['id', 'num_hotnews', 'num_news', 'products_new', 'products_per_page', 'template'], 'integer'],
            [['branch'], 'string'],
            [['title', 'keyword', 'company_name', 'email', 'tel_branch', 'tel', 'address', 'address_branch', 'website', 'fax', 'fax_branch'], 'string', 'max' => 250],
            [['email_nhan_thu'], 'string', 'max' => 150],
            [['hotline'], 'string', 'max' => 50],
            [['sologan_home', 'logo_home', 'logo_sangche', 'sologan_sangche', 'logo_congnghe', 'sologan_congnghe', 'logo_nckh', 'sologan_nckh', 'logo_chuyengia', 'sologan_chuyengia'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Tiêu đề site',
            'keyword' => 'Keyword',
            'num_hotnews' => 'Num Hotnews',
            'num_news' => 'Num News',
            'company_name' => 'Company Name',
            'email' => 'Email',
            'tel_branch' => 'Tel Branch',
            'tel' => 'Tel',
            'address' => 'Address',
            'address_branch' => 'Address Branch',
            'website' => 'Website',
            'fax' => 'Fax',
            'fax_branch' => 'Fax Branch',
            'products_new' => 'Products New',
            'products_per_page' => 'Products Per Page',
            'email_nhan_thu' => 'Email Nhan Thu',
            'branch' => 'Branch',
            'hotline' => 'Hotline',
            'template' => 'Template',
            'sologan_home' => 'Sologan Home',
            'logo_home' => 'Logo Home',
            'logo_sangche' => 'Logo Sangche',
            'sologan_sangche' => 'Sologan Sangche',
            'logo_congnghe' => 'Logo Congnghe',
            'sologan_congnghe' => 'Sologan Congnghe',
            'logo_nckh' => 'Logo Nckh',
            'sologan_nckh' => 'Sologan Nckh',
            'logo_chuyengia' => 'Logo Chuyengia',
            'sologan_chuyengia' => 'Sologan Chuyengia',
        ];
    }
}
