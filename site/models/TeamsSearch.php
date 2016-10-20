<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Teams;

/**
 * TeamsSearch represents the model behind the search form about `app\models\Teams`.
 */
class TeamsSearch extends Teams
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'current_wins', 'current_losses'], 'integer'],
            [['team_name', 'location', 'division', 'conference'], 'safe'],
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
        $query = Teams::find();

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
            'current_wins' => $this->current_wins,
            'current_losses' => $this->current_losses,
        ]);

        $query->andFilterWhere(['like', 'team_name', $this->team_name])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'division', $this->division])
            ->andFilterWhere(['like', 'conference', $this->conference]);

        return $dataProvider;
    }
}
