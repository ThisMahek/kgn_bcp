<?php defined("BASEPATH") or exit("no direct script allowed");
class result_model extends CI_Model
{
	 
// 	  public function __construct()
//         {
//             $this->load->database();
            
//         }
  public function importData($data) {
            $this->db->truncate('education_center_result');
  
            $res = $this->db->insert_batch('education_center_result',$data);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
      
        }



	}