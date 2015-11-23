<?php
namespace Admin\Controller;
use Think\Controller;
// use Admin\Model;
class IndexController extends CommonController {

    public function index(){
    	$this->display('admin/index');
    }

    public function xiugai(){
    	$mana = M('manager');
    	$name = session('username');
    	$ps = $mana -> where("username='$name'") -> getField('password');
    	$error = '';
    	
    	if(IS_POST){
    		if(intval(I('post.state'))===1){
    			if(md5(I('post.opassword'))===$ps){
	    			$initial = md5('123456');
	    			$mana -> where("username='$name'") -> setField('password',$initial); 
	    			$this->success('初始化成功',U('index/index'),2);
    			}else{
    				$error = '初始化失败，原密码输入错误';
    				$this -> assign('error',$error);
    				$this -> display('admin/index');
    			}
    			
    		}
			else {
				if(md5(I('post.opassword'))===$ps ){
					$nps = md5(I('post.npassword'));
    				$mana -> where("username='$name'") -> setField('password',$nps);
    				$this -> success('修改密码成功',U('index/index'),2);
				}else {
					$error = '原密码输入错误,修改密码失败';
					$this -> assign('error',$error);
    				$this -> display('admin/index');
				}

			}		
    					
    		
    	}
    }


    public function enrol(){
        $enrol = M('enrol');
        $arr = $enrol -> select();
        $this -> assign('arr',$arr);
        $this->display('admin/enrol');
    }

    public function delEnrol($id){
        $enrol = M('enrol');
        if($enrol -> delete($id)){
            $this-> redirect('index/enrol');    
        }else{
            $this-> error('删除失败，请稍后重试','index/enrol',3);
        }
        
    }

    public function showEnrol($id){
            $enrol = M('enrol');
            $arr = $enrol -> find($id);
            $this->assign('arr',$arr);
            $this->display('admin/showEnrol'); 
    }

    public function teacherList(){
        $tea = M('teacher');
       
        $arr = $tea -> select();
        $this -> assign('arr',$arr);
        $this -> display('admin/teacherList');
    }

    public function showTea($id){
        $tea = M('teacher');
        if(IS_POST){
           
            $data['name'] = I('post.name');
            $data['info'] = $_POST['info'];
            $data['class_id'] = intval(I('post.state'));
           
            
            print_r($data); print_r($content);
            exit;
            if($tea ->where('id = %d',$id) -> save($data)){
                $this -> redirect('index/teacherlist');
            }
            else{
                $this -> error('修改失败');
            }
        }else {
            
            $arr = $tea -> find($id);
            $this -> assign('arr',$arr);
            $this -> display('admin/showTea');   
        }
       
    }

    public function delTea($id){
        $tea = M('teacher');
        if($tea -> delete($id)){
            $this -> redirect('index/teacherlist');
        }else {
            $this -> error('删除失败','index/teacherlist',3);
        }

    }

    public function addTea(){
       

        if(IS_POST){
            $tea = M("teacher"); 
            $data['name'] = I('post.name');
            $data['info'] = $_POST['info'];
            $data['class_id'] = intval(I('post.state'));
            $ext = array_pop(explode('.',$_FILES['picture']['name']));       
            $filename = date('YmdHis').rand(1000,9999).'.'.$ext;
            move_uploaded_file($_FILES['picture']['tmp_name'],"./Public/image/".$filename);
            // echo $filename;
            $data['picture'] = "./Public/image/".$filename;
            
            if($tea->add($data)){
                $this->redirect('index/teacherlist');
            }else {
                $this -> error('添加失败','index/addtea',3);
            }
        }else{
            
            $this->display('admin/addTea');
        }
    }

    public function newsList(){
        $this -> display('admin/newsList');
    }


}