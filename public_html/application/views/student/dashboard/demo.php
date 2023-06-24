<?php
$student_name=$stu_info[0]['master_name'];

$student_email=$stu_info[0]['master_email'];
$student_mobile=$stu_info[0]['master_mobile'];

$student_fname=$stu_info[0]['master_fname']; 
$student_mname=$stu_info[0]['master_mname'];
$student_class=$stu_info[0]['master_class'];
$student_graduate=$stu_info[0]['master_graduate'];
$student_graduate_name=$stu_info[0]['master_graduate_name'];
$student_image=$stu_info[0]['master_image'];
$student_address=$stu_info[0]['master_address'];


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
    <div class="row">
    <div class="col-md-10 grid-margin stretch-card" id="add_view" style="display:block;">
        <div class="card">
            <div class="card-body"> 
            
                <h4 class="" style="font-family: cursive;font-size: 25px;color:#4CAF50;">Please Complete Your Profile</h4><br>
                <form method="post" action="student/dashboard/add_profile" enctype="multipart/form-data">
                    <div class="row"> 
                    <div class="form-group col-md-9">
                        <div class="row"> 
                    <div class="form-group col-md-12">
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
                    </div>

                    </div>
                    <div class="form-group col-md-2">
                       <h4 class="card-title d-flex">Profile Image</h4>
                  <input type="file" name="pro_img" class="dropify" />  
                       
                    </div>
                    
               

                    
                    
                    <div class="form-group col-md-6">
                        <label>Father Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="fname" value="<?=$student_fname;?>" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Mother Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="mname" value="<?=$student_mname;?>" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Class / Study In</label>
                        <input type="text" class="form-control"  name="class" value="<?=$student_class;?>" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Address</label>
                        <input type="text" class="form-control"  name="Address" value="<?=$student_address;?>" required="">
                    </div>
                    

                <div class="form-group col-md-8">
                    </div>
                    <div class="form-group col-md-4">
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
$course_id=$demo_course_arr[0]['mcourses_id']; 
$course_id_en=$this->bm->base64_url_encode($course_id);


$course_name=$demo_course_arr[0]['mcourses_name'];        
$course_desc=$demo_course_arr[0]['mcourses_desc'];

