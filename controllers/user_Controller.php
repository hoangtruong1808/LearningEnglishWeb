<?php

class user_Controller extends Controller{
	public function __construct(){
		
	   parent::__construct();
	}
	public function index(){
		
		$this->view->render("user/index");
		$this->model->test();
		if($this->model->data==0){
		
		}else{
			
			foreach($this->model->data as $row){
				echo $row["id_SP"];
			}
		}
	}
	public function login(){
		//$this->view->redirect("home/autoload");
		 if(isset($_POST['login'])){
		
		 	if($_POST['user']=="" or $_POST['password']==""){
		 		$this->view->msg="Hay dien user hay pass";
		 		$this->view->render("user/login");
		 	}else{
		 		if($_POST['user']=="p" or $_POST['password']=="c"){
		 			Session::set("login",true);
		 			Session::set("user",$_POST['user']);
		 			$this->view->redirect("home/autoload");
		 		}else{
					
		 			$this->view->redirect("user/login");
					
		 		}
		 	}
		 	$this->view->render("index/index");
		 }else{
		 	$this->view->render("user/login");
			
	 }
		
	}
	public function logout(){
		Session::set("login",false);
		Session::unset_session("user");
		$this->view->redirect();
	}
}
?>