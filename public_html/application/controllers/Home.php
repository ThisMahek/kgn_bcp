<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        // }
	}

	//---------------user signup---------------------

	
	public function index()
	{
	   
		$data["course"]=$this->HM->ShowAllCourse();
		$data["testimonial"]=$this->HM->ShowAllTestimonial();
		$this->load->view('index',$data);
	}
	public function signin()
	{
		$this->load->view('signin');
	}
	public function signup()
	{
	   
		$this->load->view('signup');
	}
	public function course()
	{	$data["course"]=$this->HM->ShowAllCourse();
		$this->load->view('course',$data);
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function about()
	{
		$this->load->view('about');
   }
        public function result()
        {
        $enrollment=$this->input->post('enrollment');
        $x=$this->db->where('result_enrollment_id',$enrollment)->get('education_center_result')->row();
        $get_result['data']=$x;
        $this->load->view('result', $get_result);
        
        }
	public function gallery()
	{
	   $data['gallery_category']= $this->db->where('status!=',2)->get('gallery_category')->result();
	   $data['gallery']= $this->db->where('status!=',2)->get('gallery')->result();
	//  print_r(   $data['gallery']);exit;
		$this->load->view('gallery',$data);
	}

	public function testimonial()
	{
		$this->load->view('testimonial');
	}
	public function profile()
	{
		$this->load->view('profile');
	}

	public function change_password()
	{
		$this->load->view('change_password');
	}
	public function savecontact()
	{
	     $name=$this->input->post('name');
	      $email=$this->input->post('email');
	       $subject=$this->input->post('subject');
	        $message=$this->input->post('message');
	       $array=array(
	           'name'=>$name,
	           'email'=>$email,
	           'subject'=>$subject,
	           'message'=>$message,
	           );
	           $x=$this->db->insert('enquiry',$array);
	              if($x)
             {
              $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong> Enquiry saved successfully
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
              
             }
         else
             {
              $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Error!</strong> Unable to save Enquiry 
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
             }
             redirect(base_url()."Home/contact");
	        
	}
	
	public function register(){
	    	$db_name="default";
	    	
	    	$name=$_POST['name'];
	    	$email=$_POST['email'];
	    	$phone=$_POST['phone'];
	    	$pass=$_POST['pass'];
	    	
	    	$cdn_email="SELECT * FROM `education_center_master` WHERE `master_email`='$email'";
	    	$ch_email_ar=$this->bm->quert($db_name,$cdn_email);
	    	$ch_email=count($ch_email_ar);
	    	
            
	    	$cdn_phone="SELECT COUNT(*) as conta FROM `education_center_master` WHERE `master_mobile`='$phone'";
	    	$ch_phone_ar=$this->bm->quert($db_name,$cdn_phone);
	    	$ch_phone=$ch_phone_ar[0]['conta'];
	    	
	    	/*if($ch_phone!=0){
	    	    echo"pe";
	    	    
	    	}else */
			if($ch_email != 0 ){
	    	    echo "ee"; 
	    	    
	    	}else{
	    	    $date=date('Y-m-d');
	    	    $arr=[
	    	        "master_name"=>$name, 
	    	        "master_email"=>$email, 
	    	        "master_password"=>$pass, 
	    	        "master_mobile"=>$phone, 
	    	        "master_role"=>'1', 
	    	        "master_register_date"=>$date,
	    	        
	    	        ];
	    	      $tbl='master';
	    	      $ins=$this->bm->insert($db_name,$tbl,$arr); 
	    	      if($ins){ 
	    	          $uurl='http://login.gravityloft.com/api/sendhttp.php';//http://login.digitalindiasms.com/api/sendhttp.php
	    	          $uauthKey='14540AtPh0p2xPj5df33f4f';
	    	          $usenderId='KGNCAJ';
	    	          $mn=$phone;
	    	          $umessage='Thank you for registration with us,
	    	          Your Username is : '.$email.',
	    	          Password : '.$pass.',
	    	          and  login url : https://kgncomputeracademy.org/home/signin 
	    	          Regard:-
	    	          KGN Computer Acadamy
	    	          ';
	    	         $send_sms=$this->pro->sendsms_all($uurl,$uauthKey,$usenderId,$mn,$umessage); 
	    	          echo 0;
	    	          
	    	          
	    	      }
	    	    
	    	}
	    }
	    
	    
		 public function login()
    {
    
    $result=$this->pro->CheckEmailAdmin($this->input->post("email"));
  
    if($result==1)
    { 
    $email=$this->input->post("email");
    $pass=$this->input->post("password");
  
    $res=$this->pro->CheckAdminID($email);
    // print_r($res);exit;
    if($res->master_password==$pass)
    {
    $data=array(
        'user_id'=>$res->master_id ,
        'email'=>$res->master_password,
       
        // 'admin_logged_in'=>true
    );
    
    $this->session->set_userdata($data); 
if($res->master_fname=="" && $res->	master_mname=="" &&  $res->	master_state=="" && $res->master_city=="" && $res->	master_pin_no=="" && $res->master_aadhar_no=="" )
{
     $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible ">
       <strong>Please!</strong>Complete your profile!
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
        
    redirect(base_url()."master/dashboard");
}
else
{
    
    $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Congratulations!</strong> You are login succesfully
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
        
    redirect(base_url()."Home/dashboard");
    
}
    }
    else
    { 
         $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Sorry!</strong> Invalid id password!
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
        
  redirect(base_url()."Home/signin");
    }

    }
    else
    {
       $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Sorry!</strong> Invalid id password!
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
       
   redirect(base_url()."Home/signin");
    }
    
    }
    	public function dashboard()
	{
        $std_id=$this->session->user_id;
        $data['stu_info']=$this->db->where('master_id',$std_id)->get('education_center_master')->row_array();
        $data['course']=$this->db->where('status',1)->get('course')->result();
		$this->load->view('dashboard',$data);
	}
	 	public function changepassword()
	{
		$this->load->view('changepassword');
	}
	
	
	public function change_UserPassword()
    {
    $user_id= $this->session->userdata('user_id');
    $user = $this->HM->user_profile($user_id);
  $current = $user->master_password;
    $password= $this->input->post('password');
    if($password == $current)
    {
    $newpassword= $this->input->post('password1');
    if($this->HM->change_password($newpassword))
    {
         $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show"><strong>Success!</strong> Password Updated Successfully<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
       
         redirect(base_url()."Home/dashboard");
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
              redirect(base_url()."Home/changepassword");
    }
    
    
    
    }
        public function change_user_password4()
        {
        $user_id= $this->session->userdata('user_id');
    
        $admin = $this->HM->user_profile($user_id);
        //   print_r($admin);exit;
        $current = $admin->master_password;
        $password= $this->input->post('password');
        if($password == $current){
        $newpassword= $this->input->post('password1');
        if($this->HM->change_password($newpassword))
        {
        $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show"><strong>Success!</strong> Password Updated Successfully<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
        redirect(base_url()."Home/dashboard");
        }                    
        
        else
        {
            $this->session->set_flashdata('error', ' 
            <div class="alert alert-danger alert-dismissible fade show">
            <strong>Sorry!</strong>Current Password does not match please try again
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            ');
             redirect(base_url()."Home/changepassword");
        }
        redirect(base_url()."Home/dashboard");
        }
}
 public function LogoutUser()
  {
      $this->session->unset_userdata('user_id');
      $this->session->unset_userdata('email');
  
      redirect(base_url()."Home/index");
  }
    public function update_profile()
    {
    $std_id=$this->session->user_id;
    $data['student']=$this->db->where('master_id',$std_id)->get('education_center_master')->row();
    $data['course']=$this->db->where('status',1)->get('course')->result();
    // 	  print_r($data);exit;
    $this->load->view('update_profile',$data);
    
    }
}
