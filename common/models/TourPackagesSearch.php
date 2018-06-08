<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TourPackages;

/**
 * TourPackagesSearch represents the model behind the search form about `common\models\TourPackages`.
 */
class TourPackagesSearch extends TourPackages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'package_type', 'allowed_km', 'status', 'CB', 'UB'], 'integer'],
            [['image', 'vehicle_name', 'no_of_days', 'DOC', 'DOU', 'passengers'], 'safe'],
            [['rate', 'additional_km_price'], 'number'],
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
        $query = TourPackages::find()->orderBy(['id'=>SORT_DESC]);

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
            'package_type' => $this->package_type,
            'rate' => $this->rate,
            'passengers' => $this->passengers,
            'allowed_km' => $this->allowed_km,
            'additional_km_price' => $this->additional_km_price,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'vehicle_name', $this->vehicle_name])
            ->andFilterWhere(['like', 'no_of_days', $this->no_of_days]);

        return $dataProvider;
    }
}
