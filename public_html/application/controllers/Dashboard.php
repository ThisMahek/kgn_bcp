<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
        {
           parent:: __construct();
           
          $this->load->model("project_model","pro");
		  $this->load->model("basic_model","bm");
          $this->load->model('htmltopdf_model');
          $this->load->library('pdf');
                   
		   $std_id=$this->session->user_id;
        $db_name='kgnacademy_db';;

            if($std_id==""){
                
                redirect('logout');
            }	
	
        }



	public function index()
	{
	   // echo 'hi';die();
	     $std_id=$this->session->user_id;
        //  $db_name='kgnacademy_db';
         
	    //$cdn="SELECT * FROM `education_center_master` WHERE `master_id`='$std_id'";
	    $data['stu_info']=$this->db->where('master_id',$std_id)->get('education_center_master')->row_array();

     
	    
	    //$cdn_courses="SELECT * FROM `education_center_mcourses`";
	    $data['all_course']=$this->db->get('education_center_mcourses')->result_array();
	    
	    /*All news show*/
	   //  $all_news="SELECT * FROM education_center_news ORDER BY news_date DESC, news_id DESC";
	   //  $data['show_news']=$this->bm->quert($db_name,$all_news);
	    /*end here*/
		
		$this->load->view('student/lib/header',$data);
		//$this->load->view('student/lib/sidebar');
		$this->load->view('student/dashboard/index');
		$this->load->view('student/lib/footer');
		
	}
	
	
	public function news_sess($id){
	    
	   // $db_name=$this->session->db_name;
	    $news_id_sess=$this->bm->base64_url_decode($id);
	    $this->session->set_userdata('news_id',$news_id_sess);
	    
	   redirect('student/news_detail');
	    
	}
	
	
	
// 	public function plan(){
// 	      $std_id=$this->session->user_id;
//         //   $db_name='kgnacademy_db';

// 	$plan_name=$_POST['product_name'];
// 	$plan_mc_id=$_POST['product_id'];
// 	$plan_date=date('Y-m-d');
// 	$plan_txn_id=$_POST['razorpay_payment_id'];
// 	$plan_amt=$_POST['product_pprice'];
// 	$plan_tax=$_POST['product_ptax'];
// 	$plan_tot_amt=$_POST['totalAmount'];
	        
//          $arr=[
//          	"plan_name"=>$plan_name,
//          	"plan_mc_id"=>$plan_mc_id,
//          	"plan_date"=>$plan_date,	
//          	"plan_txn_id"=>$plan_txn_id,
//          	"plan_amt"=>$plan_amt,
//          	"plan_tax"=>$plan_tax,
//          	"plan_tot_amt"=>$plan_tot_amt,
//          	"plan_stu_id"=>$std_id,
//          	];
//          	$tbl='plan';
         	
         	
//          $ins=$this->bm->insert($db_name,$tbl,$arr);
//          if($ins){
//              //redirect('student/dashboard');
//              echo $ins;
//          }
         	
// 	}
// 	public function showcity(){
// 	    $db_name='kgnacademy_db';
// 	    $val=$_POST['val'];
// 	     $cdbn="SELECT `city_name` AS city FROM `education_center_city` WHERE `city_state`='$val'";
//  $st_arr=$this->bm->quert($db_name,$cdbn);
//  $html="";
//  $html.="<select class='form-control' name='city' id='exampleFormControlSelect2' required>
//         <option value=''>Select City</option></option>";
//     foreach($st_arr as $st_arr){ 
//         $city=$st_arr['city'];
//     $html.="<option value='$city'>$city</option>";
//     }  
        
//     $html.="</select>";
    
//     echo $html;
 
 
// 	}


    public function details()
    {  
        // $std_id=$this->session->std_id;
        //$db_name=$this->session->db_name;


        if($this->uri->segment(3))
        {
            $customer_id = $this->uri->segment(3);
            $data['customer_details'] = $this->htmltopdf_model->fetch_single_details($customer_id);
            print_r($data['customer_details']);exit;
            $this->load->view('student/dashboard/profile', $data);
        }
    }

    public function pdfdetails()
    {
        if($this->uri->segment(3))
        {
            $customer_id = $this->uri->segment(3);
            $html_content = " <b style='color: red;  font-size: 80px; font-family: Serif; text-shadow: 5px 5px 10px black;'   >K G N </b> <b style='font-size: 30px;'>C O M P U T E R &nbsp; A C A D E M Y   
    </b>"." " ." Corporate Office:- 438/1A, 1st Floor, Behind Saint Jude’s School, Prem Nagar, Nagra Jhansi – 284003<br>
                 City Office:- Above PNB ATM, Kachari Chauraha Corner, Jhansi UP- 284001<br>
                 Tel: +91-510-2310287, Cell:- +91-8004273287, +91-8707786340<br>
                 Web Site: https://www.kgncomputeracademy.org, Email:- kgn.computer.academy@gmail.com<br>
                Skill Training || 3rd Party Assessment || Entrepreneurship Development || Vocational Course";
           $html_content .= $this->htmltopdf_model->fetch_single_details($customer_id);
        
            $this->pdf->loadHtml($html_content);
            $this->pdf->render();
            $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
        }
    }


}