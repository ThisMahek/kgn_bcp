 <!-- cta area start -->
 <style>
   .sign__wrapper{
      margin: 0 75px;
   }
   .section__title-wrapper{
      margin-top:5%;
   }
   .sign__input {
    margin-bottom: 5%;
   }
   .modal_content{
      padding: 0 25px;
      width: 100%;
   }
   </style>
         <!-- cta area end -->
      </main>

         <footer>
            <div class="footer__area footer-bg">
               <div class="footer__top pt-100 pb-40">
                  <div class="container">
                     <div class="row text-center">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <div class="footer__widget mb-50">
                              <div class="footer__widget-head mb-22">
                                 <div class="footer__logo logo-side">
                                    <a href="#">
                                       <img src="<?php echo base_url()?>assets/image/logo.png" alt="logo" class="footer_logo">
                                    </a>
                                 </div>
                              </div>
                              <div class="footer__widget-body">
                                 <p>KGN COMPUTER ACADEMY</p>
                                 <p> 438/1A Behind Saint Judes School, Sar Sayyed Nagar, Nagra Jhansi UP</p>

                                 <div class="footer__social">
                                    <ul>
                                       <li><a href="#"><i class="social_facebook"></i></a></li>
                                       <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                                       <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                  
                     </div>
                  </div>
               </div>
               <div class="footer__bottom">
                  <div class="container">
                     <div class="row">
                        <div class="col-xxl-12">
                           <div class="footer__copyright text-center">
                              <p>Copyright © KGN COMPUTER ACADEMY. All Rights Reserved.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- footer area end -->


<!-- --------------register modal ----------------->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal_content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">Register</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">     
      <div class="sign__form">
         <form action="#">
            <div class="sign__input-wrapper mb-25">
               <h5>Full Name</h5>
               <div class="sign__input">
                  <input type="text" placeholder="Full Name" id="name" class="txtOnly" required>
                   <span id='error_name' style='color:red;font-weight:500;'></span>
                  <i class="fal fa-user"></i>
               </div>
            </div>
            <div class="sign__input-wrapper mb-25">
               <h5>Email</h5>
               <div class="sign__input">
                  <input type="email" placeholder="Enter Your Email" id="email" required>
                   <span id='error_email' style='color:red;font-weight:500;'></span>
                  <i class="fal fa-envelope"></i>
               </div>
            </div>
            <div class="sign__input-wrapper mb-25">
               <h5>Phone Number</h5>
               <div class="sign__input">
                  <input type="num" placeholder="Enter Your Phone.No" id="phone" required>
                   <span id='error_phone' style='color:red;font-weight:500;'></span>
                  <i class="fal fa-mobile"></i>
               </div>
            </div>
         
         
            <button class="btn-primary w-100" type="button" id="prateek_sub" > Submit</button>
            <div class="sign__new text-center mt-20">
               <p>Already Register ? <a href="<?php echo base_url()?>Home/signin">Log In</a></p>
            </div>
         </form>
         
       
      </div>
      </div>
    </div>
  </div>
</div>
   <!--new design--->
                  <!--<div class="register-form" id="register-succ" style='display:none;' >-->
                  <!--      <h4>Thanks For Registration.</h4> -->
                  <!--      <h4 id='mun' style="font-size: 16px; margin: 0 0 10px;"></h4>-->
                  <!--      <h4 id='mup' style="font-size: 16px; margin: 0 0 10px;"></h4>-->
                  <!--      <a href='<?=base_url()?>Home/signin' class='btn btn-info' target='_blank'>Click Here To Login</a>-->
                  <!--  </div>-->
<!--<div class="register-form modal" tabindex="-1" role="dialog" id="register-succ" style='display:none;' >-->
<!--  <div class="modal-dialog" role="document">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h5 class="modal-title">Modal title</h5>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--       <h4>Thanks For Registration.</h4> -->
<!--                        <h4 id='mun' style="font-size: 16px; margin: 0 0 10px;"></h4>-->
<!--                        <h4 id='mup' style="font-size: 16px; margin: 0 0 10px;"></h4>-->
<!--                        <a href='<?=base_url()?>Home/signin' class='btn btn-info' target='_blank'>Click Here To Login</a>-->
<!--      </div>-->
<!--      <div class="modal-footer">-->
<!--        <button type="button" class="btn btn-primary">Save changes</button>-->
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->


