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
    public $status;

    public function rules()
    {
        return
            [
                [['username', 'email', 'password'], 'filter', 'filter' => 'trim'],
                [['username', 'email', 'password'], 'required'],
                ['username', 'string', 'min0' => 2, 'max' => 255],
                ['username', 'unique', 'targetClass' => User::className(),
                    'message' => 'Это имя уже занято, пожалуйста используйте другое!'],
                ['email', 'email'],
                ['email', 'unique', 'targetClass' => User::className(),
                    'message' => 'Этот почтовый ящик уже используется, пожалуйста используйте другой!'],
                ['status', 'default', 'value' => User::STATUS_ACTIVE, 'on' => 'default'],
                ['status', 'in', 'range' => [
                    User::STATUS_NOT_ACTIVE,
                    User::STATUS_ACTIVE]],
            ];
    }

    public function reg()
    {
        return true;
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
