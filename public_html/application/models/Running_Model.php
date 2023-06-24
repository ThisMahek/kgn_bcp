<?php
class Running_Model extends CI_Model
{
   
public function SaveRunningInDB($array)
      {
         return $this ->db->insert('running',$array);
      }
    
     public function  ShowAllRunning()
     {
        return $this ->db-> where('status!=',2)-> get('running')->result();
     }
     public function  ShowSingleRunning($id)
     {
        return $this ->db->where('id',$id)-> get('running')->row();
     }
     
   
     
      public function DeleteRunningInDB($id)
     {
         $data['status']=2;
         $this->db->where('id', $id);
         return $this->db->update('running', $data);
      }


   public function UpdateRunningInDB()
     {
//print_r($_FILES);exit;
         $id=$this->input->post("id");
          $data["title"]=$this->input->post("title");
          $data["description"]=$this->input->post("description");
         $this->db->where('id', $id);
        return $this->db->update('running',$data);
     }
     





}
?>