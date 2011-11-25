<?php
    class records_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();		
        }
    public function load_records(){
                $query = $this->db->from("records")->order_by("r_id")->limit(10); 
                $results=$this->db->get()->result(); 
                if (count($results) > 0){

                 return $results;
         }
        }    
    }
?>
