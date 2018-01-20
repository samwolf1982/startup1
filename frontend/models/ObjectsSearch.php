<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Objects;

/**
 * ObjectsSearch represents the model behind the search form of `frontend\models\Objects`.
 */
class ObjectsSearch extends Objects
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'deal_type_id', 'deal_model_id', 'object_type_id', 'object_model_id', 'state', 'sity', 'currency_type_id', 'property_type_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['address_text', 'country', 'street', 'number_street', 'zip', 'video_json', 'header', 'description', 'url'], 'safe'],
            [['lat', 'lng', 'price'], 'number'],
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
        $query = Objects::find();

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
            'deal_type_id' => $this->deal_type_id,
            'deal_model_id' => $this->deal_model_id,
            'object_type_id' => $this->object_type_id,
            'object_model_id' => $this->object_model_id,
            'state' => $this->state,
            'sity' => $this->sity,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'price' => $this->price,
            'currency_type_id' => $this->currency_type_id,
            'property_type_id' => $this->property_type_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'address_text', $this->address_text])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'number_street', $this->number_street])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'video_json', $this->video_json])
            ->andFilterWhere(['like', 'header', $this->header])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
