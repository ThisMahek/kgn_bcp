
<?php
$std_id=$this->session->user_id;
$student_id=$stu_info['master_id'];
$student_name=$stu_info['master_name'];
$student_email=$stu_info['master_email'];
$student_mobile=$stu_info['master_mobile'];
$student_fname=$stu_info['master_fname']; 
$student_mname=$stu_info['master_mname'];
$student_class=$stu_info['master_class'];
$student_graduate=$stu_info['master_graduate'];
$student_graduate_name=$stu_info['master_graduate_name'];
$student_image=$stu_info['master_image'];
$student_address=$stu_info['master_address'];
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
         
            
    <?php if($student_fname=='' && $student_address==''){ ?>


    <div class="row" style="margin-top: 40px;">
    <div class="col-md-10 grid-margin stretch-card" id="add_view" style="display:block;">
        <div class="card">
            <div class="card-body"> 
          
          <div class="row" >
              <div class="form-group col-md-14">
                <h4 class="display-3" style="color:#4CAF50;">Please Complete Your Profile</h4><br>
                
          </div>
        </div>

               <form method="post" action="student/dashboard/add_profile" enctype="multipart/form-data">
                      





 <div class="row"> 
  <div class="form-group col-md-9">
             <label>Student Type</label>
                        <select   class="form-control clan1" placeholder="Student Type" name="Type" value=" "  required="">
                        
                           <option value="Direct" > Direct Type</option>
                           <option id="fc" value="Facilitation center" > Facilation center</option>    
                                         </select>
										        <br>
      <input type="text" id="fcnm" name="cname" class="form-control" 
                        placeholder="Enter Facilation center name" value="" style="display: none;">
               


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
  
 </div>
  <div class="form-group col-md-2">
     <h4 class="card-title d-flex">Profile Image</h4>
     <input type="file" name="pro_img" size="20px" class="dropify" required />  
  </div>
 </div>
 <script>
/*$(document).ready(function(){
$("input[type='radio']").change(function(){
if($(this).val()=="facilitation_center")
{
$("#cname").show();
}
else
{
$("#cname").hide(); 
}
});
});
<br>
  <input style="display:none;" type="text" name="cname" id="cname" value="" />
*/
</script>
   



              <div class="row"> 
                 <div class="form-group col-md-6">
                           <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?=$student_name;?>" required="">
                 </div>
                 <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?=$student_email;?>" disabled >
                 </div>
                 <div class="form-group col-md-6">
                        <label>Number</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?=$student_mobile;?>" disabled >
                 </div>
                  <div class="form-group col-md-6">
                        <label>Father Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="fname" value="<?=$student_fname;?>" required="">
                 </div>
                   <div class="form-group col-md-6">
                        <label>Mother Nameghj</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="mname" value="<?=$student_mname;?>" required="">
                 </div>
                  
              
                  <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect2">Class / Study In</label>
                       <select class="form-control clan" name='class' id="exampleFormControlSelect2" required="">
                          <option value=''>Select Class / Study In</option>
                      <option value='below10'>Below 10th</option>
                      <option value='passed10'>10th Passed</option>
                      <option value='ten2'>10+2/10+ITI</option>
                      <option value='graduate'>Graduated/Diploma</option>
                    </select>
                 </div>
               </div>  
<script>
   $('.clan').on('change', function() {
  var val=this.value;
  if(val=='below10'){
      $('#rnn').val('null');  
    $('#rnn').hide();  
  }else{
      $('#rnn').val('');  
    $('#rnn').show();    
  }
});
</script>                    
                 
                       
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Class 10 Roll No.</label>
                        <input type="text" class="form-control" id='rnn'  name="roll_no" value="<?=@$student_roll_no;?>" required="" style='display:none;'>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Address</label>
                        <input type="text" class="form-control"  name="Address" value="<?=$student_address;?>" required="">
                    </div>
                 </div>   
                    
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label>Aadhar No.</label>
                        <input type="text" class="form-control"  name="aadhar_no" value="<?=@$student_aadhar_no;?>" required="" >
                    </div>
              

 

<?php
 $db_name=$this->session->db_name;
 $cdbn="SELECT DISTINCT(`city_state`) AS state FROM `education_center_city`";
 $st_arr=$this->bm->quert($db_name,$cdbn);
?>               

                    <div class="form-group col-md-6">
                       <label for="exampleFormControlSelect2">State</label>
                       <span id='st_error'></span>
              <select class="form-control stat" name='state' id="exampleFormControlSelect2" required="">
                          <option value=''>Select State</option>

                    

                       <?php
                       foreach($st_arr as $stt){
                           $sate=$stt['state'];
                       ?>   
                      <option value='<?=$sate;?>'><?=$sate;?></option>
                      <?php
                       }
                      ?>
                      </select>
                  
           </div>
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
                
                 <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect2">City</label>
                    <div id='cit'>
                          <select class="form-control" name='city' id="exampleFormControlSelect2" required="">
                      <option value=''>Select City</option>
                   </select>
 
                  </div>
                 </div>
                 <div class="form-group col-md-6">
                        <label>PIN</label>
                    <input type="text" class="form-control"  name="pin_no" value="<?=@$student_pin_no;?>" required="" >
                    </div>
       
         <button type="submit" class="btn btn-success" style="float:right;">Submit</button>
                    
                                 </div>
                   
</div>                     
                </form>

            </div>                
        </div>
    </div>
    </div>        









         
    <?php
    }else{   
    ?> 
                    
                  
     
              <h4 class="card-title text-md-center text-xl-left">View All Courses</h4>
             <div class="row">
            <div class="col-md-12 grid-margin" style="margin-top: 50px;">
              
            </div>
          </div>
          
        <div class="row">
          <div class="col-md-9">
            <div class="container box">
    <br />
    <?php $add_succ=$this->session->flashdata('add_succ');
            if($add_succ){
            ?>
            <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $add_succ;?></strong> 
                       </div>
                  <?php } ?>
   <a href="<?=base_url()?>Profile/pdfdetails/<?=$std_id;?>" target="_blank"> <h3 align="center">Download PDF profile</h3></a> 
    <div class="mt-4 py-20"><h1>nn</h1>
                        <ul class="nav profile-navbar blink_me">
                          <li class="nav-item">
                            <a class="nav-link" href="https://wa.me/+918004273287" target="_blank">
                             <img src="<?=base_url()?>assets/whatsup.png" style="width:100%; height:100px;"></a>
                             <p style="color:red;font-weight:600;">
                            Only Message us between 9AM to 5PM 
                             </p>
                          </li>
                        </ul>
                      </div><br>
    <br />
    <?php
    if(isset($customer_data))
    {
    ?>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <tr>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>View</th>
          <th>View in PDF</th>
        </tr>
      <?php
      foreach($customer_data as $row)
      {
        echo '
        <tr>
          <td>'.$row['master_id'].'</td>
          <td>'.$row['master_name'].'</td>
          <td><a href="student/dashboard/details/'.$row['master_id'].'">View</a></td>
          <td><a href="student/dashboard/pdfdetails/'.$row['master_id'].'">View in PDF</a></td>
        </tr>
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

            <div class="row">
                   

             <?php
            //  $db_name=$this->session->db_name;
             foreach($all_course as $course_ar){
                 $course_id=$course_ar['mcourses_id'];
                 $course_id_en=$this->bm->base64_url_encode($course_id);
                 $course_name=$course_ar['mcourses_name'];
                $course_name_sla= str_replace(" ","_",$course_name);
                $course_name_sla= str_replace("&","_",$course_name_sla);
                  //$course_name_sla= str_replace("(","@",$course_name_sla);
                  //$course_name_sla= str_replace(")","@",$course_name_sla);
                 $course_price=$course_ar['mcourses_price'];
                 $course_day=$course_ar['mcourses_duration'];
                 
                 //$my_plan_cdn="SELECT * FROM `education_center_plan` WHERE `plan_mc_id`='$course_id' AND `plan_stu_id`='$std_id'";
                $my_plan_cdn= $this->db->where(['plan_mc_id'=>$course_id,'plan_stu_id'=>$std_id])->get('plan_mc_id')->result_array();
                //  $myplan_ar=$this->bm->quert($db_name,$my_plan_cdn);
                 $count_myplan_ar=count($my_plan_cdn);
                 
             ?> 
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left"><?=$course_name;?></p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h5 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><img src="https://image.flaticon.com/icons/png/128/25/25473.png" style="height:17px"><?=$course_price;?></h5>
                    <img src="https://thumbs.gfycat.com/PerfumedColossalGadwall-max-1mb.gif" style="height: 60px;">
                  </div>  
                  <p class="mb-0 mt-2 text-warning"><span class="ti-calendar"></span><span class="text-black ml-1"><small>(<?=$course_day;?> days)</small></span></p>
                  
                </div>
<?php  if($count_myplan_ar==0){ ?>
                <button type="button" id='btn_<?=$course_id;?>' class="btn btn-primary btn-sm">Click Here To View Demo</button>
<script>
  $("#btn_<?=$course_id;?>").click(function(){
     // alert('gfg');
     

      window.location.replace("student/dashboard/demo/<?=$course_id;?>/<?=$course_name_sla;?>");
  
});  
</script> 
<?php
}else{ ?>

 <button type="button" id='btn_<?=$course_id;?>' class="btn btn-success btn-sm">Click Here To View</button>
<script>
  $("#btn_<?=$course_id;?>").click(function(){
     // alert('gfg');
     

      window.location.replace("/student/course/myplan/<?=$course_id_en;?>/plan");
  
});  
</script> 
    
    
    <?php } ?>


              </div>
            </div>
            
            <?php
             }
            ?>
          </div>  
          </div>
       
          <div class="col-md-3">
              
              <div class="mt-4 py-20"><h1>nn</h1>
                        <ul class="nav profile-navbar blink_me">
                          <li class="nav-item">
                            <a class="nav-link" href="https://wa.me/+918004273287" target="_blank">
                             <img src="<?=base_url()?>assets/whatsup.png" style="width:100%; height:100px;"></a>
                             <p style="color:red;font-weight:600;">
                            Only Message us between 9AM to 5PM 
                             </p>
                          </li>
                        </ul>
                      </div><br>
              
              <h4 class="card-title text-md-center text-xl-left">Latest News & Notice</h4>
              <div class="card">
                <div class="card-body">
                    
                  <div class="table-responsive">
				   <marquee  style="height: 300px;" direction = "up" onmouseover="this.stop();" onmouseout="this.start();">
                    <ol>
                        <?php
                          foreach($show_news as $news){
                              $idd=$news['news_id'];
                              $datee=$news['news_date'];
                              $id=$this->bm->base64_url_encode($idd);
                          ?>
				        <li>
				           <a href="student/dashboard/news_sess/<?php echo $id;?>" style="color:#000"> 
				              <?php 
                             $newss= $news['news_title'];
                             echo substr($newss,0,70);
                             ?> 
				           </a>
				           
				           <?php
				           $current_date = date("Y-m-d");
				           if($current_date==$datee){?>
				           <img src="assets/blink.gif">
				           <?php }else{}
				           ?>
				           
				           <p style="color:#248afd;">
                            <i class="ti-calendar menu-icon" style="color:#5d9e12;"></i>
                              <?php 
                              $dtee= $news['news_date'];
                              echo date("j F, Y", strtotime($dtee));
                              ?>  
                            </p>
					       <hr>
						</li>
						<?php }?>
                      </ol>
					 </marquee>
                  </div>
                  
                </div>
              </div>    
            </div>
         </div>  
          
<?php
}
?>           
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
<script>
    (function blink() { 
  $('.blink_me').fadeOut(900).fadeIn(900, blink); 
})();
</script>
  