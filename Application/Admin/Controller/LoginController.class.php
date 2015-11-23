<?php 
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function login(){
		$error = '';
		if(IS_POST){
			
			$user = M('manager');
			$username = I('post.username'); 
			
			$info = $user -> where("username = '%s'",$username) -> getField('password');
			if($this->check_verify(I('post.verify'))){
				if(md5(I('post.password')) === $info){
					session('username',$username);
					$this -> redirect('index/index');
				}
				else $error = '密码或者用户名错误';

			}
			else $error = '验证码错误';
			
		}
		layout(false); 
		$this->assign('error',$error);
		$this->display('admin/login');
	}

	public function verify(){
		$config =  array(
			                 
        	'length'    =>  4,               
        	'fontttf'   =>  '4.ttf',
        	"fontSize"  =>  18,
		 );
		$verify = new \Think\Verify($config);
		$verify -> entry();
	}
	public function logout(){

		session('username',null);
		$this -> redirect('login/login');
	}

	public function check_verify($code ,$id){
    	$very = new \Think\Verify();
    	return $very -> check($code,$id);
    }
}