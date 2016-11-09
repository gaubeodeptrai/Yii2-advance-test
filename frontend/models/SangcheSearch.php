<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sangche;

/**
 * SangcheSearch represents the model behind the search form about `app\models\Sangche`.
 */
class SangcheSearch extends Sangche
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'baohotaivietnam'], 'integer'],
            [['so_don', 'so_don_uu_tien', 'ngay_cong_bo', 'ngay_don_cong_bo', 'IPC', 'file', 'file_toanvan', 'file_video', 'ten_sang_che', 'tomtat', 'so_bang', 'ngay_cap_bang', 'ngay_nop_don', 'tacgia', 'chu_so_huu', 'chu_bang', 'ten_dai_dien', 'so_don_ptc', 'so_congbo_ptc', 'ngonngu'], 'safe'],
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
        $query = Sangche::find()->orderBy(['id'=>SORT_DESC,'ten_sang_che'=>SORT_STRING]);
        
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
            'baohotaivietnam' => $this->baohotaivietnam,
        ]);

        $query->andFilterWhere(['like', 'so_don', $this->so_don])
            ->andFilterWhere(['like', 'so_don_uu_tien', $this->so_don_uu_tien])
            ->andFilterWhere(['like', 'ngay_cong_bo', $this->ngay_cong_bo])
            ->andFilterWhere(['like', 'ngay_don_cong_bo', $this->ngay_don_cong_bo])
            ->andFilterWhere(['like', 'IPC', $this->IPC])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'file_toanvan', $this->file_toanvan])
            ->andFilterWhere(['like', 'file_video', $this->file_video])
            ->andFilterWhere(['like', 'ten_sang_che', $this->ten_sang_che])
            ->andFilterWhere(['like', 'tomtat', $this->tomtat])
            ->andFilterWhere(['like', 'so_bang', $this->so_bang])
            ->andFilterWhere(['like', 'ngay_cap_bang', $this->ngay_cap_bang])
            ->andFilterWhere(['like', 'ngay_nop_don', $this->ngay_nop_don])
            ->andFilterWhere(['like', 'tacgia', $this->tacgia])
            ->andFilterWhere(['like', 'chu_so_huu', $this->chu_so_huu])
            ->andFilterWhere(['like', 'chu_bang', $this->chu_bang])
            ->andFilterWhere(['like', 'ten_dai_dien', $this->ten_dai_dien])
            ->andFilterWhere(['like', 'so_don_ptc', $this->so_don_ptc])
            ->andFilterWhere(['like', 'so_congbo_ptc', $this->so_congbo_ptc])
            ->andFilterWhere(['like', 'ngonngu', $this->ngonngu]);

        return $dataProvider;
        
    }
}
