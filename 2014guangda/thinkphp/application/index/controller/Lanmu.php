<?php
namespace app\index\controller;

class Lanmu extends \think\Controller
{
    public function mianshi()
    {
        $info = db('news')->select();
        
        $this->assign('info_ms',$info);
        return $this->fetch();
    }

    public function zhichang()
    {
    	//实现从控制器跳转到视图层
    	return $this->fetch();
    }

    public function mstong()
    {
    	//实现从控制器跳转到视图层
    	return $this->fetch();
    }

    public function zhishi()
    {
    	//实现从控制器跳转到视图层
    	return $this->fetch();
    }
}
