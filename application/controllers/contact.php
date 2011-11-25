<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends MY_Controller {
	function index()
	{

		$this->load->view('contact');
	}
}
?>