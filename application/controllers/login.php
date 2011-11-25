<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends MY_Controller {
	public function index()
	{
                if(!empty($_COOKIE['login']))$this->load->view('home');
		else $this->load->view('login');
		//
	}
        public function validate()
	{
		setcookie("login",md5($_POST['password']),time()+60*60*24*30,"/");
             
		header("Location: /skanumuca/home");
		//
	}
}
?>