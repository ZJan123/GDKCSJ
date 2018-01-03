<?php 

namespace app\admin\controller;

class News extends \think\Controller
{
	
	public function index()
	{
		

		return $this->fetch();
	}

	public function leixin()
	{
		//获取数据库中表的数据
		$leixing = input('cate_id');
		//print_r($leixing);
		if ($leixing=='0') {
			$list=db('news')->select();
			//print_r($list);
		}else{
			$list=db('news')->where('cate_id',input('cate_id'))->select();
			//print_r($list);
		}
		//print_r($list);
		$this->assign('news_list',$list);

		return $this->fetch();
	}

	public function add()
	{
		//进入添加新闻的界面
		return $this->fetch();
	}

	public function save()
	{
		//保存提交数据的行为
		$add_date = input();
		$file = request()->file('news_thumb');
		if($file){
            $file_info = $file->move('uploads');
            if ($file_info) {
        	    $add_date['news_thumb'] = $file_info->getSaveName();
            }else{
        	    echo $file->getError();
            }
            $add_date['create_time'] = time();
        }
		db('news')->insert($add_date);
		$this->success('提交成功','leixin');
	}

	public function delete()
	{
	    
		db('news')->delete(input('id'));
		$this->success('删除成功','leixin');
	}

}
 ?>