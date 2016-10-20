<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Match;

/**
 * MatchSearch represents the model behind the search form about `app\models\Match`.
 */
class MatchSearch extends Match
{
    public $teams;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_underdog', 'season', 'week'], 'integer'],
            [['homeTeam', 'awayTeam'], 'safe'],
            [['day', 'time', 'created'], 'safe'],
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
        $query = Match::find();

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
            'home_team' => $this->home_team,
            'away_team' => $this->away_team,
            'is_underdog' => $this->is_underdog,
            'season' => $this->season,
            'week' => $this->week,
            'created' => $this->created,
        ]);

        $query->andFilterWhere(['like', 'day', $this->day])
            ->andFilterWhere(['like', 'time', $this->time]);

        return $dataProvider;
    }
}
