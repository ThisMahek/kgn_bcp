<?php
class Slider_Model extends CI_Model
{
   
public function SaveSliderInDB($array)
      {
         return $this ->db->insert('slider',$array);
      
      }
     

    
     public function  ShowAllSlider()
     {
        return $this ->db-> where('status!=',2)-> get('slider')->result();
     }
     public function  ShowSingleSlider($id)
     {
        return $this ->db->where('id',$id)-> get('slider')->row();
     }
     
   
     
      public function DeleteSliderInDB($id)
     {
         $data['status']=2;
         $this->db->where('id', $id);
         return $this->db->update('slider', $data);
      }


   public function UpdateSliderInDB()
     {
//print_r($_FILES);exit;
         $id=$this->input->post("id");
          $data["title"]=$this->input->post("title");
          

       //start file uplaoded code
       $file=$_FILES["slider_img"];
       $MyFileName="";
     if(strlen($file['name'])>0)
     {
       $slider_img=$file["name"];
       $config['upload_path'] = './assets/image/slider/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      //  $config['max_size']     = '1024';  // Size in KB
      //  $config['max_width'] = '1000';
      //  $config['max_height'] = '1000';
       $config['file_name']=$slider_img;
       $this->load->library("upload",$config);
       $filestatus=$this->upload->do_upload('slider_img');
       if($filestatus==true) 
       {
          // $data = array('upload_data' => $this->upload->data());
          $MyFileName=$this->upload->data('file_name');
          $data['slider_img']="/assets/image/slider/".$MyFileName;
       }
       else
       {
          $error = array('error' => $this->upload->display_errors());
          $result=$error;
       }
      }
     //End: File upload code
         $this->db->where('id', $id);
        return $this->db->update('slider',$data);
     }
     





}
?>