<?php include('includes/header.php')?>
<?php include('includes/sidebar.php')?>

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update User </h4>
                       
                    </div>
                    <div class="card-body p-4">
                    <form action="<?=base_url()?>Student/edit_student" method="post"  >
                    <input type="hidden" name="id" value="<?=$row->master_id?>">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">
                       
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-12 col-md-2 col-lg-2">Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags" name="name" value="<?=$row->master_name?>" required="">
                                      </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-12 col-md-2 col-lg-2">Email</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="email" class="form-control inputtags" name="email" value="<?=$row->master_email?>" required="">
                                      </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Mobile</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags" name="mobile" value="<?=$row->master_mobile?>" required="">
                                      </div>
                                </div>
                            
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Father Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags" name="father_name" value="<?=$row->master_fname?>" required="">
                                      </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Mother Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags" name="mother_name" value="<?=$row->master_mname?>" required="">
                                      </div>
                                </div>
                                <!--<div class="form-group row mb-4">-->
                                <!--    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Class/Study In</label>-->
                                <!--    <div class="col-sm-12 col-md-7">-->
                                <!--        <input type="text" class="form-control inputtags" name="class" value="<?=$row->master_class?>">-->
                                <!--      </div>-->
                                <!--</div>-->
                                <!--<div class="form-group row mb-4">-->
                                <!--    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Class 10th Rollno</label>-->
                                <!--    <div class="col-sm-12 col-md-7">-->
                                <!--        <input type="text" class="form-control inputtags" name="roll_n_10" value="<?=$row->master_roll_no?>" >-->
                                <!--      </div>-->
                                <!--</div>-->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Course</label>
                                    <div class="col-sm-12 col-md-7">
                                    <select name="course_id" class="form-control inputtags">

                                    <option value="">---Select Course----</option>
                                        <?php
                                        foreach ($courses as $course) 
                                        {

                                        ?>
                                    
                                       <option value="<?=$course->id?>" <?=($course->id==$row->course_id)?'selected':''?>><?=$course->title?></option>
                                     
                                        
                                        <?php }?>
                                        </select>
                                       
                                      </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Addresss</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags" name="address" value="<?=$row->master_address?>" required="">
                                      </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Aadhar No</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags" name="adhar_no" value="<?=$row->master_aadhar_no?>" required="">
                                      </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">State</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags" name="state" value="<?=$row->master_state?>" required="">
                                      </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">City</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags" name="city" value="<?=$row->master_city?>" required="">
                                      </div>
                                </div>
                          
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Pincode</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags" name="pin" value="<?=$row->master_pin_no?>" required="">
                                      </div>
                                </div>
                          
                                            
                                <button type="submit" name="update"class="btn btn-info start-btn w-20" id="btn2" value="1">Update</button>
                           
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
</form>
        <!-- end row -->
      

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

</div>
<!-- end main content-->
<?php include('includes/footer.php')?>
