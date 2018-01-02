<?php 
namespace app\admin\controller;
/**
* 
*/
class News extends \think\Controller
{
	
	public function index()
	{
		//查询，列表
		$list = db('news')->select();

		//把一个变量赋值给模板
		//第一个参数：模板变量，第二个参数：值
		$this->assign('news_list',$list);
		return $this->fetch();
	}

	public function add()
	{
		//进入添加页面
		return $this->fetch();
	}

	public function save()
	{
		//保存添加的信息
		//助手函数input
		//print_r(input());

		//助手函数  实例化数据模型的db
		db('news')->insert(input());
		//success操作成功提醒的方法
		//第一个参数：提醒的内容
		//第二个参数：提醒后跳转的页面
		$this->success('添加成功！','index');
	}
}

 ?>