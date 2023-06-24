<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
	parent::__construct();
	$this->load->model("Course_Model","CM");
	if(!$this->session->userdata('admin_id'))
	{
	redirect(base_url()."Login/manage_login");
	}    
	}
	public function index()
	{
        $this->load->view('admin/index');
	}
  	public function manage_enquiry()
	{
	    $data['enquiry_data']=$this->db->get('enquiry')->result();
        $this->load->view('admin/manage_enquiry',$data);
	}
	
	
}
