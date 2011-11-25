<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends MY_Controller {
	function index()
	{

		$this->load->view('register');
	}
        function register_validate()
	{

		//$this->load->view('home');
                header( 'Location: /skanumuca/home' );
            
	}
}
?>