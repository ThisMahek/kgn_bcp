  <?php
$std_id=$this->session->user_id;
$student_name=$stu_info[0]['master_name'];
$student_type=$stu_info[0]['student_type'];

$student_email=$stu_info[0]['master_email'];
$student_mobile=$stu_info[0]['master_mobile'];

$student_fname=$stu_info[0]['master_fname']; 
$student_mname=$stu_info[0]['master_mname'];
$student_class=$stu_info[0]['master_class'];

$student_image=$stu_info[0]['master_image'];
$student_address=$stu_info[0]['master_address'];

$student_roll_no=$stu_info[0]['master_roll_no'];
$student_aadhar_no=$stu_info[0]['master_aadhar_no'];
$student_state=$stu_info[0]['master_state'];
$student_city=$stu_info[0]['master_city'];
$student_pin_no=$stu_info[0]['master_pin_no'];

  ?>  



<style>
.dropify-wrapper {
    display: block;
    position: relative;
    cursor: pointer;
    overflow: hidden;
    width: 100%;
    max-width: 100%;
    height: 150px;
    padding: 5px 10px;
    font-size: 14px;
    line-height: 22px;
    color: #777;
    background-color: #FFF;
    background-image: none;
    text-align: center;
    border: 2px solid #E5E5E5;
    -webkit-transition: border-color .15s linear;
    transition: border-color .15s linear;
}

.card .card-title {
    color: #E91E63;
    margin-bottom: 1.2rem;
    text-transform: capitalize;
    font-size: 17px;
    font-weight: 700;
}
</style>
 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
                 

    <div class="row" style="margin-top: 50px;">
    <div class="col-md-10 grid-margin stretch-card" id="add_view" style="display:block;">
        <div class="card">
            <div class="card-body"> 
              <div class="container box">
    <br/>
    <div align="right" >
    <b style="color: red; font-size: 80px; font-family: Serif; text-shadow: 5px 5px 10px black;"   >K G N </b> <b style="font-size: 30px;">C O M P U T E R &nbsp; A C A D E M Y   
    </b><br>
    Corporate Office:- 438/1A, 1st Floor, Behind Saint Jude’s School, Prem Nagar, Nagra Jhansi – 284003<br>
        City Office:- Above PNB ATM, Kachari Chauraha Corner, Jhansi UP- 284001<br>
                                                Tel: +91-510-2310287, Cell:- +91-8004273287, +91-8707786340<br>
                       Web Site: https://www.kgncomputeracademy.org, Email:- kgn.computer.academy@gmail.com<br>
                    Skill Training || 3rd Party Assessment || Entrepreneurship Development || Vocational Course
  <br>
</div>
  <div>
             
                <h4 class="" style="font-family: cursive;font-size: 25px;color:#4CAF50;">Please Complete Your Profile</h4><br>
                <form method="post" action="student/Profile/update_profile" enctype="multipart/form-data">

            

                <div class="row"> 
                <div class="form-group col-md-6">
                        <label>Student Type</label>
                        <select   class="form-control clan1" placeholder="Student Type" name="Type" value=" "  required="">
                        
                           <option value="Direct" > Direct Type</option>
                           <option id="fc" value="Facilitation center" > Facilation center</option>    
                                         </select>


<script>
   
 $('.clan1').on('change', function() {
 
  var val=this.value;

if(val=='Direct'){
      $('#fcnm').val('');  
    $('#fcnm').hide();  
  }else{
      $('#fcnm').val('');  
    $('#fcnm').show();    
  }
});

</script>                    


<div>
                       <div class=" form-group col-md-6" id="set">
                      <br>
      <input type="text" id="fcnm" name="fcname" class="form-control" 
                        placeholder="Enter Facilation center name" value="" style="display: none;">
               

                       </div>
                        </div>

                  </div>


                       

          <div class="form-group col-md-6" align="center">
                       <h3 style=" color: red">Profile Image</h3>
                                        <span  id='file_pri'>
                                         <img src="upload/stu_profile/<?=$student_image;?>" height="100" width="60"><br>
                                         <br>
                                     <button class="btn btn-danger" type="button" id='sfiu'>Remove</button>
                                             
                                       </span>
                                       
                                       <span style='display:none;' id='fshow'>
                                            <input type="file" name="pro_img" class="dropify" > 
                                       </span>

                       
<script>
    $("#sfiu").click(function(){
    $('#file_pri').hide();
    $('#fshow').show();
    });
