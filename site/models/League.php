<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "league".
 *
 * @property integer $id
 * @property string $name
 * @property integer $max_players
 * @property integer $mode
 * @property integer $non_underdog_win
 * @property integer $underdog_win
 * @property string $database
 * @property string $created
 * @property integer $owner
 *
 * @property User $owner0
 */
class League extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'league';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['max_players', 'mode', 'non_underdog_win', 'underdog_win', 'owner'], 'integer'],
            [['owner'], 'required'],
            [['name', 'database', 'created'], 'string', 'max' => 255],
            [['owner'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'max_players' => 'Max Players',
            'mode' => 'Mode',
            'non_underdog_win' => 'Non Underdog Win',
            'underdog_win' => 'Underdog Win',
            'database' => 'Database',
            'created' => 'Created',
            'owner' => 'Owner',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner0()
    {
        return $this->hasOne(User::className(), ['id' => 'owner']);
    }
}
