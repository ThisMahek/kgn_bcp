<?php
class Student_Model extends CI_Model
{
   
public function SaveStudentInDB($array)
      {
         return $this ->db->insert('users',$array);
      }
    
     public function  ShowAllStudent()
     {
        return $this->db->where('status!=',2)-> get('education_center_master')->result();
     }
     public function  ShowSingleStudent($id)
     {
        return $this->db->where('master_id',$id)-> get('education_center_master')->row();
     }
     public function  allcourse()
     {
        return $this->db->where('status',1)-> get('course')->result();
     }
   
     
      public function DeleteStudentInDB($id)
     {
         $data['status']=2;
         $this->db->where('master_id', $id);
         return $this->db->update('education_center_master', $data);
      }


   public function UpdateStudentInDB()
     {
//print_r($_FILES);exit;
         $id=$this->input->post("id");
          $data["master_name"]=$this->input->post("name");
          $data["master_email"]=$this->input->post("email");
          $data["master_mobile"]=$this->input->post("mobile");
          $data["master_fname"]=$this->input->post("father_name");
          $data["master_mname"]=$this->input->post("mother_name");
        //   $data["master_class"]=$this->input->post("class");
        //   $data["master_roll_no"]=$this->input->post("roll_n_10");
          $data["course_id"]=$this->input->post("course_id");
          $data["master_address"]=$this->input->post("address");
          $data["master_aadhar_no"]=$this->input->post("adhar_no");
          $data["master_state"]=$this->input->post("state");
          $data["master_city"]=$this->input->post("city");
          $data["master_pin_no"]=$this->input->post("pin");
         $this->db->where('master_id', $id);
        return $this->db->update('education_center_master',$data);
     }
     





}
?>