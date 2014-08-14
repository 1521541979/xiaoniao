<?php
class HomeAction extends Action {
    public function index(){
		$this->display();
    }
    public function logout(){
    	$this->redirect("__APP__/Index/login");
    }
}