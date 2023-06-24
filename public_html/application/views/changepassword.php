<?php include('includes/dashboard_header.php')?>
  

    <!-- page title area start -->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url()?>assets/image/page-title/page-title-2.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Change password</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url()?>Home/index">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Change password</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->
            <!-- course area start -->
            <section class="course__area pt-100 pb-120 grey-bg">
            <div class="container">
               <div class="row">
                   <div class="col-xxl-2 col-xl-2 col-lg-2 col-12"></div>
                  <div class="col-xxl-8 col-xl-8 col-lg-8 col-12">
                      <h2 class="section__title">Change Password</h2>
                        <?= $this->session->flashdata('success')?>
                         <?= $this->session->flashdata('error')?>
                    <div class="card p-5 shadow-lg">
                        
                       <form action="<?=base_url()?>Home/change_UserPassword" method="post">
                              <div class="sign__input-wrapper mb-25">
                                 <h5 class="mt-2 text-start">Current Password</h5>
                                 <div class="sign__input">
                                    <input type="password" id="password" name="password" value="" placeholder="Current Password">
                                 </div>
                              </div>
                              <div class="sign__input-wrapper mb-20">
                                 <h5 class="mt-2 text-start">New Password</h5>
                                 <div class="sign__input">
                                    <input type="password"  id="password1" name="password1"  placeholder="New Password">
                                 </div>
                              </div>
                               <div class="sign__input-wrapper mb-25">
                                 <h5 class="mt-2 text-start">Confirm Password</h5>
                                 <div class="sign__input">
                                    <input type="password" id="password2" name="password2"   oninput="checkuserpassword()" placeholder="Confirm Password">
                                     <span id="sp_passmsg"></span>
                                 </div>
                              </div>
                              
                                   <button class="btn-primary w-100" id="button_change" type="submit" name="update_password"> <span></span>Change Password</button>
                             
                           
                           </form>
                    </div>
                  </div>
                   <div class="col-xxl-2 col-xl-2 col-lg-2 col-12"></div>
               </div>
            
            </div>
         </section>
         <!-- course area end -->

         <!-- footer area start -->
         <script>
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
         <?php include('includes/footer.php')?>

