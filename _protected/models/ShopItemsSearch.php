<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShopItems;

/**
 * ShopItemsSearch represents the model behind the search form of `app\models\ShopItems`.
 */
class ShopItemsSearch extends ShopItems
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tuman_shahar_id', 'shop_id', 'user_id', 'views', 'status', 'price', 'sale'], 'integer'],
            [['name', 'title', 'photo', 'short', 'slug', 'created_date', 'updated_date'], 'safe'],
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
        $query = ShopItems::find();

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
            'tuman_shahar_id' => $this->tuman_shahar_id,
            'shop_id' => $this->shop_id,
            'user_id' => $this->user_id,
            'views' => $this->views,
            'status' => $this->status,
            'price' => $this->price,
            'sale' => $this->sale,
            'created_date' => $this->created_date,
            'updated_date' => $this->updated_date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'short', $this->short])
            ->andFilterWhere(['like', 'slug', $this->slug]);

        return $dataProvider;
    }
}
