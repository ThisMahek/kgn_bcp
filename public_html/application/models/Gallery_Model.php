<?php
class Gallery_Model extends CI_Model
{
   //gallery category
   public function SaveGalleryCategoryInDB($array)
      {
         return $this ->db->insert('gallery_category',$array);
      }
       
     public function  ShowAllGalleryCategory()
     {
        return $this ->db-> where('status!=',2)-> get('gallery_category')->result();
     }
public function SavegalleryInDB($array)
      {
         return $this ->db->insert('gallery',$array);
      
      }
      public function  ShowSingleGalleryCategory($id)
     {
        return $this ->db->where('id',$id)-> get('gallery_category')->row();
     }
   public function UpdateGalleryCategoryInDB()
     {
//print_r($_FILES);exit;
         $id=$this->input->post("id");
          $data["title"]=$this->input->post("title");
         
         
         $this->db->where('id', $id);
        return $this->db->update('gallery_category',$data);
     }
     public function DeleteGalleryCategoryInDB($id)
     {
         $data['status']=2;
         $this->db->where('id', $id);
         return $this->db->update('gallery_category', $data);
      }

    
     public function  ShowAllGallery()
     {
        return $this ->db-> where('status!=',2)-> get('gallery')->result();
     }
     public function  ShowSingleGallery($id)
     {
        return $this ->db->where('id',$id)-> get('gallery')->row();
     }
     
   
     
      public function DeleteGalleryInDB($id)
     {
         $data['status']=2;
         $this->db->where('id', $id);
         return $this->db->update('gallery', $data);
      }
 

   public function UpdateGalleryInDB()
     {
//print_r($_FILES);exit;
         $id=$this->input->post("id");
          $data["title"]=$this->input->post("title");
          $data["description"]=$this->input->post("description");
 $data['cat_id']=$this->input->post("cat_id");
       //start file uplaoded code
       $file=$_FILES["gallery_img"];
       $MyFileName="";
     if(strlen($file['name'])>0)
     {
       $gallery_img=$file["name"];
       $config['upload_path'] = './assets/image/Course_Images/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      //  $config['max_size']     = '1024';  // Size in KB
      //  $config['max_width'] = '1000';
      //  $config['max_height'] = '1000';
       $config['file_name']=$gallery_img;
       $this->load->library("upload",$config);
       $filestatus=$this->upload->do_upload('gallery_img');
       if($filestatus==true) 
       {
          // $data = array('upload_data' => $this->upload->data());
          $MyFileName=$this->upload->data('file_name');
          $data['gallery_img']="/assets/image/Course_Images/".$MyFileName;
       }
       else
       {
          $error = array('error' => $this->upload->display_errors());
          $result=$error;
       }
      }
     //End: File upload code
         $this->db->where('id', $id);
        return $this->db->update('gallery',$data);
     }
     





}
?>