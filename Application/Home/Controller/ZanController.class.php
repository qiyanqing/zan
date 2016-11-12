<?php
	namespace Home\Controller;
	use Home\Controller\BaseController;
	class ZanController extends BaseController {
		public function _initialize () {
	    	parent::_initialize();
	    }
		public function dzan(){
			// 实例化User对象
			// $count      = M('zan')->where('status=1')->count();// 查询满足要求的总记录数
			// $Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			// $show       = $Page->show();// 分页显示输出
			// // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			// $list = M('zan')->where('status=1')->limit($Page->firstRow.','.$Page->listRows)->select();
			$info = M('zan')->where('status=1')->order(array('sort'=>'desc'))->select();
			$this->assign('info',$info);
			// $this->assign('list',$list);// 赋值数据集
			// $this->assign('page',$show);
			$this->display();
		}

	}
