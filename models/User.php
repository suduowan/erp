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
    public $qpassword;
    public $rememberMe = true;
    public $sex = true;
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
            [['name', 'phone', 'sex', 'password'], 'required','message'=>"{attribute}不可为空！"],
            [['phone', 'reg_time'], 'integer','message'=>'{attribute}必须为数字！'],
            [['name'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 64],
            // [['password'], 'validatePassword'],
            ['qpassword','compare','compareAttribute'=>'password','message'=>'两次密码不一致'],
            [['sex'], 'string', 'max' => 3],
            [['note'], 'string', 'max' => 255],
            [['reg_ip'], 'string', 'max' => 20],
        ];
    }
    /**
     * [checkPassword description]
     * @return [type] [description]
     */
    private function checkPassword(){
        return Yii::$app->db->createCommand('SELECT * FROM '.self::tableName().' WHERE (name=:name OR phone=:phone) AND (password=:password)')
           ->bindValue(':name', $this->name)
           ->bindValue(':phone', $this->name)
           ->bindValue(':password', md5($this->password))
           ->queryOne();
    }
    public function login(){
        $user = $this->checkPassword();

        if ( $user ) {
          return Yii::$app->user->login( new static($user) , $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }
    private function loginSuccess( $user,$rememberMe ){

    }
    public function register(){
        if ( $this->validate() ) {
            return Yii::$app->db->createCommand()->insert(self::tableName(),[
                'name'     => $this->name,
                'password' => md5($this->password),
                'phone'    => $this->phone,
                'sex'      => $this->sex,
                'note'     => $this->note,
                'reg_time' => time(),
                'reg_ip'   => Yii::$app->request->userIP,
            ])->execute();
        }
        return false;

    }
    /**
     * [validatePassword description]
     * @param  [type] $attribute [description]
     * @param  [type] $params    [description]
     * @return [type]            [description]
     */
    public function validatePassword( $attribute,$params ){
        if ( !$this->hasErrors() ) {
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, '用户名或密码错误.');
            }
        }
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'         => 'ID',
            'name'       => '昵称',
            'password'   => '密码',
            'phone'      => '手机',
            'sex'        => '性别',
            'note'       => '备注',
            'reg_ip'     => 'Reg Ip',
            'reg_time'   => 'Reg Time',
            'rememberMe' => '记住本次登录',
        ];
    }
}
