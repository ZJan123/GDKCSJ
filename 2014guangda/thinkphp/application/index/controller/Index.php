<?php
namespace app\index\controller;

class Index extends \think\Controller
{
    public function index()
    {
        return ;
    }

    public function home()
    {
    	//实现从控制器跳转到视图层
    	return $this->fetch();
    }
}
