<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $password1
 * @property string $password2
 * @property int $yoshi
 * @property string $AuthKey
 * @property string $AccessToken
 * @property string $time
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password1', 'password2', 'yoshi'], 'required'],
            ['username','unique'],
            [['yoshi'], 'integer'],
            [['time'], 'safe'],
            [['username', 'password1', 'password2', 'AuthKey', 'AccessToken'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password1' => 'Password1',
            'password2' => 'Password2',
            'yoshi' => 'Yoshi',
            'AuthKey' => 'Auth Key',
            'AccessToken' => 'Access Token',
            'time' => 'Time',
        ];
    }
    





  public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['AccessToken' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null current user auth key
     */
    public function getAuthKey()
    {
        return $this->AuthKey;
    }

    /**
     * @param string $authKey
     * @return bool|null if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }



    public static function findByUsername($username){
        return static::findOne(['username'=>$username]);
    }

    public function validatePassword($password){
        return $this->password1 == ($password);
    }


}
