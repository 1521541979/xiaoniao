<?php
class MemberAction extends Action {
	
    public function index(){
		$this->display();
    }
    
    
    /**
     * 登录功能
     * Enter description here ...
     */
    public function login(){
    	$username=$_POST['username'];
    	$password=md5($POST['password']);
    	$member=M("User");
    	$result=$member->where("username='$username' and password='$password'")->find();
    	if($result){
    		$this->redirect("index.php");
    	}else{
    		$this->error("账户密码错误");
    	}
    }
    
    
    /**
     * 注册功能
     * Enter description here ...
     */
    public function register(){
    	$member=M("User");
    	if($member->create()){
    		$member->add();
    		echo '恭喜你注册成功啦';
    	}else{
    	    echo '错误';
    	}
    }
    
    /**
     * 发一条笑话
     * Enter description here ...
     */
    
    public function send(){
    	
    
    
    
    }
}