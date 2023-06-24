<?php
class Admin_Model extends CI_Model
{
   

     public function  ShowAdminData()
     {
        return $this->db->where('id',1)-> get('admin')->row();
     }
     
   
     


   public function UpdateAdminInDB()
     {

$data["name"]=$this->input->post("name");
$data["email"]=$this->input->post("email");
$data["mobile"]=$this->input->post("mobile");
$data["designation"]=$this->input->post("designation");
$data["address"]=$this->input->post("address");
       //start file uplaoded code
       $file=$_FILES["image"];
       $MyFileName="";
     if(strlen($file['name'])>0)
     {
       $course_img=$file["name"];
       $config['upload_path'] = './assets/images/Course_Images/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      //  $config['max_size']     = '1024';  // Size in KB
      //  $config['max_width'] = '1000';
      //  $config['max_height'] = '1000';
       $config['file_name']=$course_img;
       $this->load->library("upload",$config);
       $filestatus=$this->upload->do_upload('image');
       if($filestatus==true) 
       {
          // $data = array('upload_data' => $this->upload->data());
          $MyFileName=$this->upload->data('file_name');
          $data['image']="/assets/images/Course_Images/".$MyFileName;
       }
       else
       {
          $error = array('error' => $this->upload->display_errors());
          $result=$error;
       }
      }
     //End: File upload code
         $this->db->where('id', 1);
        return $this->db->update('admin',$data);
     }
     


     public function CheckEmailAdmin($email)
     {
         return  $this->db->where('email',$email)->get('admin')->num_rows();
     }
     public function CheckAdminID($email)
     {
         $this->db->where('email',$email);
         return  $this->db->get('admin')->row();
     }
     public function change_password($new_password){
      $data = array
      (
         'password' => md5($new_password)
          );
      $this->db->where('id', $this->session->userdata('admin_id'));
      return $this->db->update('admin', $data);
   }
             public function admin_profile($id)
             {
            $q = $this->db->query("Select * from admin where id= '$id'");
            return $q->row();
            }
    

            
}
?>