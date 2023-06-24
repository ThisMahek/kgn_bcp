<?php
class Testimonial_Model extends CI_Model
{
   
public function SaveTestimonialInDB($array)
      {
         return $this ->db->insert('testimonial',$array);
      }
    
     public function  ShowAllTestimonial()
     {
        return $this ->db-> where('status!=',2)-> get('testimonial')->result();
     }
     public function  ShowSingleTestimonial($id)
     {
        return $this ->db->where('id',$id)-> get('testimonial')->row();
     }
     
   
     
      public function DeleteTestimonialInDB($id)
     {
         $data['status']=2;
         $this->db->where('id', $id);
         return $this->db->update('testimonial', $data);
      }


   public function UpdateTestimonialInDB()
     {
//print_r($_FILES);exit;
         $id=$this->input->post("id");
          $data["name"]=$this->input->post("name");
          $data["email"]=$this->input->post("email");
          $data["mobile"]=$this->input->post("mobile");
          $data["designation"]=$this->input->post("designation");
             $data["description"]=$this->input->post("description");
          
       //start file uplaoded code
       $file=$_FILES["testimonial_img"];
       $MyFileName="";
     if(strlen($file['name'])>0)
     {
       $Testimonial_img=$file["name"];
       $config['upload_path'] = './assets/image/testimonial/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      //  $config['max_size']     = '1024';  // Size in KB
      //  $config['max_width'] = '1000';
      //  $config['max_height'] = '1000';
       $config['file_name']=$Testimonial_img;
       $this->load->library("upload",$config);
       $filestatus=$this->upload->do_upload('testimonial_img');
       if($filestatus==true) 
       {
          // $data = array('upload_data' => $this->upload->data());
          $MyFileName=$this->upload->data('file_name');
          $data['image']="/assets/image/testimonial/".$MyFileName;
       }
       else
       {
          $error = array('error' => $this->upload->display_errors());
          $result=$error;
       }
      }
     //End: File upload code
         $this->db->where('id', $id);
        return $this->db->update('testimonial',$data);
     }
     





}
?>