<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FacilityManagementDetails;

/**
 * FacilityManagementDetailsSearch represents the model behind the search form about `common\models\FacilityManagementDetails`.
 */
class FacilityManagementDetailsSearch extends FacilityManagementDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type', 'status', 'CB', 'UB'], 'integer'],
            [['main_content', 'image', 'sub_title', 'sub_content', 'equipment_list', 'DOC', 'DOU'], 'safe'],
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
        $query = FacilityManagementDetails::find();

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
            'type' => $this->type,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'main_content', $this->main_content])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'sub_title', $this->sub_title])
            ->andFilterWhere(['like', 'sub_content', $this->sub_content])
            ->andFilterWhere(['like', 'equipment_list', $this->equipment_list]);

        return $dataProvider;
    }
}