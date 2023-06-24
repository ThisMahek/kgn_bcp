<?php
class Course_Model extends CI_Model
{
   
public function SaveCourseInDB($array)
      {
         return $this ->db->insert('course',$array);
      
      }
     

    
     public function  ShowAllCourse()
     {
        return $this ->db-> where('status!=',2)-> get('course')->result();
     }
     public function  ShowSingleCourse($id)
     {
        return $this ->db->where('id',$id)-> get('course')->row();
     }
     
   
     
      public function DeletecourseInDB($id)
     {
         $data['status']=2;
         $this->db->where('id', $id);
         return $this->db->update('course', $data);
      }


   public function UpdateCourseInDB()
     {
//print_r($_FILES);exit;
         $id=$this->input->post("id");
          $data["title"]=$this->input->post("title");
          $data["description"]=$this->input->post("description");

       //start file uplaoded code
       $file=$_FILES["course_img"];
       $MyFileName="";
     if(strlen($file['name'])>0)
     {
       $course_img=$file["name"];
       $config['upload_path'] = './assets/image/Course_Images/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      //  $config['max_size']     = '1024';  // Size in KB
      //  $config['max_width'] = '1000';
      //  $config['max_height'] = '1000';
       $config['file_name']=$course_img;
       $this->load->library("upload",$config);
       $filestatus=$this->upload->do_upload('course_img');
       if($filestatus==true) 
       {
          // $data = array('upload_data' => $this->upload->data());
          $MyFileName=$this->upload->data('file_name');
          $data['course_img']="/assets/image/Course_Images/".$MyFileName;
       }
       else
       {
          $error = array('error' => $this->upload->display_errors());
          $result=$error;
       }
      }
     //End: File upload code
         $this->db->where('id', $id);
        return $this->db->update('course',$data);
     }
     





}
?>