<div class="register-form modal fade" id="register-succ2" data-bs-backdrop="static" data-bs-keyboard="false"style='display:none;' tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal_content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">Register Now Online Study Material</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">     
   
              <h4>Thanks For Registration.</h4> 
                        <h4 id='mun' style="font-size: 16px; margin: 0 0 10px;"></h4>
                        <h4 id='mup' style="font-size: 16px; margin: 0 0 10px;"></h4>
                        <a href='<?=base_url()?>Home/signin' class='btn btn-info' target='_blank'>Click Here To Login</a>
                    </div>
         
       
      </div>
    </div>
  </div>
</div>
                    <!---new design---->
    
       <script src="<?php echo base_url()?>assets/js/vendor/jquery-3.5.1.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/vendor/waypoints.min.js"></script>
      <!--<script src="<?php echo base_url()?>assets/assets/js/bootstrap.bundle.min.js"></script>-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="<?php echo base_url()?>assets/js/jquery.meanmenu.js"></script>
      <script src="<?php echo base_url()?>assets/js/swiper-bundle.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/jquery.fancybox.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/isotope.pkgd.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/parallax.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/backToTop.js"></script>
      <script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/ajax-form.js"></script>
      <script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/main.js"></script>

    <!--  <script src="site/js/vendor/modernizr-2.8.3.min.js"></script>-->
    <!--<script src="site/js/vendor/jquery-1.12.4.min.js"></script>-->
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    
         <script>
            $( document ).ready(function() {
                $( ".txtOnly" ).keypress(function(e) {
                    var key = e.keyCode;
                    if (key >= 48 && key <= 57) {
                        e.preventDefault();
                    }
                });
            });
			
			// Restricts input for the set of matched elements to the given inputFilter function.
// (function($) {
//   $.fn.inputFilter = function(inputFilter) {
//     return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
//       if (inputFilter(this.value)) {
//         this.oldValue = this.value;
//         this.oldSelectionStart = this.selectionStart;
//         this.oldSelectionEnd = this.selectionEnd;
//       } else if (this.hasOwnProperty("oldValue")) {
//         this.value = this.oldValue;
//         this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
//       } else {
//         this.value = "";
//       }
//     });
//   };
// }(jQuery));

// $(document).ready(function() {
//   $("#phone").inputFilter(function(value) {
//     return /^\d*$/.test(value);    // Allow digits only, using a RegExp
//   });
// });

        </script> 
<script>
$(document).ready(function(){
$("#prateek_sub").click(function(){
    event.preventDefault();
   var name=$('#name').val(); 
  var phone=$('#phone').val();
  var email=$('#email').val();
   var pass='<?php echo $pass=$this->pro->genpwd();?>';
   if(name==''){
      $('#error_name').html('Please Enter Name').show();
      
  }else if(phone==''){
      $('#error_phone').html('Please Enter Phone').show();
      
  }else if(email==''){
      $('#error_email').html('Please Enter Email').show();
  }else{
      	$.ajax({
				type : "POST",
				url  : "<?=base_url()?>home/register",
				data : {name:name,phone:phone,email:email,pass:pass,},
				success: function(data){
					      console.log(data);            
				if(data == "ee"){
                     
					    $('#error_email').html('Email already exist').show(); 
                         
					}else
					  {   
					  //  $('#register-form').hide();
                        $('#mun').html('Your UserId : '+email).show();
                         $('#mup').html('Password : '+pass).show();
                       // $('#register-succ').show();
                       $('#staticBackdrop').modal('hide');
                       $('#register-succ2').modal('show');
                        
					   $('#name').val(''); 
                       $('#phone').val('');
                        $('#email').val('');
                        
                        
                        
					    
					    
                       }     					
			
                }
			});
      
      
  }
});
});    
// Load Model  

</script>  
</body>
</html>