<?php include('includes/header.php')?>
<?php include('includes/sidebar.php')?>
           
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?= $this->session->flashdata('success')?>
                                            <?= $this->session->flashdata('error')?>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-3">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body custom_body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Student</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="<?=$this->db->where('status',1)->get('users')->num_rows()?>"><?=$this->db->where('status',1)->get('users')->num_rows()?></span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-3">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body custom_body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Course</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="<?=$this->db->where('status',1)->get('course')->num_rows()?>"><?=$this->db->where('status',1)->get('course')->num_rows()?></span>
                                                </h4>
                                            </div>
                                        </div>
                                        <!-- <div class="text-nowrap">
                                            <span class="badge bg-soft-danger text-danger">30K</span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div> -->
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col-->
        
                            <div class="col-xl-3 col-md-3">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body custom_body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Student Result</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="4.32">00</span>
                                                </h4>
                                            </div>
                                        </div>
                                       
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-3">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body custom_body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Student Passed </span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="12.57">20</span>
                                                </h4>
                                            </div>
                                        </div>
                                   
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->    
                        </div><!-- end row-->

                       
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <?php include('includes/footer.php')?>
