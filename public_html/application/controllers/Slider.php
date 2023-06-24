<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
	public function __construct()
	{
	parent::__construct();
	$this->load->model("Slider_Model","SM");
	if(!$this->session->userdata('admin_id'))
	{
	redirect(base_url()."Login/manage_login");
	}    
	}
	public function manage_slider()
	{
		$data["result"]=$this->SM->ShowAllSlider();
		//print_r($data["result"]);exit;
        $this->load->view('admin/manage_slider',$data);
	}
    public function add_slider()
	{
        $this->load->view('admin/add_slider');
	}
	public function edit_slider($id)
	{
		$data["result"]=$this->SM->ShowSingleSlider($id);
        $this->load->view('admin/edit_slider',$data);
	}
	public function SaveSlider()
{
	//print_r($_FILES);exit;
$array['title']=$this->input->post("title");
//to start image validation
$file = $_FILES["slider_img"];
$MyFileName="";
if(strlen($file['name'])>0)
{
$image=$file["name"];
$config['upload_path'] = './assets/image/slider';
$config['allowed_types'] = 'gif|jpg|png|jpeg';
// $config['max_size']     = '1024';  // Size in KB
// $config['max_width'] = '2000';
// $config['max_height'] = '2000';
$config['file_name']=$image;
$this->load->library("upload",$config);
$filestatus=$this->upload->do_upload('slider_img');
if($filestatus==true) 
{
// $data = array('upload_data' => $this->upload->data());
$MyFileName=$this->upload->data('file_name');
$array['slider_img']="assets/image/slider/".$MyFileName;
}
else
{
$error = array('error' => $this->upload->display_errors());
$result=$error;
}
}
//End: File upload code
$array['status']=1;
$x=$this->SM->SaveSliderInDB($array);
if($x)
{
$this->session->set_flashdata('success', ' 
<div class="alert alert-success alert-dismissible fade show">
  <strong>Success!</strong> Slider Saved Successfully
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
else
{
$this->session->set_flashdata('error', ' 
<div class="alert alert-danger alert-dismissible fade show">
  <strong>Error!</strong> Unable to  Save Slider
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
redirect(base_url()."Slider/manage_slider");
}
	public function DeleteSlider($id)
{

$res=$this->SM->DeleteSliderInDB($id);
if($res)
{
$this->session->set_flashdata('success', ' 
<div class="alert alert-success alert-dismissible fade show">
   <strong>Success!</strong> Slider Delete successfully
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
else
{
$this->session->set_flashdata('error', ' 
<div class="alert alert-danger alert-dismissible fade show">
   <strong>Error!</strong> Unable to  Delete Slider
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
redirect(base_url()."Slider/manage_slider");
}
public function updateslider()
{  
if($this->input->post("update"))
{
$x=$this->SM->UpdateSliderInDB();
if($x)
$this->session->set_flashdata('success', ' 
<div class="alert alert-success alert-dismissible fade show">
   <strong>Success!</strong> Slider Updated successfully
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
else 
$this->session->set_flashdata('error', ' 
<div class="alert alert-danger alert-dismissible fade show">
  <strong>Error!</strong> Unable to  Update Slider
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');

}

redirect(base_url()."Slider/manage_slider");

}

public function  update_slider_status()
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
			  $x=  $this->db->where('id',$id)->update('slider',$data);
		
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
				 redirect(base_url()."Slider/manage_slider");
}

}
