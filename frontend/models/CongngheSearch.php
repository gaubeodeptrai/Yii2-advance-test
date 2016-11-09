<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Congnghe;

/**
 * CongngheSearch represents the model behind the search form about `app\models\Congnghe`.
 */
class CongngheSearch extends Congnghe
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ten_congnghe', 'thuoc_detai', 'chunhiem_detai', 'cq_quanly_detai', 'ten_sanpham', 'mota', 'congsuat', 'muc_do_trien_khai', 'so_lieu_kinh_te', 'hinh_thuc_chuyen_giao', 'file', 'file_toanvan', 'dang_tai_lieu', 'diachi_lienhe'], 'safe'],
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
        $query = Congnghe::find();

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

        $query->andFilterWhere(['like', 'ten_congnghe', $this->ten_congnghe])
            ->andFilterWhere(['like', 'thuoc_detai', $this->thuoc_detai])
            ->andFilterWhere(['like', 'chunhiem_detai', $this->chunhiem_detai])
            ->andFilterWhere(['like', 'cq_quanly_detai', $this->cq_quanly_detai])
            ->andFilterWhere(['like', 'ten_sanpham', $this->ten_sanpham])
            ->andFilterWhere(['like', 'mota', $this->mota])
            ->andFilterWhere(['like', 'congsuat', $this->congsuat])
            ->andFilterWhere(['like', 'muc_do_trien_khai', $this->muc_do_trien_khai])
            ->andFilterWhere(['like', 'so_lieu_kinh_te', $this->so_lieu_kinh_te])
            ->andFilterWhere(['like', 'hinh_thuc_chuyen_giao', $this->hinh_thuc_chuyen_giao])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'file_toanvan', $this->file_toanvan])
            ->andFilterWhere(['like', 'dang_tai_lieu', $this->dang_tai_lieu])
            ->andFilterWhere(['like', 'diachi_lienhe', $this->diachi_lienhe]);

        return $dataProvider;
    }
}
