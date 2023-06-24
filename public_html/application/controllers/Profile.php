<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
        {
           parent:: __construct();
           
          $this->load->model("project_model","pro");
		  $this->load->model("basic_model","bm");
         $this->load->model('htmltopdf_model');
            $this->load->model('Admin_Model',"AM");
          $this->load->library('pdf');
         	   $std_id=$this->session->user_id;
        
            if($std_id==""){
                
                //redirect('logout');
            }	
	
        }

	public function pdfdetails(){
  if($this->uri->segment(3))
        {
            
            $customer_id = $this->uri->segment(3);
          //  print_r($customer_id);exit;
            $html_content = " <b style='color: red;   font-size: 50px; font-family: Serif; text-shadow: 5px 5px 10px black;'>K G N </b><br> <b style='font-size: 15px; float:left';>C O M P U T E R &nbsp; A C A D E M Y   
    </b>"." " ."<br><b style='font-size:10px'> Corporate Office:- 438/1A, 1st Floor, Behind Saint Jude’s School, Prem Nagar, Nagra Jhansi – 284003<br></b>
      <b style='font-size: 10px; float:left';>City Office:- Above PNB ATM, Kachari Chauraha Corner, Jhansi UP- 284001<br>
      </b>
      <br><b style='font-size: 10px; float:left';>Tel: +91-510-2310287, Cell:- +91-8004273287, +91-8707786340</b><br>
<b style='font-size: 10px; float:left';>Web Site: https://www.kgncomputeracademy.org, Email:- kgn.computer.academy@gmail.com</b>

                <br>Skill Training || 3rd Party Assessment || Entrepreneurship Development || Vocational Course<br>
                <br>";
            $html_content .= $this->htmltopdf_model->fetch_single_details($customer_id);
       
            $this->pdf->loadHtml($html_content);
            $this->pdf->render();
            $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
        }
}

 public function manage_profile()
	{
	 $admin_data['result']= $this->db->get('admin')->row();
        $this->load->view('admin/manage_profile',$admin_data);
	}
public function updateAdmin()
    {  
    if($this->input->post("update"))
    {
        //start file uplaoded code
       $file=$_FILES["image"];
       $MyFileName="";
     if(strlen($file['name'])>0)
     {
       $course_img=$file["name"];
       $config['upload_path'] = './assets/image/Course_Images/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      //  $config['max_size']     = '1024';  // Size in KB
      //  $config['max_width'] = '1000';
      //  $config['max_height'] = '1000';
       $config['file_name']=$course_img;
       $this->load->library("upload",$config);
       $filestatus=$this->upload->do_upload('image');
       if($filestatus==true) 
       {
          // $data = array('upload_data' => $this->upload->data());
          $MyFileName=$this->upload->data('file_name');
          $data['image']="/assets/image/Course_Images/".$MyFileName;
       }
       else
       {
          $error = array('error' => $this->upload->display_errors());
          $result=$error;
       }
      }
     //End: File upload code
 
            $data['name']=$this->input->post('name');
            $data['email']=$this->input->post('email');
            $data['mobile']=$this->input->post('mobile');
            $data['designation']=$this->input->post('designation');
            $data['address']=$this->input->post('address');
     
      $x= $this->db->where('id',1)->update('admin',$data);
    if($x)
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong>Profile Updated successfully
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    else 
    $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Error!</strong> Unable to  Update Profile
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    
    }
    
    redirect(base_url()."Profile/manage_profile");
    
    }
    	public function change_AdminPassword()
    {
    $user_id= $this->session->userdata('admin_id');
    $user = $this->AM->admin_profile($user_id);
  $current =$user->password;
    $password= md5($this->input->post('password'));
    if($password == $current)
    {
    $newpassword= $this->input->post('password1');
    if($this->AM->change_password($newpassword))
    {
         $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show"><strong>Success!</strong> Password Updated Successfully<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
       
         redirect(base_url()."Profile/manage_profile");
    }
}
    else
    {
        $this->session->set_flashdata('error', ' 
            <div class="alert alert-danger alert-dismissible fade show">
            <strong>Sorry!</strong>Current Password does not match please try again
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            ');
              redirect(base_url()."Profile/manage_profile");
    }
    
    
    
    }
}