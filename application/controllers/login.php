<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends MY_Controller {
	public function index()
	{
		$this->load->view('login');
	}
        function login_validate()
	{	setcookie("login",md5($_POST['password']));
		header("Location: /skanumuca/home");
	}
}
?>