<?php
class CSV_Model extends CI_Model
{
   
//  public function importData($data) {
//             $this->db->truncate('education_center_result');
  
//             $res = $this->db->insert_batch('education_center_result',$data);
//             if($res){
//                 return TRUE;
//             }else{
//                 return FALSE;
//             }
      
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
?>