$course_price=$demo_course_arr[0]['mcourses_price'];
$course_day=$demo_course_arr[0]['mcourses_duration'];
$course_link=$demo_course_arr[0]['mcourses_demo_link'];
$link_to_vedio=$this->pro->link_to_embed($course_link);

	
	
    ?> 
          <div class="row">
            <div class="col-md-12 grid-margin" style="margin-top: 50px;">
              <a href='student/dashboard'><button type="button"  class="btn btn-primary btn-rounded btn-fw">Back</button></a>
            </div>
          </div>
          
        <div class="row">
          
             
              <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-lg-12">
                      <h4 class="card-title"><?=$course_name;?></h4>
                      
                      </div>
                      
                      </div>
                  <p class="card-description">
                      
                      <div class="row">
                      <div class="col-lg-5">
                      
                      <div class="card rounded border mb-2">
                          <div class="card-body p-3">
                            <div class="media">
                              <img src="https://image.flaticon.com/icons/png/128/25/25473.png" style="height:17px">
                              <div class="media-body">
                                 <h6 class="mb-1">Price : <?=$course_price;?> Only</h6>
                                
                              </div>                              
                            </div> 
                            
                            
                          </div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                      
                      <div class="card rounded border mb-2">
                          <div class="card-body p-3">
                            <div class="media">
                              <i class="ti-calendar icon-sm align-self-center mr-3"></i>
                              <div class="media-body">
                                <h6 class="mb-1">Duration : <?=$course_day;?> Days</h6>
                                
                              </div>                              
                            </div> 
                            
                            
                          </div>
                        </div>
                        </div>
                        <div class="col-lg-3">
                      
                     
                              
                                  <button type="button" id="exinsert" class="btn btn-primary btn-rounded btn-fw buy_now">Purchage Now</button>
                                
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  var SITEURL = "<?php echo base_url() ?>";
  
  $('body').on('click', '.buy_now', function(e){
      
     var product_id ="<?php echo$course_id; ?>" ;
      
   
   
   
    var product_name ="<?php echo$course_name; ?>" ;
    var totalPrice ="<?php echo$course_price ?>";
     var totalTax =parseFloat(totalPrice)*2/100;
    var totalAmount =parseFloat(totalPrice)+parseFloat(totalTax);
   
  
    //console.log(product_name);rzp_live_04jg5Cfn12Jhxb
    var options = {
    "key": "rzp_test_uEC9lFDdL3WMu6",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "kgncomputeracademy",
    "description": "<?php echo$student_name;?> - "+product_name,
    "image": "https://kgncomputeracademy.org/upload/logo/KGN%20COMPUTERS%20LOGO%202%20trans.png",
    "handler": function (response){
         $.ajax({
            url: SITEURL + 'student/dashboard/plan',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id,
                product_name : product_name,
                product_id : product_id,
                product_pprice : totalPrice,
                product_ptax : totalTax,
                totalAmount : totalAmount,
            }, 
            success: function (msg) {
 console.log(msg)
// alert(msg);
 if(msg){
     window.location.replace("student/course/myplan/<?=$course_id_en;?>/plan");
 }
             //window.replace = SITEURL + 'student/dashboard';
            }
        });
       
      
    },
    "prefill": {
        "name": "<?=$student_name;?>",
        "email": "<?=$student_email;?>",
        "contact": "<?=$student_mobile;?>"
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  
  });
 
</script>                             
                       
                        </div>
                       </div> 
                        
                        <br > 
                      <?=$course_desc;?>
                  <br > <br > <br >
   <style>
     .app-container {
  position: relative;
}

.banner-overlay {
    position: absolute;
    width: 100%;
    height: 360px;
    background-image: linear-gradient(to right, rgb(0,0,0,0), rgb(0,0,0,0) 50%, rgb(0,0,0,0));
    top: 0px;
    left: 0;
}
.banner-overlay1 {
    position: absolute;
    width: 85%;
    height: 30px;
    background-image: linear-gradient(to right, rgb(0,0,0,0), rgb(0,0,0,0) 50%, rgb(0,0,0,0));
    bottom: 0px;
    right: 0;
}
.banner-overlay2 {
    position: absolute;
    width: 50%;
    height: 30px;
    background-image: linear-gradient(to right, rgb(0,0,0,0), rgb(0,0,0,0) 50%, rgb(0,0,0,0));
    bottom: 0px;
    right: 0;
}
   .mejs__mediaelement iframe { pointer-events: none; }
   </style>
   
   <div class="app-container">
<iframe width="100%" height="400" src="<?=$link_to_vedio;?>?autoplay=1&modestbranding=1" frameborder="0" style='' ></iframe>

  <div class="banner-overlay">
  </div>
  <div class="banner-overlay1">
  </div>
</div>


                  </p>
                  
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
								<div class="card-body">
									<h4 class="card-title">Post Question</h4>
									<div class="list-wrapper pt-2">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
										<?php
										$db_name=$this->session->db_name;
										$post_cdn="SELECT * FROM `education_center_post` WHERE `post_mcid`='$course_id'";
										$post_ar=$this->bm->quert($db_name,$post_cdn);
										
										foreach($post_ar as $post_er){
										    $post_id=$post_er['post_id'];
										    $post_title=$post_er['post_title'];
										?>
											<li id='unlock_<?=$post_id;?>'>
												<div class="form-check form-check-flat">
													<label class="form-check-label"><?=$post_title;?></label>
												</div>
												 <i class="ti-lock"></i>
											</li>
<script>
    $("#unlock_<?=$post_id;?>").click(function(){
  alert("The paragraph was clicked.");
});
</script>											
										<?php
										}
										?>	
											
											
											
										</ul>
                  </div>
                  
								</div>
							</div> 
            
             </div>
            
       
        </div>  
          
<?php
}
?>           
        
        </div>
        <!-- content-wrapper ends -->
        