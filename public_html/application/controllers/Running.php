<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Running extends CI_Controller {
  public function __construct()
	{
	parent::__construct();
	$this->load->model("Running_Model","RM");
	if(!$this->session->userdata('admin_id'))
	{
	redirect(base_url()."Login/manage_login");
	}    
	}
	public function manage_running()
	{
       $data["result"]=$this->RM->ShowAllRunning();
        $this->load->view('admin/manage_running',$data);
	}
    public function add_running()
	{
        $this->load->view('admin/add_running');
	}
	public function edit_running($id)
	{
    $data["result"]=$this->RM->ShowSingleRunning($id);
        $this->load->view('admin/edit_running',$data);
	}
	
	public function SaveRunning()
{
	// print_r($_FILES);exit;
	$array["title"]=$this->input->post("title");
	$array["description"]=$this->input->post("description");
$array['status']=1;
$x=$this->RM->SaveRunningInDB($array);
//echo $this->db->last_query();die();
if($x)
{
$this->session->set_flashdata('success', ' 
<div class="alert alert-success alert-dismissible fade show">
  <strong>Success!</strong> Running Saved Successfully
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
else
{
$this->session->set_flashdata('error', ' 
<div class="alert alert-danger alert-dismissible fade show">
  <strong>Error!</strong> Unable to  Save Running
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
redirect(base_url()."Running/manage_running");
}
	public function DeleteRunning($id)
{

$res=$this->RM->DeleteRunningInDB($id);
if($res)
{
$this->session->set_flashdata('success', ' 
<div class="alert alert-success alert-dismissible fade show">
   <strong>Success!</strong> Running Delete successfully
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
else
{
$this->session->set_flashdata('error', ' 
<div class="alert alert-danger alert-dismissible fade show">
   <strong>Error!</strong> Unable to  Delete Running
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
}
redirect(base_url()."Running/manage_running");
}
public function updateRunning()
{  
if($this->input->post("update"))
{
$x=$this->RM->UpdateRunningInDB();
if($x)
$this->session->set_flashdata('success', ' 
<div class="alert alert-success alert-dismissible fade show">
   <strong>Success!</strong> Running Updated successfully
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');
else 
$this->session->set_flashdata('error', ' 
<div class="alert alert-danger alert-dismissible fade show">
  <strong>Error!</strong> Unable to  Update Running
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
');

}

redirect(base_url()."Running/manage_running");

}
public function  update_running_status()
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
            $x=  $this->db->where('id',$id)->update('running',$data);
        
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
			 redirect(base_url()."Running/manage_running");

    }
	
}
