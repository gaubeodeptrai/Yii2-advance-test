<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Setting;

/**
 * SettingSearch represents the model behind the search form about `backend\models\Setting`.
 */
class SettingSearch extends Setting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'num_hotnews', 'num_news', 'products_new', 'products_per_page', 'template'], 'integer'],
            [['title', 'keyword', 'company_name', 'email', 'tel_branch', 'tel', 'address', 'address_branch', 'website', 'fax', 'fax_branch', 'email_nhan_thu', 'branch', 'hotline', 'sologan_home', 'logo_home', 'logo_sangche', 'sologan_sangche', 'logo_congnghe', 'sologan_congnghe', 'logo_nckh', 'sologan_nckh', 'logo_chuyengia', 'sologan_chuyengia'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Setting::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'num_hotnews' => $this->num_hotnews,
            'num_news' => $this->num_news,
            'products_new' => $this->products_new,
            'products_per_page' => $this->products_per_page,
            'template' => $this->template,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'keyword', $this->keyword])
            ->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'tel_branch', $this->tel_branch])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'address_branch', $this->address_branch])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'fax_branch', $this->fax_branch])
            ->andFilterWhere(['like', 'email_nhan_thu', $this->email_nhan_thu])
            ->andFilterWhere(['like', 'branch', $this->branch])
            ->andFilterWhere(['like', 'hotline', $this->hotline])
            ->andFilterWhere(['like', 'sologan_home', $this->sologan_home])
            ->andFilterWhere(['like', 'logo_home', $this->logo_home])
            ->andFilterWhere(['like', 'logo_sangche', $this->logo_sangche])
            ->andFilterWhere(['like', 'sologan_sangche', $this->sologan_sangche])
            ->andFilterWhere(['like', 'logo_congnghe', $this->logo_congnghe])
            ->andFilterWhere(['like', 'sologan_congnghe', $this->sologan_congnghe])
            ->andFilterWhere(['like', 'logo_nckh', $this->logo_nckh])
            ->andFilterWhere(['like', 'sologan_nckh', $this->sologan_nckh])
            ->andFilterWhere(['like', 'logo_chuyengia', $this->logo_chuyengia])
            ->andFilterWhere(['like', 'sologan_chuyengia', $this->sologan_chuyengia]);

        return $dataProvider;
    }
}
