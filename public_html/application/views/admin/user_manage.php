<?php include('includes/header.php')?>
<?php include('includes/sidebar.php')?>
            

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">User Management</h4>
                                  
                                    </div>
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Win/Lost</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Roban</td>
                                                <td>exam@gmail.com</td>
                                                <td>9999999999</td>
                                                <td>Won</td>
                                                <td><button type="text" class="btn btn-success">Active</button></td>
                                                <td><button type="text" class="btn btn-success">Update</button>
                                                    <button type="text" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                         
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                             
                            </div> 
                        </div> 
                    </div> 
                </div>
                <!-- End Page-content -->
</div>
                <?php include('includes/footer.php')?>
