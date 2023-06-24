<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	$this->load->model("Gallery_Model","GM");
	if(!$this->session->userdata('admin_id'))
	{
	redirect(base_url()."Login/manage_login");
	}    
	}
	//gallery category
	public function manage_gallery_category()
	{

		$data["result"]=$this->GM->ShowAllGalleryCategory();
        $this->load->view('admin/manage_gallery_category',$data);
	}
    public function add_gallery_category()
	{
        $this->load->view('admin/add_gallery_category');
	}
		public function SaveGalleryCategory()
    {

    $array['title']=$this->input->post("title");
    $array['status']=1;
    $x=$this->GM->SaveGalleryCategoryInDB($array);
//echo $this->db->last_query();die();
    if($x)
    {
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
      <strong>Success!</strong> Gallery Category Saved Successfully
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    else
    {
    $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Error!</strong> Unable to  Save Gallery Category
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    redirect(base_url()."Gallery/manage_Gallery");
    }
      public function edit_gallery_category($id)
	{
		$data["result"]=$this->GM->ShowSingleGalleryCategory($id);
        $this->load->view('admin/edit_gallery_category',$data);
	}
	  public function updateGalleryCategory()
    {  
    if($this->input->post("update"))
    {
    $x=$this->GM->UpdateGalleryCategoryInDB();
    if($x)
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong> Gallery Category Updated successfully
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    else 
    $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Error!</strong> Unable to  Update Gallery Category
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    
    }
    
    redirect(base_url()."Gallery/manage_gallery_category");
    
    }
       public function DeleteGalleryCategory($id)
    {
    
    $res=$this->GM->DeleteGalleryCategoryInDB($id);
    if($res)
    {
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong> Gallery  Category Delete successfully
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    else
    {
    $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
       <strong>Error!</strong> Unable to  Delete Gallery Category
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    redirect(base_url()."Gallery/manage_gallery_category");
    }
	public function manage_gallery()
	{

		$data["result"]=$this->GM->ShowAllGallery();
        $this->load->view('admin/manage_gallery',$data);
	}
    public function add_gallery()
	{
	    $data['gallery_categorys']=$this->db->where('status',1)->get('gallery_category')->result();
        $this->load->view('admin/add_gallery',$data);
	}


    public function edit_gallery($id)
	{	   
	    $data['gallery_categorys']=$this->db->where('status',1)->get('gallery_category')->result();
		$data["result"]=$this->GM->ShowSingleGallery($id);
        $this->load->view('admin/edit_gallery',$data);
	}
	public function SaveGallery()
    {
        //print_r($_FILES);exit;
    $array['title']=$this->input->post("title");
    $array['description']=$this->input->post("description");
     $array['cat_id']=$this->input->post("cat_id");
    //to start image validation
    //to start image validation
    $file = $_FILES["gallery_img"];
    $MyFileName="";
    if(strlen($file['name'])>0)
    {
    $image=$file["name"];
    $config['upload_path'] = './assets/image/Course_Images';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    // $config['max_size']     = '1024';  // Size in KB
    // $config['max_width'] = '2000';
    // $config['max_height'] = '2000';
    $config['file_name']=$image;
    $this->load->library("upload",$config);
    $filestatus=$this->upload->do_upload('gallery_img');
    if($filestatus==true) 
    {
    // $data = array('upload_data' => $this->upload->data());
    $MyFileName=$this->upload->data('file_name');
    $array['gallery_img']="assets/image/Course_Images/".$MyFileName;
    }
    else
    {
    $error = array('error' => $this->upload->display_errors());
    $result=$error;
    }
    }
    //End: File upload code
    $array['status']=1;
    $x=$this->GM->SaveGalleryInDB($array);
//echo $this->db->last_query();die();
    if($x)
    {
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
      <strong>Success!</strong> Gallery Saved Successfully
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    else
    {
    $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Error!</strong> Unable to  Save Gallery
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    redirect(base_url()."Gallery/manage_Gallery");
    }





    public function DeleteGallery($id)
    {
    
    $res=$this->GM->DeleteGalleryInDB($id);
    if($res)
    {
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong> Gallery Delete successfully
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    else
    {
    $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
       <strong>Error!</strong> Unable to  Delete Gallery
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    redirect(base_url()."Gallery/manage_Gallery");
    }
    public function updateGallery()
    {  
    if($this->input->post("update"))
    {
    $x=$this->GM->UpdateGalleryInDB();
    if($x)
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong> Gallery Updated successfully
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    else 
    $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Error!</strong> Unable to  Update Gallery
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    
    }
    
    redirect(base_url()."Gallery/manage_Gallery");
    
    }
    
    public function  update_gallery_status()
    { 
       $tab =  'tbl_slider';
       $id = $_GET['id'];
       $sval = $_GET['status'];
    
     if($sval == 1)
       {
         $status = 0;
       }
     else
       {
         $status = 1;
       }
    
     $data = array(
             'status'=> $status
            );
            $x=  $this->db->where('id',$id)->update('gallery',$data);
        
           if($x)
             {
              $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong> Status Updated successfully
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
              
             }
         else
             {
              $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Error!</strong> Unable to  Update Status
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
             }
             redirect(base_url()."Gallery/manage_Gallery");
    }
	
}
