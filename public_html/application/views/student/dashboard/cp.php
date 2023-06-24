<?php
$std_id=$this->session->std_id;
$student_name=$stu_info[0]['master_name'];

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
    <div class="col-md-6 grid-margin stretch-card" id="add_view" style="display:block;">
        <div class="card">
            <div class="card-body"> 
             <a href='student/dashboard'><button type="button"  class="btn btn-primary btn-rounded btn-fw">Back</button></a>
                <h4 class="" style="font-family: cursive;font-size: 25px;color:#4CAF50;">Change Password</h4><br>
				
				<?php
				$cp_succ=$this->session->flashdata('cp_succ');
				if($cp_succ !=''){ ?>
				<h4 class="" style="font-size: 18px;color:red;"><?=$cp_succ;?></h4><br>    
				<?php }else{}
				?>
                <form method="post" action="student/profile/ucp" enctype="multipart/form-data">
                    <div class="row"> 
                    <div class="form-group col-md-9">
                        <div class="row"> 
                    <div class="form-group col-md-12">
                        <label>Old Password</label>
                        <span id='opa_err' style='color:red;'></span>
                        <input type="password" class="form-control" placeholder="Enter Old Password" id='opa' name="old_pass" value="" required="">
                    </div>
<script>
    $("#opa").blur(function(){
        var opa=$('#opa').val();
        if(opa==''){
            $('#opa_err').html('Please enter your Old Password.').show();
        }else{
            
            $('#opa_err').html('').show();
            $.ajax({
						type : "POST",
						url  : "student/profile/ch_opa",
					    data : {opa:opa},
						success: function(data){
								//console.log(data);
								if(data=='0'){
								  $('#opa_err').html('Wrong Password').show();
								  $("#opa").focus();
								}else{
								    
								  $('#opa_err').html('').show();   
								}
							
						    
						}
					});
            
        }
  
});
</script>                    
                    <div class="form-group col-md-12">
                        <label>New Password</label>
                        <span id='cnpm' style='color:red;'></span>
                        <input type="password" class="form-control" placeholder="Enter New Password" name="new_pass" id="new_pass" value="" required="">
                    </div>
<script>
    $("#new_pass").blur(function(){
        var new_pass=$('#new_pass').val();
        if(new_pass==''){
            $('#cnpm').html('New Password Required.').show();
        }else{
            $('#cnpm').html('').show();
        }
</script>        
                    
                    <div class="form-group col-md-12">
                        <label>Confirm Password</label>
                           <span id='cnpo' style='color:red;'></span>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="cn_pass" id="cn_pass" value="" required="">
                    </div>
<script>
    $("#cn_pass").keyup(function(){
  var npass=$('#new_pass').val();
  var cn_pass=$('#cn_pass').val();
  if(npass==''){
      
      $('#cnpm').html('New Password Required.').show();  
       $("#new_pass").focus();
      
  }
  else if(npass==cn_pass){
      $('#cnpm').html('').show();
        $('#cnpo').html('').show();
      
  }else{
      $('#cnpm').html('').show();
      
       $('#cnpo').html('Password Not Match.').show();  
       $("#cn_pass").focus();
      
  }
  
});
</script>                    
                   
                   
                    </div>

                    </div>
                    
                    
               

                    
                 
                    
                    

                <div class="form-group col-md-8">
                    </div>
                    <div class="form-group col-md-4">
                        
                         <button type="submit" class="btn btn-success" style="float:right;">Change</button>
                        </div>
                 
                    
                     </div> 
                </form>

            </div>                
        </div>
    </div>
    </div>        
         
           
          
        </div>
        <!-- content-wrapper ends -->
        