</script>                                       
                                        
                       
                 
                      
                    </div>





                        <div class="form-group col-md-6">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?=$student_name;?>" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="email" value="<?=$student_email;?>" disabled >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Number</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile No" name="mobile" value="<?=$student_mobile;?>" required="" >
                    </div>



                    <div class="form-group col-md-6">
                        <label>Father Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="fname" value="<?=$student_fname;?>" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Mother Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="mname" value="<?=$student_mname;?>" required="">
                    </div>

                           <div class="form-group col-md-3">
                        <div class="form-group">
                    <label for="exampleFormControlSelect2">Class / Study In</label>
                    <select class="form-control clan" name='class' id="exampleFormControlSelect2" required="">
                          <option value=''>Select Class / Study In</option>
                    <option value='below10' <?php if($student_class=='below10'){ echo"selected";}?>>Below 10th</option>
                    <option value='passed10'  <?php if($student_class=='passed10'){ echo"selected";}?> >10th Passed</option>
                      <option value='ten2' <?php if($student_class=='ten2'){ echo"selected";}?> >10+2/10+ITI
                      </option>
                      <option value='graduate' <?php if($student_class=='graduate'){ echo"selected";}?>>Graduated/Diploma</option>
                      </select>
<script>
   $('.clan').on('change', function() {
  var val=this.value;
  if(val=='below10'){
      $('#rnn').val('null');
      
      $('#hso').hide(); 
      $('#rnn').hide();  
  }else{
       $('#rnn').val('');
      
       $('#hso').show(); 
       $('#rnn').show();    
  }
});
</script>                    
                  </div>
                       
                
                    </div>
                 

  <div class="form-group col-md-3">
                        <label id='hso'>Class 10 Roll No.</label>
                        <input type="text" class="form-control" id='rnn'  name="roll_no" value="
                        <?php 
                        if($student_roll_no=='null'){ }
                        else{ echo $student_roll_no;}?>" 
                        required="" 
                        <?php if($student_roll_no=='null'){ echo "style='display:none;'"; }else{}?> >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Address</label>
                        <input type="text" class="form-control"  name="Address" value="<?=$student_address;?>" required="">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label>Aadhar No.</label>
                        <input type="text" class="form-control"  name="aadhar_no" value="<?=@$student_aadhar_no;?>" required="" >
                    </div>

<?php
$db_name=$this->session->db_name;
 $cdbn="SELECT DISTINCT(`city_state`) AS state FROM `education_center_city`";
 $st_arr=$this->bm->quert($db_name,$cdbn);
?>                   
                    <div class="form-group col-md-3">
                       <label for="exampleFormControlSelect2">State</label>
                       <span id='st_error'></span>
                    <select class="form-control stat" name='state' id="exampleFormControlSelect2" required="">
                          <option value=''>Select State</option>
                       <?php
                       foreach($st_arr as $stt){
                           $sate=$stt['state'];
                       ?>   
                      <option value='<?=$sate;?>' <?php if($sate==$student_state){echo'selected';}?> ><?=$sate;?></option>
                      <?php
                       }
                      ?>
                    </select>
<script>
   $('.stat').on('change', function() {
  var val=this.value;
  
  if(val==''){
      $('#st_error').html('Required').show();  
    
  }else{
    $.ajax({
      type : "POST",
      url  : "student/dashboard/showcity",
      data : {val:val},
      success: function(data){
          
         $('#cit').html(data).show(); 
      }
    }); 
     
  }
});
</script>                    
 
                    </div>
                    <div class="form-group col-md-3">
                           <label for="exampleFormControlSelect2">City</label>
                           <div id='cit'>
                    <select class="form-control" name='city' id="exampleFormControlSelect2" required="">
                          <option value='<?=$student_city;?>'><?=$student_city;?></option>
                      
                      
                    </select>
                    </div>
                      
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label>PIN</label>
                        <input type="text" class="form-control"  name="pin_no" value="<?=@$student_pin_no;?>" required="" >
                    </div>
                    
                     <div class="form-group col-md-3" align="center">
                      <br>
                      <br>
                      <a href='student/dashboard'><button  type="button"  class="btn btn-secondary" >Back</button></a>
                     </div>
                      <div class="form-group col-md-3" align="center">
                        <br>
                        <br>
                      <button class="btn btn-success" align="right" type="submit" >submit</button>   
                     </div>



                          
                    

