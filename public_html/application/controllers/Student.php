<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	$this->load->model("Student_Model","SM");
	if(!$this->session->userdata('admin_id'))
	{
	redirect(base_url()."Login/manage_login");
	}    
	}
	public function all_student()
	{
		$data["result"]=$this->SM->ShowAllStudent();
		
        $this->load->view('admin/all_student',$data);
	}
	public function update_user($id)
	{
		$data["row"]=$this->SM->ShowSingleStudent($id);
		$data["courses"]=$this->SM->allcourse();
		
        $this->load->view('admin/update_user',$data);
	}
  
	public function edit_student()
{  
if($this->input->post("update"))
{
$x=$this->SM->UpdateStudentInDB();
if($x)
$this->session->set_flashdata('success', ' 
<div class="alert alert-success alert-dismissible fade show">
   <strong>Success!</strong> Student Updated successfully
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
else 
$this->session->set_flashdata('error', ' 
<div class="alert alert-danger alert-dismissible fade show">
  <strong>Error!</strong> Unable to  Update Student
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');

}

redirect(base_url()."Student/all_student");

}
public function DeleteUser($id)
{

$res=$this->SM->DeleteStudentInDB($id);
if($res)
{
$this->session->set_flashdata('success', ' 
<div class="alert alert-success alert-dismissible fade show">
   <strong>Success!</strong> User Delete successfully
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
else
{
$this->session->set_flashdata('error', ' 
<div class="alert alert-danger alert-dismissible fade show">
   <strong>Error!</strong> Unable to  Delete User
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
redirect(base_url()."Student/all_student");
}
public function  update_user_status()
{ 
   $tab =  'education_center_master';
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
		$x=  $this->db->where('master_id',$id)->update('education_center_master',$data);
	
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
		 redirect(base_url()."Student/all_student");

}
}
