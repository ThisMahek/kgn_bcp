<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    // $this->load->model("PlusCom_model","PM");
    $this->load->model("Home_Model","HM");
    $this->load->model("project_model","pro");
    $this->load->model("basic_model","bm");	
    // if(!$this->session->userdata('user_id'))
    // {
    // redirect(base_url()."Home/index");
    //} 
	}


	public function index(){
	    
	    $db_name=$this->session->db_name;
	    $all_student="SELECT * FROM education_center_master WHERE master_role='1'";
	    $data['show_std']=$this->bm->quert($db_name,$all_student);
	    
	   // $all_viedos="SELECT * FROM education_center_post WHERE post_link !=''";
	   // $data['show_vdo']=$this->bm->quert($db_name,$all_viedos);
	    
	    $all_courses="SELECT * FROM course";
	    $data['show_course']=$this->bm->quert($db_name,$all_courses);
	    
	   // echo "<pre>";
	   // print_r($data['show_course']);exit;
		
		$this->load->view('profile',$data);
	
		
	}
		public function dashboard()
		{
		    $std_id=$this->session->user_id;
$data['student']=$this->db->where('master_id',$std_id)->get('education_center_master')->row();
$data['course']=$this->db->where('status',1)->get('course')->result();
// 	  print_r($data);exit;
		$this->load->view('profile',$data);
	    
		}
            public function add_profile()
            {
                if($this->session->userdata('user_id'))
             {

            //print_r($_POST);exit;
            $name=$_POST['name'];
            $fname=$_POST['fname'];
            $mname=$_POST['mname'];
            $class=$_POST['class'];
            $center=isset($_POST['cname'])?$_POST['cname']:"";
            $address=isset($_POST['address'])?$_POST['address']:"";
            // $dname=isset($_POST['dname'])?$_POST['dname']:"";
            $dname=$this->input->post('dname');
            
            $aadhar_no=$_POST['aadhar_no'];
            $state=$_POST['state'];
            $city=$_POST['city'];
            $pin_no=$_POST['pin_no'];
            $course_id=$_POST['course_id'];
            $std_id=$this->session->user_id;
                
                            //to start image validation
        $file = $_FILES["userprofile_picture"];
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
        $filestatus=$this->upload->do_upload('userprofile_picture');
        if($filestatus==true) 
        {
        // $data = array('upload_data' => $this->upload->data());
        $MyFileName=$this->upload->data('file_name');
        $update_data['userprofile_picture']="assets/image/Course_Images/".$MyFileName;
        }
        else
        {
        $error = array('error' => $this->upload->display_errors());
        $result=$error;
        }
        }
    // //End: File upload code
          
                $update_data["facilitation_center_name"]=$center;
                $update_data["student_type"]=$dname;
                $update_data["master_name"]=$name;
                $update_data["master_fname"]=$fname;
                $update_data["master_mname"]=$mname;
                $update_data["master_class"]=$class;
                // "master_image"=>$file_name,
                $update_data["master_address"]=$address;
                $update_data["master_roll_no"]=isset($_POST['roll_no'])?$_POST['roll_no']:"";
                $update_data["master_aadhar_no"]=$aadhar_no;
                $update_data["master_city"]=$city;
                $update_data["master_state"]=$state;
               $update_data["master_pin_no"]=$pin_no;
                $update_data["course_id"]=$course_id;
                $upp=$this->db->where('master_id',$std_id)->update('education_center_master',$update_data);
                // echo $this->db->last_query;die();
                 if($upp){ 
                   $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show"><strong>Success!</strong> Profile Details Added Successfully<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
                     redirect(base_url()."Home/dashboard");
                 }
              
           else{
               
              $this->session->set_flashdata('error', ' 
                    <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Sorry!</strong>Unabel to add profile details
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    ');
                 redirect(base_url()."master/dashboard");
           }
           }
          redirect(base_url()."Home/dashboard");
            }
		 public function update_user_profile()
    {
            $name=$this->input->post('name');
            $fname=$this->input->post('fname');
            $mname=$this->input->post('mname');
            $class=$this->input->post('class');
            $center=isset($_POST['cname'])?$_POST['cname']:"";
            $address=isset($_POST['address'])?$_POST['address']:"";
            $dname=$this->input->post('dname');
            $aadhar_no=$this->input->post('aadhar_no');
            // $state=$_POST['state'];
            // $city=$_POST['city'];
            $pin_no=$this->input->post('pin_no');
            $course_id=$this->input->post('course_id');
            $state=$this->input->post('state');
            $city=$this->input->post('city');
            $std_id=$this->session->user_id;
             //to start image validation
        $file = $_FILES["userprofile_picture"];
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
        $filestatus=$this->upload->do_upload('userprofile_picture');
        if($filestatus==true) 
        {
        // $data = array('upload_data' => $this->upload->data());
        $MyFileName=$this->upload->data('file_name');
        $update_data['userprofile_picture']="assets/image/Course_Images/".$MyFileName;
        }
        else
        {
        $error = array('error' => $this->upload->display_errors());
        $result=$error;
        }
        }
    // //End: File upload code
          
                    $update_data["facilitation_center_name"]=$center;
                    $update_data["student_type"]=$dname;
                    $update_data["master_name"]=$name;
                    $update_data["master_fname"]=$fname;
                    $update_data["master_mname"]=$mname;
                    $update_data["master_class"]=$class;
                    // "master_image"=>$file_name,
                    $update_data["master_address"]=$address;
                    $update_data["master_roll_no"]=isset($_POST['roll_no'])?$_POST['roll_no']:"";
                    $update_data["master_aadhar_no"]=$aadhar_no;
                    // "master_state"=>$state,
                    //"master_city"=>$city,
                    $update_data["master_pin_no"]=$pin_no;
                    $update_data["course_id"]=$course_id;
                    $update_data["master_city"]=$city;
                    $update_data["master_state"]=$state;
               
                $upp=$this->db->where('master_id',$std_id)->update('education_center_master',$update_data);
   
   
    
    if($upp)
    {
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
      <strong>Success!</strong>Profile Updated Successfully
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    else
    {
    $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Error!</strong> Unable to Update Profile
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
    }
    redirect(base_url()."Home/dashboard");
    }
            public function showcity(){
            
            $val=$this->input->post('val');
           $query = $this->db->query("SELECT `city_name` AS city FROM `education_center_city` WHERE `city_state`='$val' ");
            $st_arr=$query->result_array();
            $html="";
            $html.="<select class='form-control' name='city' id='exampleFormControlSelect2' required>
            <option value=''>Select City</option></option>";
            foreach($st_arr as $st_arr){ 
            $city=$st_arr['city'];
            $html.="<option value='$city'>$city</option>";
            }  
            
            $html.="</select>";
            
            echo $html;
            
            
            }
	
}
