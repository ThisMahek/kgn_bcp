<?php
$student_name=$stu_info[0]['master_name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sudent Pannel</title>
  
  <base href="<?php echo base_url();?>">
  <!-- plugins:css -->

  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
       <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
       <link rel="stylesheet" href="assets/vendors/dropify/dropify.min.css"> 
  <!-- 

   
  endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
 
  <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  
  <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
 <link rel="stylesheet" href="assets/vendors/lightgallery/css/lightgallery.css">
  <!-- endinject -->

  <link rel="shortcut icon" href="assets/images/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<!-- <body class="sidebar-icon-only"> -->
<style>
  .main-panel {
    transition: width 0.25s ease, margin 0.25s ease;
    width: 100%;
    min-height: calc(100vh - 70px);
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    flex-direction: column;
} 
.navbar .navbar-brand-wrapper .navbar-brand img {
    width: calc(237px - 130px);
    max-width: 100%;
    height: 60px;
    margin: auto;
    vertical-align: middle;
}
    
</style>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="student/dashboard"><img src="https://kgncomputeracademy.org/upload/logo/KGN%20COMPUTERS%20LOGO%202%20trans.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="student/dashboard"><img src="https://kgncomputeracademy.org/upload/logo/KGN%20COMPUTERS%20LOGO%202%20trans.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          
           
         
       <!----- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-layout-grid2"></span>
        </button>---->
        <marquee style="color: #1565C0;font-weight: 600;">Hi <?=$student_name;?>, Welcome To  KGN Computer Academy Student Portal. </marquee>
        
        <ul class="navbar-nav navbar-nav-right">
            
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <?php
                $std_img=$stu_info[0]['master_image'];
                if($std_img==""){
                    $stdimg = "upload/stu_profile/profile.png";
                }else{
                    $stdimg="upload/stu_profile/".$std_img;
                }
                
                ?>
                
              <img src="<?php echo $stdimg;?>" alt="profile"/>
              
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href='student/profile' class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Edit Profile 
              </a>
               <a href='student/profile/change_password' class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Change Password
              </a>
              <a href="master/logout" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <!-- <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="ti-more"></i>
            </a>
          </li> -->
        </ul>
        <!----<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-layout-grid2"></span>
        </button>----->
      </div>
    </nav>
    <!-- partial -->