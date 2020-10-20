<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shops;

/**
 * ShopsSearch represents the model behind the search form of `app\models\Shops`.
 */
class ShopsSearch extends Shops
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'tumans_shahars_id', 'views', 'status'], 'integer'],
            [['name', 'photo', 'short', 'text', 'slug', 'tel', 'telegram', 'location', 'youtube_link', 'create_date', 'update_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Shops::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'tumans_shahars_id' => $this->tumans_shahars_id,
            'views' => $this->views,
            'status' => $this->status,
            'create_date' => $this->create_date,
            'update date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'short', $this->short])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'telegram', $this->telegram])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'youtube_link', $this->youtube_link]);

        return $dataProvider;
    }
}
