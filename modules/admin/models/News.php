<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property string $content
 * @property int $bolim_id
 * @property string $time
 *
 * @property Bolim $bolim
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'img', 'content', 'bolim_id'], 'required'],
            [['content'], 'string'],
            [['bolim_id'], 'integer'],
            [['time'], 'safe'],
            [['title', 'img'], 'string', 'max' => 255],
            [['bolim_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bolim::className(), 'targetAttribute' => ['bolim_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'img' => 'Img',
            'content' => 'Content',
            'bolim_id' => 'Bolim ID',
            'time' => 'Time',
        ];
    }

    /**
     * Gets query for [[Bolim]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBolim()
    {
        return $this->hasOne(Bolim::className(), ['id' => 'bolim_id']);
    }
}
