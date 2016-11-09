<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tailieu;

/**
 * TailieuSearch represents the model behind the search form about `app\models\Tailieu`.
 */
class TailieuSearch extends Tailieu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tap'], 'integer'],
            [['tentailieu', 'file_toanvan', 'dangtailieu', 'mota', 'tacgia', 'nguontrich', 'sotrang', 'file', 'DDC', 'ngaynhap', 'quocgia'], 'safe'],
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
        $query = Tailieu::find();

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
            'tap' => $this->tap,
        ]);

        $query->andFilterWhere(['like', 'tentailieu', $this->tentailieu])
            ->andFilterWhere(['like', 'file_toanvan', $this->file_toanvan])
            ->andFilterWhere(['like', 'dangtailieu', $this->dangtailieu])
            ->andFilterWhere(['like', 'mota', $this->mota])
            ->andFilterWhere(['like', 'tacgia', $this->tacgia])
            ->andFilterWhere(['like', 'nguontrich', $this->nguontrich])
            ->andFilterWhere(['like', 'sotrang', $this->sotrang])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'DDC', $this->DDC])
            ->andFilterWhere(['like', 'ngaynhap', $this->ngaynhap])
            ->andFilterWhere(['like', 'quocgia', $this->quocgia]);

        return $dataProvider;
    }
}
