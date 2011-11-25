<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Music extends MY_Controller {
        public function __construct() {
	parent::__construct();
	$this->load->model("records_model");
	//$this->load->helper("url");
	//$this->load->helper("form");
    }
        
	public function index()
	{
         //$viewdata = $this->DefaultViewData();
         $res['viewdata'] = $this->records_model->load_records();
        
	 $this->load->view('music', $res);
	}
	public function search()
	{

	} 
	public function favorites()
	{

	} 
}
?>