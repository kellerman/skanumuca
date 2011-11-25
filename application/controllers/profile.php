<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class profile extends MY_Controller {
	function index()
	{
                $data=array();
		$this->load->view('profile', $data);
	}
 	public function edit()
	{

	} 
 	public function uploads()
	{

	} 
 	public function stats()
	{

	} 
}
?>