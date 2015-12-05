<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    protected function indexHot(){
        $obj = M('news');
        $arr=  $obj -> order('date desc')
                    -> where('state =1')
                    -> limit(5)
                    -> field('id,title,picture,date,class')
                    -> select();
                     $rankArr=[];   
        foreach ($arr as $k => $v) {
           
            if($v['class']<4){
                $v['name'] ='news';
            }elseif ($v['class']<6) {
                $v['name'] ='edu';
            }else{
                $v['name'] ='tra';
            }
            switch (intval($v['class'])%3) {
                case 0:
                    $v['class'] =3;
                    break;
                case 1:
                    $v['class'] =1;
                    break;
                default:
                    $v['class'] =2;
                    break;
                
            }
            $rankArr[]=$v;
        }
        return $rankArr;
       
    }

    protected function indexInfo($table,$class){
        $obj = M($table);
        return $obj->order('date desc')
                   ->where('class=%d',$class)
                   ->limit(7)
                   ->field('id,title,picture,date')
                   ->select();
    }

    protected function indexTea($id){
        $obj = M('teacher');
        return $obj -> where('class_id=%d',$id)
                    ->limit(6)
                    ->field('name,picture,id')
                    ->select();
    }
    
    public function index(){
    	$li = "first";
    	$this-> li=$li;
        $this->arr1 = $this -> indexInfo('news',1);
        $this->arr2 = $this -> indexInfo('news',2);
        $this->arr3 = $this -> indexInfo('news',3);
        $this->arr4 = $this -> indexInfo('news',7);
        $this->tea1 = $this -> indexTea(1);
        $this->tea2 = $this -> indexTea(2);
        $this->hot = $this -> indexHot();
    	$this -> display();
    }

    protected function rankInfo(){
         $news = M('news');
        $arr = $news ->order('page_view desc')
                     ->limit(10)
                     ->field('id,title,class')
                     ->select();
        $rankArr=[];   
        foreach ($arr as $k => $v) {
           
            if($v['class']<4){
                $v['name'] ='news';
            }elseif ($v['class']<6) {
                $v['name'] ='edu';
            }else{
                $v['name'] ='tra';
            }
            switch (intval($v['class'])%3) {
                case 0:
                    $v['class']=3;
                    break;
                case 1:
                    $v['class'] =1;
                    break;
                default:
                    $v['class'] =2;
                    break;
                
            }
            $rankArr[]=$v;
        }
       
        return $rankArr;
    }

    protected function entrolInfo(){
        $news = M('news');
        $arr = $news ->order('date desc')
                     ->where('class=3')
                     ->limit(2)
                     ->field('id,title')
                     ->select();
        return $arr;
    }

    public function teaList($id=1){
        $oTea = M('teacher');
        $arr = $oTea -> where("class_id=%d",$id) -> select();
        $this -> assign('arr',$arr);
    	$this ->li = 'expertli';
        $this -> id =$id;
        $this ->entArr = $this ->entrolInfo();
        $this ->rankArr= $this ->rankInfo();
    	$this -> display();
    }
    

    public function trainList($id=1){
    	$li = "talentli";
    	$this ->li=$li;
        $this->id =$id;
        $oNews = M('news');
        $this ->entArr = $this ->entrolInfo();
        $this ->rankArr= $this ->rankInfo();
        $this->arr=$oNews -> where("class=%d",($id+6))->order('date desc')->select();
        $this -> display();
    }
    public function showtra($id,$cid){
        $this ->id =$id;
        $this ->li = "newsli";
        M('news')->where("id=%d",$cid)->setInc('page_view');
        $this ->entArr = $this ->entrolInfo();
        $this ->rankArr= $this ->rankInfo();
        $this ->arr =M('news')->where("id=%d",$cid) ->find();
        $this ->display();
    }

    public function eduList($id=1){
    	$this ->li = "teachli";
        $this->id =$id;
        $oNews = M('news');
        $this ->entArr = $this ->entrolInfo();
        $this ->rankArr= $this ->rankInfo();
        $this->arr=$oNews -> where("class=%d",($id+3))->order('date desc')->select();
    	$this -> display();
    }
    public function showEdu($id,$cid){
        $this ->id =$id;
        $this ->li = "newsli";
        M('news')->where("id=%d",$cid)->setInc('page_view');
        $this ->entArr = $this ->entrolInfo();
        $this ->rankArr= $this ->rankInfo();
        $this ->arr =M('news')->where("id=%d",$cid) ->find();
        $this ->display();
    }

    public function info(){
        $oIn = M('edu_pro');
        $arr = $oIn ->where('id=4') ->find();
        $oIn -> page_view += 1;
        $oIn -> where("id = 4") ->save();
    	$this -> li = "info";
        $this ->entArr = $this ->entrolInfo();
        $this ->rankArr= $this ->rankInfo();
        $this ->assign('arr',$arr);
    	$this -> display();
    }

    public function stuList($id =1){
        $oIn = M('edu_pro');
        $arr = $oIn ->select();
        $oIn->where('id=%d',$id)->setInc('page_view'); 
        $this -> assign('arr',$arr);
        $this ->id =$id;
        $this ->entArr = $this ->entrolInfo();
        $this ->rankArr= $this ->rankInfo();
        $this ->li = 'educateli';
        $this -> display();
    }

    public function entry(){
        $oEn=M('enrol');
        if(IS_POST){
            $data=array(
                'title'=>I('post.title'),
                'name'=>I('post.name'),
                'tell'=>I('post.tell'),
                'info'=>I('post.info'),
                'time'=>time(),
                );
            if($oEn->add($data)){
                $this->bool =1;
                $this->display();
            } else{
                $this->error("报名失败，请重试");
            }
        }else{
            $li = "entry";
            $this -> li=$li;
            $this ->entArr = $this ->entrolInfo();
            $this ->rankArr= $this ->rankInfo();
            $this -> display();
        }
    	
    }
    public function newsList($id=1){
        $oNews = M('news');
        $this->arr=$oNews -> where("class=%d",$id)->order('date desc')->select();
       $this ->entArr = $this ->entrolInfo();
        $this ->rankArr= $this ->rankInfo();
    	$this->li = "newsli";
        $this->id =$id;
    	$this -> display();
    }

    public function showNews($id,$cid){
        $this ->id =$id;
        $this ->li = "newsli";
        M('news')->where("id=%d",$cid)->setInc('page_view');
        $this ->entArr = $this ->entrolInfo();
        $this ->rankArr= $this ->rankInfo();
        $this ->arr =M('news')->where("id=%d",$cid) ->find();
        $this ->display();
    }
     public function showTea($id,$cid){
        $this ->id =$id;
        $this ->li = "expertli";
        $this ->entArr = $this ->entrolInfo();
        $this ->rankArr= $this ->rankInfo();
        $this ->arr =M('teacher')->where("id=%d",$cid) ->find();
        $this ->display();
    }

    public function test(){}


}