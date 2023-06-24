<?php include('includes/header.php')?>
<?php include('includes/sidebar.php')?>
            

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">All Enquiry</h4>
                                        
                                  
                                    </div>
                                    <div class="card-body">
        
                                        <table id="datatable" class="table-responsive table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php
                                            $i=1;
                                                foreach($enquiry_data as $row)
                                                {
                                                   
                                                ?>
                                            <tr>
                                            <td><?=$i++?></td>
                                                <td><?=$row->name?></td>
                                                <td><?=$row->email?></td> 
                                                <td><?=$row->subject?></td>
                                                <td><button type="submit" class="btn btn-info start-btn w-20" data-bs-toggle="modal" data-bs-target="#message">Message</button>
                                                </td> 
                                          
                                                <div class="modal" id="message" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-modal="true" role="dialog">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content modal_content">
                                                      <div class="modal-header">
                                                        <h4 class="modal-title" id="staticBackdropLabel">Message</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">     
                                                      <?=$row->message?>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
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
