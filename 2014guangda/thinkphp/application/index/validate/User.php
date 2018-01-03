<?php 
namespace app\index\validate;

use think\Validate;

class User extends Validate
{
    protected $rule = [
        'user_name'  =>  'require|min:3|unique:user',
        'user_pwd' =>  'require|min:6|max:18',
        'user_email' =>  'require|email|unique:user'
    ];

    protected $message = [
    	'user_name.min' => '用户名长度必须大于3位',
        'user_name.unique' => '用户名已存在',
    	'user_pwd.max' => '密码长度不能超过18位',
    	'user_pwd.min' => '密码长度必须大于6位',
        'user_email.email'  =>  '请输入正确的邮箱地址',
        'user_email.unique'  =>  '邮箱已被注册！'

    ];
}
?>