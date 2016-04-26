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

    public function rules()
    {
        return
            [
                [
                    ['username', 'password'],
                    'required'
                ]
            ];
    }
    public function attributeLabels()
    {
        return
        [
            'username' => 'Имя пользователя',
            'password' => 'Пароль'
        ];
    }
}
