<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "teg".
 *
 * @property int $id
 * @property string $tnomi
 */
class Teg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tnomi'], 'required'],
            [['tnomi'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tnomi' => 'Tnomi',
        ];
    }
}
