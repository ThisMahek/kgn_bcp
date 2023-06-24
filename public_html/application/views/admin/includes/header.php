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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="<?php echo base_url()?>assets_admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets_admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- plugin css -->
        <link href="<?php echo base_url()?>assets_admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

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
        table.dataTable>thead .sorting::before, table.dataTable>thead .sorting_asc::before{
            top: 2px;
        }
        table.dataTable>thead .sorting::after, table.dataTable>thead .sorting_asc::after{
            top: 2px; 
        }
        .dataTables_wrapper{
            overflow-y:scroll;
        }
        .avatar-xl {
    height: 3rem;
    width: 3rem;
}
             .start-btn {
    background-image: linear-gradient(90deg, rgb(10 161 195) 0%, rgb(17 88 145) 100%);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    font-weight: 600;
    border-radius:2px;
    padding: 10px 20px;
    font-size: 18px;
        }
        .card-title {
    font-size: 18.4px;
        }
         .header-item{
            color: #fbfbfb; 
         }
        .header-item:hover {
    color: #fbfbfb;
}
#page-topbar{
    background:linear-gradient(90deg, rgb(10 161 195) 0%, rgb(17 88 145) 100%);
}
.navbar-header{
    box-shadow:0 0 15px 2px #858484;
}
.navbar-brand-box {
    color:white;
    border:0;
    background:linear-gradient(90deg, rgb(10 161 195) 0%, rgb(17 88 145) 100%);
}
.custom_body{
    box-shadow: 0 0 10px 0 #e9d4d4;
}
.vertical-menu {
    box-shadow: 0 0 10px 0 #e9d4d4; 
}
.card{
    box-shadow: 0 0 10px 0 #e1dede;
}
.img-thumbnail{
    box-shadow: 0 0 10px 0 #e1dede;
    border:0;
}
.profile_head{
    line-height:3;
    font-weight:600;
}
#sidebar-menu ul li a:hover {
    color:rgb(17 88 145);
}
#sidebar-menu ul li a:hover i {
    color: rgb(17 88 145);
}
.mm-active>a {
    color: rgb(17 88 145)!important;
}
.mm-active>a i {
    color:rgb(17 88 145)!important;
}
.mm-active>i {
    color:rgb(17 88 145)!important;
}
.mm-active>i:hover{
    color: rgb(17 88 145)!important;
}

/*------------------------ Change password css ----------------------------*/
.padding_f{
    padding: 25px!important;
        }
        .form-control {
            padding: 13px 10px;
            box-shadow: 0 0 3px 0 #e1dede;
            border:0;
        }
        .start-btn {
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
.custom_drop{
    min-width: 11rem;
    padding: 14px 1px!important;
border:0;
}
.image-preview{
    width: 250px;
    height: 250px;
    border: 2px dashed #ddd;
    border-radius: 3px;
    position: relative;
    overflow: hidden;
    background-color: #ffffff;
    color: #ecf0f1;
}
.image-preview label {
    font-weight: 800;
    background-color: #f84d91;
}
.image-preview label{
    position: absolute;
    z-index: 5;
    opacity: 0.8;
    cursor: pointer;
    background-image:linear-gradient(90deg, rgb(10 161 195) 0%, rgb(17 88 145) 100%);
    width: 150px;
    height: 50px;
    font-size: 12px;
    line-height: 50px;
    text-transform: uppercase;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    text-align: center;
}
@media only screen and (max-width: 600px) {
   
     #datatable_wrapper{
            overflow-x:scroll;
        }
}

        </style>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="#" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="#" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="#" alt="" height="24"> <span class="logo-txt">KGN Academy</span>
                                </span>
                            </a>

                            <a href="#" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="@" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="#" alt="" height="24"> <span class="logo-txt">KGN Academy</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item text-white" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo base_url()?>assets_admin/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">Imran</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end custom_drop">
                                <!-- item-->
                                <a class="dropdown-item" href="<?php echo base_url()?>Profile/manage_profile"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url()?>Login/LogoutAdmin" onclick="return confirm('Are you sure you want to Logout?');"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
