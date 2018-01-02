<?php
namespace app\index\controller;

class Lanmu extends \think\Controller
{
    public function mianshi()
    {
        return $this->fetch();
    }

    public function zhichang()
    {
    	//实现从控制器跳转到视图层
    	return $this->fetch();
    }
}
