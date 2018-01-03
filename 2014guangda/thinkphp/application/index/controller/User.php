<?php
namespace app\index\controller;
use \think\captcha\Captcha;

class User extends \think\Controller
{
    
    public function login()
    {
    	return $this->fetch();
    }
    public function reg()
    {
    	return $this->fetch();
    }
    public function doReg()
    {
    	$save_data = input();
    	//校验验证码
    	$captcha = new Captcha();
    	if (!$captcha->check(input('yzm'))) {
    		$this->error('验证码输入不正确');
    		//exit();
    	}
    	unset($save_data['yzm']);

    	$user_vail = validate('user');
    	if (!$user_vail->check($save_data)) {
    		$this->error($user_vail->getError());
    	}

    	$save_data['create_time'] = time();
    	//释放按键
    	unset($save_data['user_repwd']);
    	unset($save_data['yzm']);
    	
    	db('user')->insert($save_data);
    	$this->success('注册成功','login');
    }

}


		