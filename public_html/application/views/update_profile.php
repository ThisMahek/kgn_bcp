<?php include('includes/header.php')?>

<?php


$query = $this->db->query("SELECT DISTINCT(`city_state`) AS state FROM education_center_city");
$st_arr = $query->result_array();

?>
<main>


         <!-- checkout-area start -->
         <section class="checkout-area pb-70">
               <div class="container">
                  <form action="<?=base_url()?>master/update_user_profile" method="post" enctype= multipart/form-data>
                     <div class="row">
                           <div class="col-lg-12 margin-t">
                              <div class="checkbox-form">
                                   <?= $this->session->flashdata('success')?>
                                      <?= $this->session->flashdata('error')?>
                                 <h3>Update Profile</h3>
                                 <div class="row">
                                     <!--for image--->
                                        <!--<label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Add Images</label>-->
                                           <div class="col-md-6">
                                          <div class="country-select">
                                             <label>Student Type<span class="required">*</span></label>
                                            <select   class="form-control clan1"required="" name="dname" onchange="show_facilitation_center(this.value)">
                                            <option value="Direct" <?= ($student->student_type == 'Direct')?"selected":"" ?>> Direct Type</option>
                                            <option id="fc" value="Facilitation center" <?= ($student->student_type == 'Facilitation center')?"selected":"" ?>> Facilation center</option>    
                                            </select>
                                          </div>
                                       </div>
                                        <div class="col-sm-12 col-md-6 col-12">
                                        <div class="mb-3">
                                        <input class="form-control form_image" type="file" id="formFile" name="userprofile_picture" onchange="preview(this)">
                                        <img class="img-thumbnail image_drop avatar-xl image" width="210" height="180" src="<?php echo base_url()?><?=$student->userprofile_picture?>" data-holder-rendered="true">
                                        <span id="sp_messag2" style="color:red"></span>
                                        </div>
                                        </div>
                                        
                              
                                     <!---end image--->
                                    
                                       <div class="col-md-6"  id="fcnm"  style="<?= ($student->student_type == 'Facilitation center')?"display:inline":"display:none" ?>">
                                          <div class="checkout-form-list">
                                               <label>Facilation center name <span class="required"></span></label>
                                                      <input type="text"name="cname" class="form-control" placeholder="Enter Facilation center name" value="<?=$student->facilitation_center_name?>">
                                             <!--<input type="text" placeholder="Enter your full name" name="name" requird value="<?=$student->master_name?>">-->
                                              
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                       <label>Mobile <span class="required"></span></label>
                                              <input type="text" placeholder="Enter your full name" name=""  readonly requird value="<?=$student->master_mobile?>">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Email Id<span class="required"></span></label>
                                             <input type="text" placeholder="Enter your email id" name="" readonly required value="<?=$student->master_email?>">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Father Name</label>
                                             <input type="text" placeholder="Enter your father name" name="fname" id="" required value="<?=$student->master_fname?>">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Mother Name<span class="required"></span></label>
                                             <input type="text" placeholder="Enter your mother name" name="mname" id="" required value="<?=$student->master_fname?>"> 
                                          </div>
                                       </div>
                                       
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Class / Study In<span class="required"></span></label>
                                             <!--<input type="text" placeholder="Enter your class" name="" id="" required>-->
                                              <select class="form-control clan2" name='class'  required="">
                                                <option value=''>Select Class / Study In</option>
                                                <option value='Below 10th' <?= ($student->master_class == 'Below 10th')?"selected":"" ?>>Below 10th</option>
                                                <option value='10th Passed' <?= ($student->master_class == '10th Passed')?"selected":"" ?>>10th Passed</option>
                                                <option value='10+2/10+ITI' <?= ($student->master_class == '0+2/10+ITI')?"selected":"" ?>>10+2/10+ITI</option>
                                                <option value='graduate'    <?= ($student->master_class == 'graduate')?"selected":"" ?>>Graduated/Diploma</option>
                                                </select>
                                               </div>
                                       </div>
                                       <div class="col-md-6"  style="<?=($student->master_class == 'Below 10th')?'display:none':'display:inline'?>" id="rnn">
                                          <div class="checkout-form-list">
                                               <label>Class  Roll No.</label>
                                         <input type="text" class="form-control " id='rnn2'  name="roll_no" value="<?=$student->master_roll_no?>" >
                                          </div>
                                       </div>
                                                              

                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Course</label>
                                             <select class="form-control clan" name='course_id'  required="">
                                                    <option value=''>Select Course</option>
                                                    <?php
                                                    foreach($course as $c)
                                                    {
                                                    
                                                    ?>
                                                       <option value="<?=$c->id?>"  <?=($c->id==$student->course_id)?'selected':''?>><?=$c->title?></option>
                                                       <?php }?>
                                                       </select>
                                                       
                                                 
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Address<span class="required"></span></label>
                                             <input type="text" placeholder="Enter your address" name="address" id="" required value="<?=$student->master_address?>">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Aadhar No<span class="required"></span></label>
                                             <input type="text" placeholder="Enter your aadhar number" name="aadhar_no" id="" required value="<?=$student->master_aadhar_no?>"> 
                                          </div>
                                       </div>
                                    
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>State<span class="required">*</span></label>
                                               <!--<select class="form-control " name="state"   onchange="get_district(this.value)" required >-->
                                                <select class="form-control stat" name="state"  required >
                              <option value="">Select State</option>
                                    <?php
                                    foreach($st_arr as $stt){
                                    $sate=$stt['state'];
                                   
                                    ?>   
                                    <option value='<?=$sate;?>' <?php if($sate==$student->master_state){echo'selected';}?> ><?=$sate;?></option>
                                    <?php
                                    }
                                    ?>
                           </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>City<span class="required"></span></label>
                                                   <div id='cit'>
                                               <select class="form-control inputtags" name="city"  id="states_val" required>
                                            <option value='<?=$student->master_city?>'><?=$student->master_city?></option>
                                            </select>
                                            </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Pincode<span class="required">*</span></label>
                                             <input type="text" placeholder="Enter your pincode" name="pin_no" id="" required value="<?=$student->master_pin_no?>">
                                          </div>
                                       </div>
                                       <div class="col-md-6"  >
                                          <div class="checkout-form-list">
                                               <label>Full name <span class="required"></span></label>
                                                     
                                             <input type="text" placeholder="Enter your full name" name="name" requird value="<?=$student->master_name?>">
                                              
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="checkout-form-list create-acc">
                                             <input id="cbox" type="checkbox" />
                                             <label>Create an account?</label>
                                          </div>
                                         <button class="btn-primary  w-50" type="submit" ><span></span>Update</button>
                                       </div>
                                 </div>
                               
                              </div>
                           </div>
                        
                     </div>
                  </form>
               </div>
         </section>
         <!-- checkout-area end -->
         </div>
      </div>
      </div>
         </div>

