<?php
/**
 * Created by PhpStorm.
 * User: ASU-3
 * Date: 20.04.16
 * Time: 9:28
 */
namespace app\models;
use yii\base\Model;
use Yii;

class RegForm extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return
            [
                [
                    ['username', 'email', 'password'],
                    'required'
                ]
            ];
    }

    public function attributeLabels()
    {
        return
            [
                'username' => 'Имя пользователя',
                'email' => 'Эл. почта',
                'password' => 'Пароль'
            ];
    }
}
