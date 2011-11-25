<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class FAQ extends MY_Controller {
	function index()
	{
		$this->load->view('faq');
	}
}
?>
