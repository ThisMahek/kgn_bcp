<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {
	public function __construct()
	{
	parent::__construct();
	$this->load->model("Testimonial_Model","TM");
	if(!$this->session->userdata('admin_id'))
	{
	redirect(base_url()."Login/manage_login");
	}    
	}
	public function manage_testimonial()
	{
		$data["result"]=$this->TM->ShowAllTestimonial();
        $this->load->view('admin/manage_testimonial',$data);
	}
    public function add_testimonial()
	{
        $this->load->view('admin/add_testimonial');
	}
	public function edit_testimonial($id)
	{
	$data["result"]=$this->TM->ShowSingleTestimonial($id);
        $this->load->view('admin/edit_testimonial',$data);
	}
	public function SaveTestimonial()
{
	// print_r($_FILES);exit;
	$array["name"]=$this->input->post("name");
	$array["email"]=$this->input->post("email");
	$array["mobile"]=$this->input->post("mobile");
	$array["designation"]=$this->input->post("designation");
		$array["description"]=$this->input->post("description");
 //start file uplaoded code
//to start image validation
$file = $_FILES["testimonial_img"];
$MyFileName="";
if(strlen($file['name'])>0)
{
$image=$file["name"];
$config['upload_path'] = './assets/image/testimonial';
$config['allowed_types'] = 'gif|jpg|png|jpeg';
// $config['max_size']     = '1024';  // Size in KB
// $config['max_width'] = '2000';
// $config['max_height'] = '2000';
$config['file_name']=$image;
$this->load->library("upload",$config);
$filestatus=$this->upload->do_upload('testimonial_img');
if($filestatus==true) 
{
// $data = array('upload_data' => $this->upload->data());
$MyFileName=$this->upload->data('file_name');
$array['image']="assets/image/testimonial/".$MyFileName;
}
else
{
$error = array('error' => $this->upload->display_errors());
$result=$error;
}
}
//End: File upload code
$array['status']=1;
$x=$this->TM->SaveTestimonialInDB($array);
//echo $this->db->last_query();die();
if($x)
{
$this->session->set_flashdata('success', ' 
<div class="alert alert-success alert-dismissible fade show">
  <strong>Success!</strong> Testimonial Saved Successfully
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
else
{
$this->session->set_flashdata('error', ' 
<div class="alert alert-danger alert-dismissible fade show">
  <strong>Error!</strong> Unable to  Save Testimonial
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
redirect(base_url()."Testimonial/manage_testimonial");
}
	public function DeleteTestimonial($id)
{

$res=$this->TM->DeleteTestimonialInDB($id);
if($res)
{
$this->session->set_flashdata('success', ' 
<div class="alert alert-success alert-dismissible fade show">
   <strong>Success!</strong> Testimonial Delete successfully
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
else
{
$this->session->set_flashdata('error', ' 
<div class="alert alert-danger alert-dismissible fade show">
   <strong>Error!</strong> Unable to  Delete Testimonial
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
redirect(base_url()."Testimonial/manage_Testimonial");
}
public function updateTestimonial()
{  
if($this->input->post("update"))
{
$x=$this->TM->UpdateTestimonialInDB();
if($x)
$this->session->set_flashdata('success', ' 
<div class="alert alert-success alert-dismissible fade show">
   <strong>Success!</strong> Testimonial Updated successfully
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
else 
$this->session->set_flashdata('error', ' 
<div class="alert alert-danger alert-dismissible fade show">
  <strong>Error!</strong> Unable to  Update Testimonial
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');

}

redirect(base_url()."Testimonial/manage_testimonial");

}
public function  update_testimonial_status()
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
            $x=  $this->db->where('id',$id)->update('testimonial',$data);
        
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
			 redirect(base_url()."Testimonial/manage_testimonial");
    }
	
}
