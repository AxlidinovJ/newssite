<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "bolim".
 *
 * @property int $id
 * @property string $bnomi
 * @property string $time
 *
 * @property News[] $news
 */
class Bolim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bolim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bnomi'], 'required'],
            [['time'], 'safe'],
            [['bnomi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bnomi' => 'Bnomi',
            'time' => 'Time',
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['bolim_id' => 'id']);
    }
}
