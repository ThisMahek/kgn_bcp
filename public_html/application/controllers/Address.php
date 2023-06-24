<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address extends CI_Controller {

	public function manage_address()
	{
        $this->load->view('admin/manage_address');
	}
    public function add_address()
	{
        $this->load->view('admin/add_address');
	}
    public function edit_address()
	{
        $this->load->view('admin/edit_address');
	}
	
}
