<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accounts".
 *
 * @property int $id
 * @property string $login
 * @property string $pass
 * @property string $email
 * @property string $auth_key
 * @property string $access_token
 */
class Register extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface{

    public $rememberMe = false;
    public $conf_pass;

    public static function tableName(){
        return 'accounts';
    }

    public function rules(){
        return [
            [['username', 'password', 'email', 'conf_pass', 'rememberMe'], 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\Register', 'message' => 'This username has already been taken.'],
            [['username'], 'string', 'max' => 45],
            [['password', 'email', 'auth_key', 'access_token'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels(){
        return [
            'email' => 'Email',
            'username' => 'Login',
            'password' => 'Password',
            'conf_pass' => 'Confirmed Password',
            'rememberMe' => 'I accept the Terms of Use & Privacy Policy',
        ];
    }

    public static function findIdentity($id){
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null){
        return self::findOne(['access_token'=>$token]);
    }

    public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
    }

    public function getId(){
        return $this->id;
    }

    public function getAuthKey(){
        return $this->auth_key;
    }

    public function validateAuthKey($authKey){
        return $this->auth_key === $authKey;
    }

    public function validatePassword($pass){
        return $pass === $this->password;
    }
}
