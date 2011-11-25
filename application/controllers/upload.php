<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload extends  MY_Controller {
	function index()
	{

		$this->load->view('upload');
	}
}
?>