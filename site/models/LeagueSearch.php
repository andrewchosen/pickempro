<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\League;

/**
 * LeagueSearch represents the model behind the search form about `app\models\League`.
 */
class LeagueSearch extends League
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'max_players', 'mode', 'non_underdog_win', 'underdog_win', 'owner'], 'integer'],
            [['name', 'database', 'created'], 'safe'],
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
        $query = League::find();

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
            'max_players' => $this->max_players,
            'mode' => $this->mode,
            'non_underdog_win' => $this->non_underdog_win,
            'underdog_win' => $this->underdog_win,
            'owner' => $this->owner,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'database', $this->database])
            ->andFilterWhere(['like', 'created', $this->created]);

        return $dataProvider;
    }
}
