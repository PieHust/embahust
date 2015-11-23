<?php 
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function __construct(){
		parent::__construct();
		if(!session('?username')){
			$this -> error('请先登录',U('login/login'),3);
		}
	}

	protected function getImgurl($content,$order='ALL'){
	
	}
}