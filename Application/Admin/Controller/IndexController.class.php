<?php
namespace Admin\Controller;
use Think\Controller;
// use Admin\Model;
class IndexController extends CommonController {

    public function index(){
    	$this->display('Admin/index');
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
    				$this -> display('Admin/index');
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
    				$this -> display('Admin/index');
				}

			}		
    					
    		
    	}
    }


    public function enrol(){
        $enrol = M('enrol');
        $arr = $enrol -> select();
        $this -> assign('arr',$arr);
        $this->display('Admin/enrol');
    }

    public function delEnrol($id){
        $enrol = M('enrol');
        if($enrol -> delete($id)){
            $this-> redirect('index/enrol');    
        }else{
            $this-> error('删除失败，请稍后重试');
        }
        
    }

    public function showEnrol($id){
            $enrol = M('enrol');
            $arr = $enrol -> find($id);
            $this->assign('arr',$arr);
            $this->display('Admin/showenrol'); 
    }

    public function teacherList(){
        $tea = M('teacher');
       
        $arr = $tea -> select();
        $this -> assign('arr',$arr);
        $this -> display('Admin/teacherlist');
    }

    public function showTea($id){
        $tea = M('teacher');
        if(IS_POST){
           
            $data['name'] = I('post.name');
            $data['info'] = $_POST['info'];
            $data['class_id'] = intval(I('post.state'));
            if($_FILES['picture']['error'] == 0){
                $ext = array_pop(explode('.',$_FILES['picture']['name']));       
                $filename = date('YmdHis').rand(1000,9999).'.'.$ext;
                move_uploaded_file($_FILES['picture']['tmp_name'],"./Public/image/".$filename);
                // echo $filename;
                $data['picture'] = "./Public/image/".$filename;
            }
            if($tea ->where('id = %d',$id) -> save($data)){
                $this -> redirect('index/teacherlist');
            }
            else{
                $this -> error('修改失败,请检查内容是否做过修改');
            }
        }else {
            
            $arr = $tea -> find($id);
            $this -> assign('arr',$arr);
            $this -> display('Admin/showtea');   
        }
       
    }

    public function delTea($id){
        $tea = M('teacher');
        if($tea -> delete($id)){
            $this -> redirect('index/teacherlist');
        }else {
            $this -> error('删除失败，请稍后重试');
        }

    }

    public function addTea(){
       

        if(IS_POST){
            $tea = M("teacher"); 
            $data['name'] = I('post.name');
            $data['info'] = $_POST['info'];
            $data['class_id'] = intval(I('post.state'));
            if($_FILES['picture']['error'] == 0){
                $ext = array_pop(explode('.',$_FILES['picture']['name']));       
                $filename = date('YmdHis').rand(1000,9999).'.'.$ext;
                move_uploaded_file($_FILES['picture']['tmp_name'],"./Public/image/".$filename);
                // echo $filename;
                $data['picture'] = "./Public/image/".$filename;
            }
            
            
            if($tea->add($data)){
                $this->redirect('index/teacherlist');
            }else {
                $this -> error('添加失败');
            }
        }else{
            
            $this->display('Admin/addtea');
        }
    }

    public function newsList(){
        $news = M('news');
        $arr = $news->join('news_class on news.class =news_class.class_id')->select();
       
        $this -> assign('arr',$arr);
        $this -> display('Admin/newslist');
    }

    public function editNews($id =''){
        if(IS_POST){
            $news = M('news');
            $data['title'] = I('post.title');
            $data['content'] = $_POST['content'];
            $data['date'] = I('post.date');
            $data['class'] = I('post.class');
            /*dump(I('post.'));
            exit;*/
            if($_FILES['picture']['error'] == 0){
                $ext = array_pop(explode('.',$_FILES['picture']['name']));       
                $filename = date('YmdHis').rand(1000,9999).'.'.$ext;
                move_uploaded_file($_FILES['picture']['tmp_name'],"./Public/image/".$filename);
                // echo $filename;
                $data['picture'] = "./Public/image/".$filename;
            }
            if(empty($id)){
                if($news -> add($data)){
                    $this -> redirect('index/newslist');
                 }
                else {
                    $this -> error('上传失败，请检查（除图片外）是否有内容为空');
                }
            }
            else{
                if($news->where("id=$id")->save($data)){
                    $this-> redirect('index/newslist');
                }else {
                    $this -> error('文章修改失败,内容未修改');
                }
            }
            
        
        }
        $this -> display('Admin/shownews');
    }

    public function chState($id){
        $news = M('news');
        $state = $news -> where("id = %d",$id) -> getField('state');
        $news ->state = $state==0?1:0;
        $news -> where('id=%d',$id) ->save();
        $this->redirect('index/newslist');

    }
    public function shownews($id = 0){
        $news = M('news');
        $arr = $news -> where("id = $id") -> find();
        $this->assign('arr',$arr);
        $this ->display('Admin/shownews');
    }

    public function delnews($id){
        $news = M('news');
        if($news -> delete($id)){
            $this -> redirect('index/newslist');
        }

    }
    public function edulist(){
        $edu = M('edu_pro');
        $this->assign('arr',$edu -> select());
        $this->display('Admin/edulist');
    }

    public function editEdu($id = 0){
        $edu = M('edu_pro');
        if(IS_POST){
            $data = array(
                'date' => I('post.date'),
                'content'=> $_POST['content'],
                );
            if($edu -> where("id = $id") -> save($data)){
                $this -> redirect('index/edulist');
            }
            else{
                $this -> error('内容未修改，请修改后提交');
            }
        }else{
            $this-> assign('arr',$edu->where("id = $id") -> find());
            $this -> display('Admin/showedu');  
        }
        
    }

    public function enForm(){
        $config = array(  
            'maxSize'    =>    3145728,
            'savePath'   =>    '',
            'saveName'   =>    'entryform',
            'exts'       =>    array('docx',),
            'autoSub'    =>    false,  
            'replace'   => true,  
            );
        $upload = new \Think\Upload($config);
        $info  = $upload -> upload();
        if(!$info){
            $this -> error($upload -> getError());
        }else{
            $this -> success('上传成功');
        }
    }

    public function certificate(){
        $cert = M('certificate');
        $config = array(  
            'maxSize'    =>    3145728,
            'savePath'   =>    './Public/Uploads/',
            'saveName'   =>    'certificate',
            'exts'       =>    array('xlsx',),
            'autoSub'    =>    false, 
            'replace'   => true,    
            );
        $upload = new \Think\Upload($config);
        $info  = $upload -> upload();

        Vendor('Excel.PHPExcel');
        $file = './Public/Uploads/certificate.xlsx';

        $obj = \PHPExcel_IOFactory::load($file);
        $sheetCount = $obj ->getSheetCount();
        $arr = array();
        for($i = 0;$i <$sheetCount; $i++){
            $data = $obj ->getSheet($i) -> toArray();
            $arr = array_merge($arr,$data);
        }
        foreach ($arr as $k => $v) {
            $data  = array(
                'number' => $v[0],
                'name' => $v[1],
                'class' => $v[2],
                );

            $cert -> add($data);
           
        }
        /*dump($arr);*/

        if(!$info){
            $this -> error($upload -> getError());
        }else{
            $this -> success('导入成功');
        }
    }

   public function mcert(){
        $cert = M('certificate');
        $arr = $cert -> select();
        $this -> assign('arr',$arr);
        $this -> display('Admin/certificate');
   }

   public function delCert($id){
        $cert = M('certificate');
        if($cert -> delete($id)){
            $this -> redirect('index/mcert');
        }
   }

   public function addCert(){
        $cert = M(certificate);
        if(IS_POST){
            $data = array(
                'number' => I('post.number'),
                'name' => I('post.name'),
                'class' => I('post.class')
                );
            if($cert -> add($data)){
                $this->success('添加成功');
            }
        }
   }
   public function editCert($id){
        $cert = M(certificate);
        if(IS_POST){
            $data = array(
                'number' => I('post.number'),
                'name' => I('post.name'),
                'class' => I('post.class')
                );
            if($cert ->where("id= $id") -> save($data)){
                $this->success('修改成功');
            }
        }
   }
}