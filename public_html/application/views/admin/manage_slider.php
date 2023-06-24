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
                                            <h4 class="card-title">Manage Slider</h4>
                                          
                                             </div>
                                             <div class="col-md-6">
                                            <a href="<?php echo base_url()?>Slider/add_slider"><h4 class="card_title"><buttton type="text" class="btn btn-danger" style="float:right;">+Add</button></h4></a>
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
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                               
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
                                                <td><img class="img-thumbnail rounded-circle avatar-xl" alt="200x200" src="<?php echo base_url()?><?=$row->slider_img?>" data-holder-rendered="true"></td>
                                                <td>
                                  <?php 
                                 if($row->status == 0)
                                   {
                                   ?> 
                              <a  onclick="return confirm('Are you sure you want to active?');" href='<?= base_url()?>Slider/update_slider_status?id=<?=$row->id?>&status=<?=$row->status?>'><button class="btn btn-danger btn-sm"> Inactive</button></a>
                              <?php
                                  }
                                 else
                                 {?>
                               <a  onclick="return confirm('Are you sure you want to inactive?');" href='<?= base_url()?>Slider/update_slider_status?id=<?=$row->id?>&status=<?=$row->status?>'><button class="btn btn-info btn-sm">Active</button></a>
                              <?php
                                 }
                                 ?>
                              </td>
                                                <td> <a href="<?php echo base_url()?>Slider/edit_slider/<?=$row->id?>"><button type="text" class="btn btn-info text-white">Edit</button></a>
                                                <a href="<?php echo base_url()?>Slider/DeleteSlider/<?=$row->id?>"   onclick="return confirm('Are you sure you want to delete this Slider?');"> <button type="text" class="btn btn-danger">Delete</button></a></td>
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
