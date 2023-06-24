<?php include('includes/header.php')?>
 <?php
$std_id=$this->session->user_id;
$student_id=$stu_info['master_id'];
$student_name=$stu_info['master_name'];
$student_email=$stu_info['master_email'];
$student_mobile=$stu_info['master_mobile'];
$student_fname=$stu_info['master_fname']; 
$student_mname=$stu_info['master_mname'];
$student_class=$stu_info['master_class'];
$student_graduate=$stu_info['master_graduate'];
$student_graduate_name=$stu_info['master_graduate_name'];
$student_image=$stu_info['master_image'];
$student_address=$stu_info['master_address'];
$student_course=$stu_info['master_class'];
$course_data=$this->db->where(['id'=>$student_course,'status'=>1])->get('course')->row();
$course_name=$course_data->title;
$image=$stu_info['userprofile_picture'];
?>

    <!-- page title area start -->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url()?>assets/image/page-title/page-title-2.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Profile</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url()?>Home/index">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <br/>
               <?= $this->session->flashdata('success')?>
           <?= $this->session->flashdata('error')?>
        
         <!-- page title area end -->
            <!-- course area start -->
            <section class="course__area pt-100 pb-120 grey-bg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                    <div class="card pb-4 shadow-lg">
                        <img src="<?php echo base_url()?><?=$image?>" class="profile_img">
                        <div class="row profile_N">
                            <div class="col-md-12"><span class="fw-bold">Name </span>: <?=$student_name ?></div>
                        </div>
                         <div class="row profile_N">
                            <div class="col-md-12"><span class="fw-bold">Email.Id </span>: <?=$student_email ?></div>
                        </div>
                         <div class="row profile_N">
                            <div class="col-md-12"><span class="fw-bold">Mobile</span> : <?=$student_mobile ?></div>
                        </div>
                         <div class="row profile_N">
                            <div class="col-md-12"><span class="fw-bold">Course </span>:<?=$course_name ?> </div>
                        </div>
                        <div class="row profile_N">
                            <div class="col-md-12 fw-bold"><a href="<?php echo base_url()?>Home/changepassword">Change Password</a></div>
                        </div>
                         <div class="row profile_N">
                            <div class="col-md-12 fw-bold"><a href="<?php echo base_url()?>Home/update_profile">Update Profile</a></div>
                        </div>
                    </div>
                  </div>
                  <div class="col-xxl-8 col-xl-8 col-lg-8 col-12">
                      <div class="card shadow-lg">
                    <div class="dash_right">
                        <div class="dash_top">
                            <a href="#">
                                <div class="col1 padding_d">
                                    <span><a href="https://wa.me/+918004273287" target="_blank"><h4 class="fw-bold text-white">Whatsapp</h4></a></span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="col1 color3 padding_d">
                                    <span><a href="<?=base_url()?>dashboard/pdfdetails/<?=$student_id?>" target="_blank"><h4 class="fw-bold text-white">Download PDF</h4></a></span>
                                </div>
                            </a>
                            <div class="col1 color4">
                                <a href="#" title="Test">
                                    <h2>  
                                        0
                                    </h2>
                                    <span><h4 class="fw-bold text-white">My Test</h4></span>
                                </a>
                            </div>
                            <div class="col1 color3">
                                <a href="#" title="Certificates">
                                    <h2 id="div_h2">0</h2>
                                    <span><h4 class="fw-bold text-white">My Course</h4></span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="dashboard">
                            <h3>Recently Studied</h3>
                            <p>
                                Data coming soon....
                                
                            </p>
                        </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                  </div>
               </div>
            
            </div>
         </section>
         <!-- course area end -->

         <!-- footer area start -->
         <?php include('includes/footer.php')?>

