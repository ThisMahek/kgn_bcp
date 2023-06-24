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
                                            <h4 class="card-title">Manage Gallery Category</h4>
                                            
                                             </div>
                                             <div class="col-md-6">
                                            <a href="<?php echo base_url()?>Gallery/add_gallery_category"><h4 class="card_title"><buttton type="text" class="btn btn-danger" style="float:right;">+Add</button></h4></a>
                                             </div>
                                        </div>
                                        <?= $this->session->flashdata('success')?>
                                            <?= $this->session->flashdata('error')?>
                                  
                                    </div>
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Title</th>
                                                <th>Staus</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php
                                            $i=1;
                                                foreach($result as $row)
                                                {
                                                ?>
                                            <tr>
                                            <td><?=$i++?></td>
                                                <td><?=$row->title?></td>
                                                <td><?php 
                                 if($row->status == 0)
                                   {
                                   ?> 
                        <button class="btn btn-danger btn-sm"> Inactive</button>
                              <?php
                                  }
                                 else
                                 {?>
                               <button class="btn btn-info btn-sm">Active</button>
                              <?php
                                 }
                                 ?>
                                 </td>
                                                <td> <a href="<?php echo base_url()?>Gallery/edit_gallery_category/<?=$row->id?>"><button type="text" class="btn btn-info text-white">Edit</button></a>
                                                <a href="<?php echo base_url()?>Gallery/DeleteGalleryCategory/<?=$row->id?>"   onclick="return confirm('Are you sure you want to delete this Gallery Category?');"> <button type="text" class="btn btn-danger">Delete</button></a></td>
                                            </tr>
                                            </tr>
                                            <?php }?>
                                         
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