<div class="form-group col-md-6" align="right">
                        <?php
    if(isset($customer_data))
    {
    ?>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        
      <?php
      foreach($customer_data as $row)
      {
        echo '
        
          
        <a href="student/profile/pdfdetails/'.$row['master_id'].'">View in PDF</a>
        
        ';

      }
      ?>
      </table>
    </div>
    <?php
    }
    if(isset($customer_details))
    {
      echo $customer_details;
    }
    ?>
                        </div>

                     </div> 
                </form>
                
            </div>                
        </div>
    </div>
    </div>        
         
           
          <!--
          <div class="row">
                <div class="col-12 col-xl-5 mb-4 mb-xl-0">
                  <h4 class="font-weight-bold">Hi, Welcomeback!</h4>
                  <h4 class="font-weight-normal mb-0">JustDo Dashboard,</h4>
                </div>
                <div class="col-12 col-xl-7">
                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <div class="border-right pr-4 mb-3 mb-xl-0">
                      <p class="text-muted">Balance</p>
                      <h4 class="mb-0 font-weight-bold">$40079.60 M</h4>
                    </div>
                    <div class="border-right pr-4 mb-3 mb-xl-0">
                      <p class="text-muted">Today’s profit</p>
                      <h4 class="mb-0 font-weight-bold">$175.00 M</h4>
                    </div>
                    <div class="border-right pr-4 mb-3 mb-xl-0">
                      <p class="text-muted">Purchases</p>
                      <h4 class="mb-0 font-weight-bold">4006</h4>
                    </div>
                    <div class="pr-3 mb-3 mb-xl-0">
                      <p class="text-muted">Downloads</p>
                      <h4 class="mb-0 font-weight-bold">4006</h4>
                    </div>
                    <div class="mb-3 mb-xl-0">
                      <button class="btn btn-warning rounded-0 text-white">Downloads</button>
                    </div>
                  </div>
                </div>
              </div>
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card bg-primary border-0 position-relative">
                <div class="card-body">
                  <p class="card-title text-white">Performance Overview</p>
                  <div id="performanceOverview" class="carousel slide performance-overview-carousel position-static pt-2" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                              <div class="icon icon-a text-white mr-3">
                                <i class="ti-cup icon-lg ml-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="font-weight-light mr-2 mb-1">Revenue</h3>
                                  <h3 class="mb-0">34040</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">+34040</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down mr-2"></i>
                                    <h5 class="mb-0">0.036%</h5>
                                  </div>  
                                </div>
                                <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                              <div class="icon icon-b text-white mr-3">
                                <i class="ti-bar-chart icon-lg ml-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="font-weight-light mr-2 mb-1">Sales</h3>
                                  <h3 class="mb-0">$9672471</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">-7.34567</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down mr-2"></i>
                                    <h5 class="mb-0">2.036%</h5>
                                  </div>  
                                </div>
                                <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                              <div class="icon icon-c text-white mr-3">
                                <i class="ti-shopping-cart-full icon-lg ml-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="font-weight-light mr-2 mb-1">Purchases</h3>
                                  <h3 class="mb-0">6358</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">+9082</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down mr-2"></i>
                                    <h5 class="mb-0">35.54%</h5>
                                  </div>  
                                </div>
                                <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                              <div class="icon icon-a text-white mr-3">
                                <i class="ti-cup icon-lg ml-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="font-weight-light mr-2 mb-1">Revenue</h3>
                                  <h3 class="mb-0">34040</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">+34040</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down mr-2"></i>
                                    <h5 class="mb-0">0.036%</h5>
                                  </div>  
                                </div>
                                <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                              <div class="icon icon-b text-white mr-3">
                                <i class="ti-bar-chart icon-lg ml-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="font-weight-light mr-2 mb-1">Sales</h3>
                                  <h3 class="mb-0">$9672471</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">-7.34567</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down mr-2"></i>
                                    <h5 class="mb-0">2.036%</h5>
                                  </div>  
                                </div>
                                <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                              <div class="icon icon-c text-white mr-3">
                                <i class="ti-shopping-cart-full icon-lg ml-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="font-weight-light mr-2 mb-1">Purchases</h3>
                                  <h3 class="mb-0">6358</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">+9082</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down mr-2"></i>
                                    <h5 class="mb-0">35.54%</h5>
                                  </div>  
                                </div>
                                <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                              <div class="icon icon-a text-white mr-3">
                                <i class="ti-cup icon-lg ml-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="font-weight-light mr-2 mb-1">Revenue</h3>
                                  <h3 class="mb-0">34040</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">+34040</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down mr-2"></i>
                                    <h5 class="mb-0">0.036%</h5>
                                  </div>  
                                </div>
                                <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                              <div class="icon icon-b text-white mr-3">
                                <i class="ti-bar-chart icon-lg ml-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="font-weight-light mr-2 mb-1">Sales</h3>
                                  <h3 class="mb-0">$9672471</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">-7.34567</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down mr-2"></i>
                                    <h5 class="mb-0">2.036%</h5>
                                  </div>  
                                </div>
                                <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 item">
                            <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                              <div class="icon icon-c text-white mr-3">
                                <i class="ti-shopping-cart-full icon-lg ml-3"></i>
                              </div>
                              <div class="content text-white">
                                <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                  <h3 class="font-weight-light mr-2 mb-1">Purchases</h3>
                                  <h3 class="mb-0">6358</h3>
                                </div>
                                <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                  <h5 class="mb-0">+9082</h5>
                                  <div class="d-flex align-items-center">
                                    <i class="ti-angle-down mr-2"></i>
                                    <h5 class="mb-0">35.54%</h5>
                                  </div>  
                                </div>
                                <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#performanceOverview" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#performanceOverview" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  <p class="card-title">Detailed Reports</p>
                  <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                            <div class="ml-xl-4">
                              <h1>$34040</h1>
                              <h3 class="font-weight-light mb-xl-4">North America</h3>
                              <p class="text-muted mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                            </div>  
                            </div>
                          <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="table-responsive mb-3 mb-md-0">
                                  <table class="table table-borderless report-table">
                                    <tr>
                                      <td class="text-muted">Illinois</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">713</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Washington</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">583</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Mississippi</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">924</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">California</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">664</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Maryland</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">560</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Alaska</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">793</h5></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                <canvas id="north-america-chart"></canvas>
                                <div id="north-america-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                            <div class="ml-xl-4">
                              <h1>$61321</h1>
                              <h3 class="font-weight-light mb-xl-4">South America</h3>
                              <p class="text-muted mb-2 mb-xl-0">It is the period time a user is actively engaged with your website, page or app, etc. The total number of sessions within the date range. </p>
                            </div>
                          </div>
                          <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="table-responsive mb-3 mb-md-0">
                                  <table class="table table-borderless report-table">
                                    <tr>
                                      <td class="text-muted">Brazil</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">613</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Argentina</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">483</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Peru</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">824</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Chile</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">564</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Colombia</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">460</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Uruguay</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">693</h5></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                <canvas id="south-america-chart"></canvas>
                                <div id="south-america-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Order and Downloads</p>
                  <p class="text-muted font-weight-light">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Order value</p>
                      <h3>12.3k</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Orders</p>
                      <h3>14k</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Users</p>
                      <h3>71.56%</h3>
                    </div>
                    <div class="mt-3">
                      <p class="text-muted">Downloads</p>
                      <h3>34040</h3>
                    </div> 
                  </div>
                  <canvas id="order-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Sales Report</p>
                  <p class="text-muted font-weight-light">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
                <div class="card border-right-0 border-left-0 border-bottom-0">
                  <div class="d-flex justify-content-center justify-content-md-end">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-lg btn-outline-light dropdown-toggle rounded-0 border-top-0 border-bottom-0" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Today
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div>
                    </div>
                    <button class="btn btn-lg btn-outline-light text-primary rounded-0 border-0 d-none d-md-block" type="button"> View all </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Top Products</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Date</th>
                          <th>Status</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td>Search Engine Marketing</td>
                          <td class="font-weight-bold">$362</td>
                          <td>21 Sep 2018</td>
                          <td class="font-weight-medium text-success">Completed</td>
                        </tr>
                        <tr>
                          <td>Search Engine Optimization</td>
                          <td class="font-weight-bold">$116</td>
                          <td>13 Jun 2018</td>
                          <td class="font-weight-medium text-success">Completed</td>
                        </tr>
                        <tr>
                          <td>Display Advertising</td>
                          <td class="font-weight-bold">$551</td>
                          <td>28 Sep 2018</td>
                          <td class="font-weight-medium text-warning">Pending</td>
                        </tr>
                        <tr>
                          <td>Pay Per Click Advertising</td>
                          <td class="font-weight-bold">$523</td>
                          <td>30 Jun 2018</td>
                          <td class="font-weight-medium text-warning">Pending</td>
                        </tr>
                        <tr>
                          <td>E-Mail Marketing</td>
                          <td class="font-weight-bold">$781</td>
                          <td>01 Nov 2018</td>
                          <td class="font-weight-medium text-danger">Cancelled</td>
                        </tr>
                        <tr>
                          <td>Referral Marketing</td>
                          <td class="font-weight-bold">$283</td>
                          <td>20 Mar 2018</td>
                          <td class="font-weight-medium text-warning">Pending</td>
                        </tr>
                        <tr>
                          <td>Social media marketing</td>
                          <td class="font-weight-bold">$897</td>
                          <td>26 Oct 2018</td>
                          <td class="font-weight-medium text-success">Completed</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">To Do Lists</h4>
									<div class="list-wrapper pt-2">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Meeting with Urban Team
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Duplicate a project for new customer
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Project meeting with CEO
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Follow up of team zilla
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Level up for Antony
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
										</ul>
                  </div>
                  <div class="add-items d-flex mb-0 mt-2">
										<input type="text" class="form-control todo-list-input"  placeholder="Add new task">
										<button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="ti-location-arrow"></i></button>
									</div>
								</div>
							</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Projects</p>
                  <div class="table-responsive">
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th class="pl-0 border-bottom">Places</th>
                          <th class="border-bottom">Orders</th>
                          <th class="border-bottom">Users</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-muted pl-0">Kentucky</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">65</span>(2.15%)</p></td>
                          <td class="text-muted">65</td>
                        </tr>
                        <tr>
                          <td class="text-muted pl-0">Ohio</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">54</span>(3.25%)</p></td>
                          <td class="text-muted">51</td>
                        </tr>
                        <tr>
                          <td class="text-muted pl-0">Nevada</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">22</span>(2.22%)</p></td>
                          <td class="text-muted">32</td>
                        </tr>
                        <tr>
                          <td class="text-muted pl-0">North Carolina</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">46</span>(3.27%)</p></td>
                          <td class="text-muted">15</td>
                        </tr>
                        <tr>
                          <td class="text-muted pl-0">Montana</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">17</span>(1.25%)</p></td>
                          <td class="text-muted">25</td>
                        </tr>
                        <tr>
                          <td class="text-muted pl-0">Nevada</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">52</span>(3.11%)</p></td>
                          <td class="text-muted">71</td>
                        </tr>
                        <tr>
                          <td class="text-muted pl-0 pb-0">Louisiana</td>
                          <td class="pb-0"><p class="mb-0"><span class="font-weight-bold mr-2">25</span>(1.32%)</p></td>
                          <td class="text-muted pb-0">14</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card">
              <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Charts</p>
                      <div class="charts-data">
                        <div class="mt-3">
                          <p class="text-muted mb-0">Orders</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="progress progress-md flex-grow-1 mr-4">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mb-0">5k</p>
                          </div>
                        </div>
                        <div class="mt-3">
                          <p class="text-muted mb-0">Users</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="progress progress-md flex-grow-1 mr-4">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mb-0">3k</p>
                          </div>
                        </div>
                        <div class="mt-3">
                          <p class="text-muted mb-0">Downloads</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="progress progress-md flex-grow-1 mr-4">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mb-0">992</p>
                          </div>
                        </div>
                        <div class="mt-3">
                          <p class="text-muted mb-0">Visitors</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="progress progress-md flex-grow-1 mr-4">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mb-0">687</p>
                          </div>
                        </div>
                      </div>  
                    </div>
                  </div>
                </div>
                <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
                  <div class="card data-icon-card-primary">
                    <div class="card-body">
                      <p class="card-title text-white">Number of Meetings</p>                      
                      <div class="row">
                        <div class="col-8 text-white">
                          <h3>3404</h3>
                          <p class="text-white font-weight-light mb-0">The total number of sessions within the date range. It is the period time</p>
                        </div>
                        <div class="col-4 background-icon">
                          <i class="ti-calendar"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Notifications</p>
                  <ul class="icon-data-list">
                    <li>
                      <p class="text-primary mb-1">Isabella Becker</p>
                      <p class="text-muted">Sales dashboard have been created</p>
                      <small class="text-muted">9:30 am</small>
                    </li>
                    <li>
                      <p class="text-primary mb-1">Adam Warren</p>
                      <p class="text-muted">You have done a great job #TW11109872</p>
                      <small class="text-muted">10:30 am</small>
                    </li>
                    <li>
                      <p class="text-primary mb-1">Leonard Thornton</p>
                      <p class="text-muted">Sales dashboard have been created</p>
                      <small class="text-muted">11:30 am</small>
                    </li>
                    <li>
                      <p class="text-primary mb-1">George Morrison</p>
                      <p class="text-muted">Sales dashboard have been created</p>
                      <small class="text-muted">8:50 am</small>
                    </li>
                    <li>
                      <p class="text-primary mb-1">Ryan Cortez</p>
                      <p class="text-muted">Herbs are fun and easy to grow.</p>
                      <small class="text-muted">9:00 am</small>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <!-- content-wrapper ends -->
        