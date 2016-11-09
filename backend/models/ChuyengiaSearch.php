<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Chuyengia;

/**
 * ChuyengiaSearch represents the model behind the search form about `backend\models\Chuyengia`.
 */
class ChuyengiaSearch extends Chuyengia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['fullname', 'lastname', 'birthdate', 'sex', 'nationality', 'hinhanh', 'tel', 'fax', 'email', 'address', 'chuyenmon', 'chucvu', 'hoc_vi', 'hoc_ham', 'ngoai_ngu', 'linhvuc_tuvan', 'loaihinh_tuvan'], 'safe'],
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
        $query = Chuyengia::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'birthdate', $this->birthdate])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'hinhanh', $this->hinhanh])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'chuyenmon', $this->chuyenmon])
            ->andFilterWhere(['like', 'chucvu', $this->chucvu])
            ->andFilterWhere(['like', 'hoc_vi', $this->hoc_vi])
            ->andFilterWhere(['like', 'hoc_ham', $this->hoc_ham])
            ->andFilterWhere(['like', 'ngoai_ngu', $this->ngoai_ngu])
            ->andFilterWhere(['like', 'linhvuc_tuvan', $this->linhvuc_tuvan])
            ->andFilterWhere(['like', 'loaihinh_tuvan', $this->loaihinh_tuvan]);

        return $dataProvider;
    }
}
