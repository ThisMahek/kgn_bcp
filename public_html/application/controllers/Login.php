<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
	{
	parent::__construct();
	$this->load->model("Admin_Model","AM");
	// if(!$this->session->userdata('admin_id'))
	// {
	// redirect(base_url()."Login/manage_login");
	// }    
	}
	
    public function manage_login()
	{
        $this->load->view('admin/manage_login');
	}

    public function ProcessLoginAdmin()
    {
       // print_r($_POST);exit;
     
    $result=$this->AM->CheckEmailAdmin($this->input->post("email"));
 
    if($result==1)
    { 
    $email=$this->input->post("email");
    $pass=md5($this->input->post("pass"));
  
    $res=$this->AM->CheckAdminID($email);
    if($res->password==$pass)
    {
    $data=array(
        'admin_id'=>$res->id,
        'email'=>$res->email,
        'role'=>$res->role,
        'admin_logged_in'=>true
    );
    
    $this->session->set_userdata($data);    
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong> Congratulations! You are login succesfull 
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    redirect(base_url()."Admin/index");
    }
    else
    { 
       
        $this->session->set_flashdata('error', ' 
    <div class="alert alert-warning alert-dismissible fade show">
       <strong>Success!</strong> Sorry! Invalid id password
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    redirect(base_url()."Login/manage_login");

    }

    }
    else
    {
        $this->session->set_flashdata('error', ' 
        <div class="alert alert-warning alert-dismissible fade show">
           <strong>Success!</strong> Sorry! Invalid id password
           <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        ');
           
        redirect(base_url()."Login/manage_login");

    }
    }
    public function LogoutAdmin()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('email');
    
        redirect(base_url()."Login/manage_login");
    }
  



	
}
