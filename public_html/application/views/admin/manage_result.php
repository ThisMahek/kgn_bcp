<?php include('includes/header.php')?>
<?php include('includes/sidebar.php')?>
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <h4 class="card-title">Management Result</h4>
                                             </div>
                                             <div class="col-md-6">
                                            <!-- <a href="<?php echo base_url()?>Gallery/add_gallery"><h4 class="card_title"><buttton type="text" class="btn btn-danger" style="float:right;">+Add</button></h4></a> -->
                                             </div>
                                        </div>
                                      
                                  
                                    </div>
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>title</td>
                                                <th>Description</th>
                                                <td><img class="img-thumbnail rounded-circle avatar-xl" alt="200x200" src="<?php echo base_url()?>assets_admin/images/users/avatar-3.jpg" data-holder-rendered="true"></td>
                                                <td> <a href="<?php echo base_url()?>Slider/edit_slider"><button type="text" class="btn btn-info text-white">Edit</button></a>
                                                    <button type="text" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                         
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end cardaa -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include('includes/footer.php')?>
