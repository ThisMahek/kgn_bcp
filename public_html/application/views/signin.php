<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>KGN COMPUTER ACADEMY</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/image/logo.png">
      <!-- CSS here -->
     
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontAwesome5Pro.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
   </head>
<style>
    .btn-primary{
         background-image: linear-gradient(90deg, rgb(10 161 195) 0%, rgb(17 88 145) 100%);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    font-weight: 600;
    border-radius: 2px;
    padding: 10px 20px;
    font-size: 15px;
    border:0;
      }
      .btn-primary:hover{
         background-image: linear-gradient(90deg, rgb(10 161 195) 0%, rgb(17 88 145) 100%)!important;
      }
     .sign__input input {
    width: 100%;
    height: 42px;
    line-height: 52px;
    padding: 0 40px;
    font-size: 14px;
      }
   .sign__wrapper{
      margin: 14px 35px;
   }
   .section__title-wrapper{
      margin-top:18%;
   }
   .sign__input {
    margin-bottom: 5%;
   }
     @media screen and (max-width: 600px) {
        .sign__wrapper{ 
            margin:14px 0px!important; 
            
        } 
     }
   </style>
      <main>

         <!-- sign up area start -->
         <section class="signup__area po-rel-z1 pt-100 pb-145">
        
            <div class="container">
               <div class="row">
                    
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                     <div class="section__title-wrapper text-center mb-55">
                          <?= $this->session->flashdata('success')?>
                        <?= $this->session->flashdata('error')?>
                        <h2 class="section__title">Log In</h2>
                        <p>If you have an account you can <a href="#">LogIn here!</a></p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                     <div class="sign__wrapper white-bg">
                        <div class="sign__form">
                           <form action="<?=base_url()?>Home/login" method="post">
                              <div class="sign__input-wrapper mb-25">
                                 <h5 class="mt-2">Email</h5>
                                 <div class="sign__input">
                                    <input type="email" name="email" value="" placeholder="Email address">
                                    <i class="fal fa-envelope"></i>
                                 </div>
                              </div>
                              <div class="sign__input-wrapper mb-20">
                                 <h5 class="mt-2">Password</h5>
                                 <div class="sign__input">
                                    <input type="password" name="password" value="" placeholder="Password">
                                    <i class="fal fa-lock"></i>
                                 </div>
                              </div>
                                   <button class="btn-primary w-100" type="submit"  > <span></span>Log In</button>
                              <!--<a href="<?php echo base_url()?>index.php/Home/profile"><button class="btn-primary  w-100" type="button" ><span></span>Log In</button></a>-->
                           
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- sign up area end -->
         
      </main>


</body>
</html>