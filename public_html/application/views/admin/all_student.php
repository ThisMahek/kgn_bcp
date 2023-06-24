<?php include('includes/header.php')?>
<?php include('includes/sidebar.php')?>
            

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">All Student</h4>
                                        <?= $this->session->flashdata('success')?>
                                            <?= $this->session->flashdata('error')?>
                                  
                                    </div>
                                    <div class="card-body">
        
                                        <table id="datatable" class="table-responsive table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile No</th>
                                                <th>Father Name</th>
                                                <th>Mother Name </th>
                                                <th>Class/Study In</th>
                                                <th>Class 10 Roll No</th>
                                                <th>Course</th>
                                                <th>Address</th>
                                                <th>Aadhar No</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>PIN</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php
                                            $i=1;
                                                foreach($result as $row)
                                                {
                                                   $course_name= $this->db->where('id',$row->course_id)->get('course')->row();
                                                ?>
                                            <tr>
                                            <td><?=$i++?></td>
                                                <td><?=$row->master_name?></td>
                                                <td><?=$row->master_email?></td> 
                                                <td><?=$row->master_mobile?></td>
                                                <td><?=$row->master_fname?></td> 
                                                <td><?=$row->master_mname?></td>
                                                <td><?=$row->master_class?></td> 
                                                <td><?=$row->master_roll_no?></td>
                                                <td><?=isset($course_name->title)?$course_name->title:""?></td>
                                                <td><?=$row->master_address?></td>
                                                <td><?=$row->master_aadhar_no?></td>
                                                <td><?=$row->master_state?></td>
                                                <td><?=$row->master_city?></td>
                                                <td><?=$row->master_pin_no?></td>
                                                <td><?php 
                                 if($row->status == 0)
                                   {
                                   ?> 
                              <a  onclick="return confirm('Are you sure you want to active?');" href='<?= base_url()?>Student/update_user_status?id=<?=$row->master_id?>&status=<?=$row->status?>'><button class="btn btn-danger btn-sm"> Inactive</button></a>
                              <?php
                                  }
                                 else
                                 {?>
                               <a  onclick="return confirm('Are you sure you want to inactive?');" href='<?= base_url()?>Student/update_user_status?id=<?=$row->master_id?>&status=<?=$row->status?>'><button class="btn btn-info btn-sm">Active</button></a>
                              <?php
                                 }
                                 ?>
                                 </td>
                                                <td> <a href="<?php echo base_url()?>Student/update_user/<?=$row->master_id?>"><button type="text" class="btn btn-info text-white">Edit</button></a>
                                                <a href="<?php echo base_url()?>Student/DeleteUser/<?=$row->master_id?>"   onclick="return confirm('Are you sure you want to delete this Student?');"> <button type="text" class="btn btn-danger">Delete</button></a></td>
                                            </tr>
                                            </tr>
                                            <?php }?>
                                         
                                         
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
