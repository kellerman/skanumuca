<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MY_Controller {
	function index()
	{
		if(!empty($_COOKIE['login']))$this->load->view('home');
		else echo "Nav logins";
                
	}
}
?>