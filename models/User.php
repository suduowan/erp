<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property int $phone
 * @property int $sex 1:男2:女
 * @property string $note 备注
 * @property string $reg_ip
 * @property int $reg_time
 */
class User extends \yii\db\ActiveRecord
{
    public $name;
    public $password;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'reg_time'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 64],
            [['sex'], 'string', 'max' => 3],
            [['note'], 'string', 'max' => 255],
            [['reg_ip'], 'string', 'max' => 20],
        ];
    }
    public function login(){
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'password' => 'Password',
            'phone' => 'Phone',
            'sex' => '1:男2:女',
            'note' => '备注',
            'reg_ip' => 'Reg Ip',
            'reg_time' => 'Reg Time',
        ];
    }
}
