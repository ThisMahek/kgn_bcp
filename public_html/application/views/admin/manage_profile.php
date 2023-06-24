<?php include('includes/header.php')?>
<?php include('includes/sidebar.php')?>

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
    <?= $this->session->flashdata('success')?>
    <?= $this->session->flashdata('error')?>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                       <center><img class="img-thumbnail image" alt="50x50" src="<?php echo base_url()?><?=$result->image?>" data-holder-rendered="true"><center>
                        
                    </div>
                    <div class="card-body p-4">
                    <h4 class="card-title">Profile </h4>
                    <form action="<?=base_url()?>Profile/updateAdmin" method="post"  enctype="multipart/form-data" >
                    
                            <div class="row">
                    
                                <div class="col-md-4 col-4 profile_head">Add Images</div>
                                   <div class="col-md-8 col-8">
                                    <div class="mb-3">
                                    <input class="form-control" type="file" id="formFile" name="image"  onchange="preview(this)">
                                    <span id="sp_msg" style="color:red"></style>
                                        </div>
                                </div>
                                <div class="col-md-4 col-4 profile_head">Name</div>
                                   <div class="col-md-8 col-8">
                                    <div class="mb-3">
                                            <input type="text" class="form-control" id="username" name="name" placeholder="name" value="<?=$result->name?>">
                                        </div>
                                </div>
                                <div class="col-md-4 col-4 profile_head">Email Id</div>
                                   <div class="col-md-8 col-8">
                                    <div class="mb-3">
                                            <input type="email" class="form-control" id="email"  name="email" value="<?=$result->email?>" placeholder="shek@gmail.com">
                                        </div>
                                </div>
                                <div class="col-md-4 col-4 profile_head">Mobile.No</div>
                                   <div class="col-md-8 col-8">
                                    <div class="mb-3">
                                            <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" minlength="10" placeholder="9999999999" value="<?=$result->mobile?>">
                                        </div>
                                </div>
                                
                                <div class="col-md-4 col-4 profile_head">Designation</div>
                                    <div class="col-md-8 col-8">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="Designation" name="designation"  value="<?=$result->designation?>"  placeholder="Enter Designation">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-4 profile_head">Address</div>
                                    <div class="col-md-8 col-8">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="address" name="address"  value="<?=$result->address?>"  placeholder="Enter Designation">
                                        </div>
                                    </div>

                            </div>
                            <button type="submit" class="btn btn-info start-btn w-100" name="update" id="btn2" value="1">Update</button>
                            
                       </div>
               
                </div>
            </div> 
</form>
         
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Change Password </h4>
                    </div>
                    <div class="card-body p-4">

                    <form action="<?=base_url()?>Profile/change_AdminPassword" method="post"> 
                                            <div class="mb-3">
                                                <label class="form-label">Current Password</label>
                                                <input type="password" class="form-control" id="username" name="password" placeholder="Enter current password">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">New Password</label>
                                                <input type="password" class="form-control"  name="password1" id="password1"  placeholder="Enter new password" oninput="checkuserpassword()"  required="" >
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" name="password2" id="password2" placeholder="Enter confirm password" oninput="checkuserpassword()"  required="" >
                                            </div>
                                            <span id="sp_passmsg"></span>
                                            <div class="mb-3">
                                            <button type="submit" id="button_change"  class="btn btn-info start-btn w-100" name="update" id="btn2" value="1">Update Password</button>
                                            </div>
                                        </form>

                       </div>
               
                </div>
            </div> 
        </div>
        <!-- end row -->
      

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

</div>
<!-- end main content-->
<?php include('includes/footer.php')?>
<script>
      function preview(image){
     var filePath = image.value;
     //alert(filePath);
                       var allowedExtensions = /(\.jpg|\.png|\.jpeg )$/i;
                    
                       if(!allowedExtensions.exec(filePath))
                       {
                    document.getElementById('sp_msg').innerHTML= '\n Please upload file having extensions .jpeg, .png, .jpeg only.';
                      document.getElementById("btn").disabled=true;
                          // return false;
                       }else{
                           //Image preview
                           if (image.files && image.files[0]) {
               				var reader = new FileReader();
               				reader.onload = function (e){
               					$('.image')
               						.attr('src', e.target.result)
               						.width(100)
               						.height(50);
               						document.getElementById('sp_msg').innerHTML=" ";
               						  document.getElementById("btn").disabled=false;
               				};
               				reader.readAsDataURL(image.files[0]);
               		 }
                       }
              
       	}
      
function checkuserpassword()
    {
      var password = document.getElementById("password1").value;
        var cpassword=  document.getElementById("password2").value;
        if(password != cpassword)
        {
          document.getElementById("sp_passmsg").innerHTML=" Password and confirm password did not match: Please try again";
           document.getElementById("sp_passmsg").style.color="red";
           document.getElementById("button_change").disabled=true;
        }

        else
        {
          document.getElementById("sp_passmsg").innerHTML=" ";
           document.getElementById("sp_passmsg").style.color="";
           document.getElementById("button_change").disabled=false;
        }
    }

    </script>