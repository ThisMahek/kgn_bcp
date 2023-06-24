<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>KGN Computer Academy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="<?php echo base_url()?>assets_admin/images/favicon.ico"> -->

        <!-- preloader css -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets_admin/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url()?>assets_admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url()?>assets_admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url()?>assets_admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <style>
        .padding_f{
    padding: 115px!important;
        }
        .form-control {
            padding: 13px 10px;
            box-shadow: 0 0 10px 0 #e1dede;
            border:0;
        }
        .start-btn {
            border: 0;
            background-image: linear-gradient(90deg, rgb(10 161 195) 0%, rgb(17 88 145) 100%);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
            font-weight: 600;
            border-radius:2px;
            padding: 10px 20px;
            font-size: 18px;
        }
        .bg-primary{
            background-image: linear-gradient(90deg, rgb(10 161 195) 0%, rgb(17 88 145) 100%);
        }
.bg-bubbles li {
border-radius:50%;
}
@media only screen and (max-width: 600px) {
    .padding_f{
        margin-top: 42%;
    padding:8px!important;
        }
        .my-auto {
    margin-top: 0!important;
        }
      
}
        </style>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-6 col-lg-6 col-md-6 col-12">
                        <div class="auth-full-page-content d-flex p-sm-5 padding_f">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="#" class="d-block auth-logo">
                                            <!-- <img src="<?php echo base_url()?>assets_admin/images/logo-sm.svg" alt="" height="28"> -->
                                             <span class="logo-txt">KGN Computer Academy</span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h3 class="mb-0">Login</h3>
                                            
                                            <?= $this->session->flashdata('success')?>
                                            <?= $this->session->flashdata('error')?>
                                            <!-- <p class="text-muted mt-2">Sign in to continue to 12 Digit.</p> -->
                                        </div>
                                        <form action="<?=base_url()?>Login/ProcessLoginAdmin" method="post"  >
                                            <div class="mb-3">
                                                <label class="form-label">User Id</label>
                                                <input type="text" class="form-control" id="username"  name="email"placeholder="Enter user id">
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <label class="form-label">Password</label>
                                                    </div>                  
                                                  
                                                </div>
                                                
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" name="pass">
                                                    <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-check">
                                                     
                                                      
                                                    </div>  
                                                </div>
                                                
                                            </div>
                                            <div class="mb-3">
                                                <!-- <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button> -->
                                                <button type="submit" name="update" id="btn2" class="btn btn-danger start-btn w-100" value="1">Login</button>

                                            </div>
                                       
                                            </form>
                                      
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                   
                    <!-- end col -->
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay bg-primary"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                           
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url()?>assets_admin/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets_admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url()?>assets_admin/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url()?>assets_admin/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url()?>assets_admin/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo base_url()?>assets_admin/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="<?php echo base_url()?>assets_admin/libs/pace-js/pace.min.js"></script>
        <!-- password addon init -->
        <script src="<?php echo base_url()?>assets_admin/js/pages/pass-addon.init.js"></script>

    </body>

</html>