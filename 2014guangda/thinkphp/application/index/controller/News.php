<?php
namespace app\index\controller;

class News extends \think\Controller
{
    public function preview()
    {
        $info = db('news')->where('id',input('id'))->find();
        $this->assign('info',$info);
        return $this->fetch();
    }
}
