<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct()
        {
           parent:: __construct();
           
          $this->load->model("project_model","pro");
		  $this->load->model("basic_model","bm");	

		   $std_id=$this->session->std_id;
           $db_name=$this->session->db_name;
            if($std_id==""){
                
                redirect('logout');
            }	
	
        }



	public function index()
	{
	     $std_id=$this->session->std_id;
         $db_name=$this->session->db_name;
        redirect('student/dashboard'); 
       
		
	}
		public function myplan($id,$post)
	{
	     $std_id=$this->session->std_id;
         $db_name=$this->session->db_name;
         
        $course_id=$this->bm->base64_url_decode($id);
        
        if($post=='plan'){}else{
           $vpost_id=$this->bm->base64_url_decode($post);

    $vpost_cdn="SELECT * FROM `education_center_view_post` WHERE `view_post_pid`='$vpost_id' AND `view_post_mc_id`='$course_id' AND `view_post_std_id`='$std_id'";
	$vpost_ar=$this->bm->quert($db_name,$vpost_cdn);
	$count_vpost_ar=count($vpost_ar);
	if($count_vpost_ar==0){
	    
	    $myarr=["view_post_pid"=>$vpost_id,"view_post_mc_id"=>$course_id,"view_post_std_id"=>$std_id,];
	    
	    $mytbl='view_post';
	    
	    $myins=$this->bm->insert($db_name,$mytbl,$myarr);
	    
	}else{}
	
            
        }
        
         
	    $cdn="SELECT * FROM `education_center_master` WHERE `master_id`='$std_id'";
	    $data['stu_info']=$this->bm->quert($db_name,$cdn);
	    
	    
	    $cdn_courses="SELECT * FROM `education_center_mcourses`";
	    $data['all_course']=$this->bm->quert($db_name,$cdn_courses);
	    
	         $cdn_courses_byId="SELECT * FROM `education_center_mcourses` WHERE `mcourses_id`='$course_id'";
	    $data['demo_course_arr']=$this->bm->quert($db_name,$cdn_courses_byId);
	    
	    
	    $cdn_plan_by_id="SELECT * FROM `education_center_plan` WHERE `plan_mc_id`='$course_id' AND `plan_stu_id`='$std_id'";
	         
	    $data_plan_arr=$this->bm->quert($db_name,$cdn_plan_by_id);
	    //print_r($data_plan_arr);exit;
	    $count_plan_arr=count($data_plan_arr);
	    if($count_plan_arr==0){   redirect('student/dashboard');  }
	    
		
		$this->load->view('student/lib/header',$data);
		//$this->load->view('student/lib/sidebar');
		$this->load->view('student/course/index');
		$this->load->view('student/lib/footer');
		
	}
	
	public function test(){
	   $this->load->view('student/course/youtube');
	    
	}
	
}