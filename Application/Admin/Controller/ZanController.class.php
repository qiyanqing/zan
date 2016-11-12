<?php
	namespace Admin\Controller;
	use Admin\Controller\BaseController;
	class ZanController extends BaseController {
		public function _initialize () {
	    	parent::_initialize();
	    }
		public function zhu(){
			$this->display();
		}
		public function add(){
			$c = M('category')->select();
			$this->assign('cc',$c);
			$this->display();
		}
		public function handleadd(){
			$data = array();
			$info = upload('image','zan');
			if ($info['status'] == 'error') {
				$this->error('上传失败');
			}else{
				$data['img'] = $info['path'];
			}
			$data['name'] = $_POST['name'];
			$data['company'] = $_POST['company'];
			$data['sex'] = $_POST['sex'];
			$data['money'] = $_POST['money'];
			$data['sort'] = $_POST['sort'];
			$data['category'] = $_POST['category'];
			$data['status'] = 0;
			$data['like_num'] = 0;
			$a = M('zan')->add($data);
				if ($a) {
					$this->success('增加成功',U('admin/zan/add'),1);
				}else{
					$this->error('增加失败',U('admin/zan/add'),1);
				}
		}
		public function lists(){
			$result = M('zan')->select();
			$this->assign('result',$result);
			$this->display();
		}
		public function delete(){
			$d = $_GET['id'];
			$n['status'] = -1;
			M('zan')->where(array('id' =>$d))->save($n);
			$this->success('删除成功',U('admin/zan/lists'),1);
		}
		public function edit(){
			$category = M('category')->select();
	    	$this ->assign('category',$category);
			$i = $_GET['id'];
			$u = M('zan')->where(array('id'=>$i))->find();
			$this->assign('u',$u);
			$this->display();
		}
		public function handleedit(){
			$user_inff = array();
	    	if ($_FILES['image']['name']) {
	    		$info = upload('image','zan');
	    		if ($info['status'] == 'error') {
	    			$this->error('上传失败！');
	    		}else{
	    			$user_inff['img'] 		= $info['path'];
	    		}
	    	}
	    	$i = $_POST['id'];
	    	$user_inff['name'] 				= $_POST['name'];
	    	$user_inff['sex'] 				= $_POST['sex'];
	    	$user_inff['sort'] 				= $_POST['sort'];
	    	$user_inff['company'] 			= $_POST['company'];
	    	$user_inff['money'] 			= $_POST['money'];
	    	$user_inff['category'] 			= $_POST['category'];
	    	$user_inff['status'] 			= $_POST['status'];
	    	$test = M('zan')->where(array('id'=>$i))->save($user_inff);
	    	if ($test > 0) {
	    			$this->success('更改成功',U('admin/zan/lists'),1);
	    		}else{
	    			$this->error('更改失败',U('admin/zan/lists'),1);
	    		}
	    }
	}
?>