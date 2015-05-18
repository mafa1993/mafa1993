<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Think\Page;

class IndexController extends Controller {
    
    public function index(){
        $this->display('login'); 
    }
    public function admin(){
        $this->display('index');
    }
    public function information(){
        $this->display('information');
    }
    public function repair(){
        $this->display('repair');
    }
    public function guest(){
        $this->display('guest');
    }
    public function goods(){
        $this->display('goods');
    }
    
    public function text(){
        $this->display('index_display');
    }
    
    public function verify(){
        ob_clean();
        $config=array('fontSize' =>80,'length' => 4,'useCurve'=>false);
        $verify = new \Think\Verify($config);
        $verify->entry();
    }
    
    public function logincheck(){
        $code=I('post.code');
        $user=I('post.user');
        $password=md5(I('post.password'));
        $usermodel=M('user');
        $checkuser=$usermodel->where(array('user'=>$user))->field('user')->select();
        $checkpass=$usermodel->where(array('user'=>$user))->field('password')->select();
        /*echo $password.'<br/>';
        var_dump($checkpass['0']['password']);
        exit;*/
        
        /*if(!check_verify($code)){
            $this->error('验证码错误','',2);
        }else*/if(empty($checkuser)){
            $this->error('用户名错误','',2);
        }elseif($checkpass['0']['password'] != $password){
            $this->error('密码错误','',2);
        }else{
            session('user',"$user");
            $user=session('user');
            $usermodel=M('user');
            $rabc=$usermodel->where(array('user'=>$user))->field('rabc')->select();
            /*var_dump($this->$rabc);
            exit;*/
            session('rabc',$rabc);
            $this->redirect('index/admin');
        }     
    }
    
    public function addstudent(){

        //判断权限进行学生添加
        if(session('rabc')[0]['rabc'] == 1){
            $id=I('get.id');
            $num=I('post.number',1);
            if($id == 1){
                $this->display();
            }elseif($id ==2){
                $this->assign('num',$num);
                $this->display('add_student');
            }elseif($id == 3){
                $student=M('student');
                for($i=0;$i<$num;++$i){
                    $data['sno'.$i]= I('psot.sno'.$i);
                    $data['sex'.$i]= I('psot.sex'.$i);
                    $data['name'.$i]= I('psot.name'.$i);
                    $data['uno'.$i]= I('psot.uno'.$i);
                    $data['tel'.$i]= I('psot.tel'.$i);
                    $data['grade'.$i]= I('psot.grade'.$i);
                    $student->create($data)->add();
                    $this->success('添加成功','index/addstudent?id=1');
                }
            }else{
                $this->error('参数错误');
            }
        }else{
            $this->error('没有操作权限');
        }
        
    }
    
    public function deletestudent(){
        /*var_dump(session('rabc')[0]['rabc']);
        exit;*/
         
         if(session('rabc')[0]['rabc'] == 1){
            $id=I('get.id');
            if($id == 1){
                $this->display();
            }elseif($id == 2){
                $field=I('post.choice');
                $value=I('post.value');
                $student=M('student');
                $student->where($field = $value)->delete();
                $this->success('删除成功','index/deletestudent?id=1');
            }
         }else{
            $this->error('没有操作权限');
         }
    }
    
    public function savestudent(){
        if(session('rabc')[0]['rabc'] == 1){
            $id=('get.id');
            if($id == 1){
                $this->display('savestudent');
            }elseif( $id == 2){
                $student=M('student');
                $data['sno']= I('psot.sno');
                $check=$student->where(array('sno'=>$data['sno']))->select();
                if(empty($check)){
                    $this->error('请输入正确的学号');
                }else{
                    $data['name']= I('psot.name',$check[0]['name']);
                    $data['uno']= I('psot.uno',$check[0]['uno']);
                    $data['tel']= I('psot.tel',$check[0]['tel']);
                    $student->where(array('sno'=>$data['sno']))->data($data)->save();
                    $this->success('修改成功','index/savestudent');
                }
            }
        }
    }
    
    public function selectstudent(){
        $id=I('get.id');
        if($id == 1){
            $this->display();
        }elseif($id == 2){
            $value=I('post.value');
            $field=I('post.choice');
            $student=M('Student');
    		$count=$student->count();
    		$page=new Page($count,10);  //5为每页几条
    		$show=$page->show();    //分页
            $page->setConfig('first','首页');
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('last','尾页');
    		$list=$student->where($field=$value)->order('sno')->limit($page->firstRow.','.$page->listRows)->select();   //firstRow第几条开始 listRows 每页几条
    		$this->assign('list',$list);
    		$this->assign('page',$show);
    		$this->display('select_student');
        }else{
            $this->error('参数错误');
        }
	}
 
    public function updatepass(){
        $id=I('get.id');
        if($id == 1){
            $this->display();
        }elseif($id==2){
            $usermodel=M('User');
            $user=I('post.user');
            $password=I('post.password');
            $checkpass=I('post.checkpass');
            $checkuser=$usermodel->where(array('user'=>$user))->field('user')->select();
            if($password != $checkpass || empty($checkuser)){
                $this->error('用户名或密码输入有错误');
            }else{
                $usermodel->where(array('user'=>$user))->data(array('password'=>$password))->save();
                $this->error('修改成功');
            }
        }else{
            $this->error('参数错误');
        }
    }
}