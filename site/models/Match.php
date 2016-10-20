<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "match".
 *
 * @property integer $id
 * @property integer $home_team
 * @property integer $away_team
 * @property integer $is_underdog
 * @property integer $season
 * @property integer $week
 * @property string $day
 * @property string $time
 * @property string $created
 *
 * @property LeagueMatch[] $leagueMatches
 * @property Teams $homeTeam
 * @property Teams $awayTeam
 */
class Match extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'match';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['home_team', 'away_team', 'is_underdog', 'season', 'week'], 'integer'],
            [['created'], 'safe'],
            [['day'], 'string', 'max' => 255],
            [['time'], 'string', 'max' => 11],
            [['home_team'], 'exist', 'skipOnError' => true, 'targetClass' => Teams::className(), 'targetAttribute' => ['home_team' => 'id']],
            [['away_team'], 'exist', 'skipOnError' => true, 'targetClass' => Teams::className(), 'targetAttribute' => ['away_team' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'homeTeam.team_name' => 'Home Team',
            'awayTeam.team_name' => 'Away Team',
            'is_underdog' => 'Is Underdog',
            'season' => 'Season',
            'week' => 'Week',
            'day' => 'Day',
            'time' => 'Time',
            'created' => 'Created',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeagueMatches()
    {
        return $this->hasMany(LeagueMatch::className(), ['match_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHomeTeam()
    {
        return $this->hasOne(Teams::className(), ['id' => 'home_team']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAwayTeam()
    {
        return $this->hasOne(Teams::className(), ['id' => 'away_team']);
    }
}
