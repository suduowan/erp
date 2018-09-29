<?php
namespace app\models;

use Yii;
use yii\base\Model;
/**
 * 表单入口验证模型
 */
class EntryForm extends Model{
	public $name;
	public $email;
	/**
	 * [rules 表单提交规则配置]
	 * @return [type] [description]
	 */
	public function rules(){
		return [
			[['name','email'],'required'],	//	name and email 都是必须的
			['email','email'],	//	email 必须满足email 规则
		];
	}
}