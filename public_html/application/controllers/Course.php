<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {
    public function __construct()
	{
	parent::__construct();
	$this->load->model("Course_Model","CM");
	if(!$this->session->userdata('admin_id'))
	{
	redirect(base_url()."Login/manage_login");
	}    
	}
	
    public function manage_course()
	{
        $data["result"]=$this->CM->ShowAllCourse();
        $this->load->view('admin/manage_course',$data);
	}
    public function add_course()
	{
        $this->load->view('admin/add_course');
	}
    public function edit_course($id)
	{
        $data["result"]=$this->CM->ShowSingleCourse($id);
        $this->load->view('admin/edit_course',$data);
	}
	

    public function SaveCourse()
    {
        //print_r($_FILES);exit;
    $array['title']=$this->input->post("title");
    $array['description']=$this->input->post("description");
    
    //to start image validation
    $file = $_FILES["course_img"];
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
    $filestatus=$this->upload->do_upload('course_img');
    if($filestatus==true) 
    {
    // $data = array('upload_data' => $this->upload->data());
    $MyFileName=$this->upload->data('file_name');
    $array['course_img']="assets/image/Course_Images/".$MyFileName;
    }
    else
    {
    $error = array('error' => $this->upload->display_errors());
    $result=$error;
    }
    }
    //End: File upload code
    $array['status']=1;
    $x=$this->CM->SaveCourseInDB($array);
    if($x)
    {
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
      <strong>Success!</strong> Course Saved Successfully
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    else
    {
    $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Error!</strong> Unable to  Save Course
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    redirect(base_url()."Course/manage_course");
    }





    public function DeleteCourse($id)
    {
    
    $res=$this->CM->DeleteCourseInDB($id);
    if($res)
    {
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong> Course Delete successfully
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    else
    {
    $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
       <strong>Error!</strong> Unable to  Delete Course
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    redirect(base_url()."Course/manage_course");
    }
    public function updatecourse()
    {  
    if($this->input->post("update"))
    {
    $x=$this->CM->UpdateCourseInDB();
    if($x)
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong> Course Updated successfully
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    else 
    $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Error!</strong> Unable to  Update Course
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    
    }
    
    redirect(base_url()."Course/manage_course");
    
    }
    

    public function  update_course_status()
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
            $x=  $this->db->where('id',$id)->update('course',$data);
        
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
             redirect(base_url()."Course/manage_course");
    }
    public function upload_csv()
    {
        
        $this->load->view('admin/upload_csv');
    }

}
