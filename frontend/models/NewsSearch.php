<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\News;

/**
 * NewsSearch represents the model behind the search form about `app\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'news_cat_id', 'day', 'month', 'year', 'news_hot'], 'integer'],
            [['news_title', 'news_short', 'news_mieuta', 'date', 'news_title_vn', 'news_short_vn', 'news_mieuta_vn', 'news_image'], 'safe'],
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
        $query = News::find();

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
            'news_cat_id' => $this->news_cat_id,
            'date' => $this->date,
            'day' => $this->day,
            'month' => $this->month,
            'year' => $this->year,
            'news_hot' => $this->news_hot,
        ]);

        $query->andFilterWhere(['like', 'news_title', $this->news_title])
            ->andFilterWhere(['like', 'news_short', $this->news_short])
            ->andFilterWhere(['like', 'news_mieuta', $this->news_mieuta])
            ->andFilterWhere(['like', 'news_title_vn', $this->news_title_vn])
            ->andFilterWhere(['like', 'news_short_vn', $this->news_short_vn])
            ->andFilterWhere(['like', 'news_mieuta_vn', $this->news_mieuta_vn])
            ->andFilterWhere(['like', 'news_image', $this->news_image]);

        return $dataProvider;
    }
}