</section>
<!-- sign up area end -->

</main>

 
 <script>
   function get_district(stats)
   {   
       
       $('#states_val').html('<option value="">Select City</option>');
      
         $.ajax({
                 url:"<?= base_url('assets/District.php')?>",
                 dataType:'Json',
                 method:"POST",
                 data:{state:stats},
                 success:function(res)
                 {
                   console.log(res);
                   
                    if(res.length > 0){
                       $.each(res, function(key,val) {
                           $('#states_val').append('<option value="'+val+'">'+val+'</option>');
                       });
                        
                    }
                 }
                 
         });        
   }
  </script>
   <?php include('includes/footer.php')?>
   
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
        <!-- Latest compiled and minified CSS -->
<!--        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
<script>
   $('.clan2').on('change', function() {
      
  var val=this.value;
  if(val=='Below 10th'){
      $('#rnn').val('null');  
    $('#rnn').hide();  
  }else{
      $('#rnn').val('');  
    $('#rnn').show();    
  }
});
</script>   
<script>
show_facilitation_center();
   function show_facilitation_center(val){
     //  alert(val);
 //$('.clan1').on('change', function() {
 // var val=this.value;
  if(val=='Facilitation center'){
      $('#fcnm').val('');  
    $('#fcnm').show();    
  }
else if(val=='Direct'){
      $('#fcnm').val('');  
    $('#fcnm').hide();  
  }
//});
}
</script> 
<script>
      function preview(image){
     var filePath = image.value;
     //alert(filePath);
                       var allowedExtensions = /(\.jpg|\.png|\.jpeg )$/i;
                    
                       if(!allowedExtensions.exec(filePath))
                       {
                    document.getElementById('sp_messag2').innerHTML= '\n Please upload file having extensions .jpeg, .png, .jpeg only.';
                      document.getElementById("btn2").disabled=true;
                          // return false;
                       }else{
                           //Image preview
                           if (image.files && image.files[0]) {
               				var reader = new FileReader();
               				reader.onload = function (e){
               					$('.image')
               						.attr('src', e.target.result)
               						.width(110)
               						.height(70);
               						document.getElementById('sp_messag2').innerHTML=" ";
               						  document.getElementById("btn2").disabled=false;
               				};
               				reader.readAsDataURL(image.files[0]);
               		 }
                       }
              
       	}
       	
    </script>
    <script>
   $('.stat').on('change', function() {
  var val=this.value;
  
  if(val==''){
      $('#st_error').html('Required').show();  
    
  }else{
    $.ajax({
      type : "POST",
      url  : "<?=base_url()?>Master/showcity",
      data : {val:val},
      success: function(data){
          
         $('#cit').html(data).show(); 
      }
    }); 
     
  }
});
</script>   