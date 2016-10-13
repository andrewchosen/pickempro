<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teams".
 *
 * @property integer $id
 * @property string $team_name
 * @property string $location
 * @property integer $current_wins
 * @property integer $current_losses
 * @property string $division
 * @property string $conference
 *
 * @property Match[] $matches
 * @property Match[] $matches0
 */
class Teams extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teams';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['current_wins', 'current_losses'], 'integer'],
            [['team_name', 'location', 'division', 'conference'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'team_name' => 'Team Name',
            'location' => 'Location',
            'current_wins' => 'Current Wins',
            'current_losses' => 'Current Losses',
            'division' => 'Division',
            'conference' => 'Conference',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches($id)
    {
        return $this->hasMany(Match::className(), ['home_team' => $id]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches0($id)
    {
        return $this->hasMany(Match::className(), ['away_team' => $id]);
    }
}
