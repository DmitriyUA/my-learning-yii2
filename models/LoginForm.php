<?php
/**
 * Created by PhpStorm.
 * User: ASU-3
 * Date: 20.04.16
 * Time: 9:27
 */
namespace app\models;
use yii\base\Model;
use Yii;

class LoginForm extends Model
{
    public $username;
    public $password;
    public $email;
    public $rememberMe = true;
    public $status;


    public function rules()
    {
        return
            [
                [['username', 'password'], 'required', 'on' => 'default'],
                ['email', 'email'],
                ['rememberMe', 'boolean'],
                ['password', 'validatePassword']
            ];
    }

    public function validatePassword($attribute)
    {

    }

    public function attributeLabels()
    {
        return
        [
            'rememberMe' => 'Запомнить меня',
            'username' => 'Имя пользователя',
            'password' => 'Пароль'
        ];
    }

    public function login()
    {
        return true;
    }
}
