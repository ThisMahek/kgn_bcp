<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_detail extends CI_Controller {

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



	public function index(){
	    
	      $db_name=$this->session->db_name;
	      $std_id=$this->session->std_id;
	      
	      $news_id=$this->session->news_id;
       
	    $cdn="SELECT * FROM `education_center_master` WHERE `master_id`='$std_id'";
	    $data['stu_info']=$this->bm->quert($db_name,$cdn);
	    
	    /*All news show*/
	     $all_news="SELECT * FROM education_center_news WHERE news_id='$news_id'";
	     $data['show_news']=$this->bm->quert($db_name,$all_news);
	    /*end here*/
		
		$this->load->view('student/lib/header',$data);
		//$this->load->view('student/lib/sidebar');
		$this->load->view('student/news_detail/index');
		$this->load->view('student/lib/footer');
		
	}
	
	

}?>
