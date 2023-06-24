<?php include('includes/header.php')?>
<?php include('includes/sidebar.php')?>
            

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">All Result</h4>
                                        <?= $this->session->flashdata('success')?>
                                            <?= $this->session->flashdata('error')?>
                                  
                                    </div>
                                    <div class="card-body">
        
                                        <table id="datatable" class="table-responsive table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Enrollment Id</th>
                                                <th>Result Id</th>
                                                <th>Candidate Name</th>
                                                <th>Father Name</th>
                                                <th>Course Name </th>
                                                <th>Registration No</th>
                                                <th>Registration date</th>
                                                <th>Center Name</th>
                                                <th>Center Code</th>
                                                <th>Center Location</th>
                                                <th> Center District</th>
                                                <th>Center State</th>
                                                <th>Status</th>
                                               
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
                                                <td><?=$row->result_enrollment_id?></td>
                                                <td><?=$row->result_id?></td> 
                                                <td><?=$row->result_candidate_name?></td>
                                                <td><?=$row->result_father_name?></td> 
                                                <td><?=$row->result_course_name?></td>
                                                <td><?=$row->result_registration_no?></td> 
                                                <td><?=$row->result_registration_date?></td>
                                                <td><?=$row->result_center_name?></td>
                                                <td><?=$row->result_center_code?></td>
                                                <td><?=$row->result_center_location?></td>
                                                <td><?=$row->result_center_district?></td>
                                                <td><?=$row->result_state?></td>
                                              
                                                <td><?php 
                                 if($row->status == 0)
                                   {
                                   ?> 
                              <a  onclick="return confirm('Are you sure you want to active?');" href='<?= base_url()?>CSV/update_result_status?id=<?=$row->id?>&status=<?=$row->status?>'><button class="btn btn-danger btn-sm"> Inactive</button></a>
                              <?php
                                  }
                                 else
                                 {?>
                               <a  onclick="return confirm('Are you sure you want to inactive?');" href='<?= base_url()?>CSV/update_result_status?id=<?=$row->id?>&status=<?=$row->status?>'><button class="btn btn-info btn-sm">Active</button></a>
                              <?php
                                 }
                                 ?>
                                 </td>
                                               
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
