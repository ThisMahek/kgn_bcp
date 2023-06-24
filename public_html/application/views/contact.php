<?php include('includes/header.php')?>
      <!-- header area end -->

     

      <main>

         <!-- page title area start -->
         
<section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url()?>assets/image/page-title/page-title-2.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Contact</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url()?>index.php/Home/index">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Contact</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        
         <!-- page title area end -->

         <!-- contact area start -->
         <section class="contact__area pt-115 pb-120">
            <div class="container">
               <div class="row">
                         <?= $this->session->flashdata('success')?>
                                            <?= $this->session->flashdata('error')?>
                  <div class="col-xxl-7 col-xl-7 col-lg-6">
                     <div class="contact__wrapper">
                        <div class="section__title-wrapper mb-40">
                           <h2 class="section__title">Contact <span class="yellow-bg yellow-bg-big">Us<img src="<?php echo base_url()?>assets/assets/img/shape/yellow-bg.png" alt=""></span></h2>
                     
                        </div>
                        <div class="contact__form">
                           <form action="<?=base_url()?>Home/savecontact" method="post">
                              <div class="row">
                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="text" placeholder="Your Name" name="name" required>
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="email" placeholder="Your Email" name="email"required>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <input type="text" placeholder="Subject" name="subject" required>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <textarea placeholder="Enter Your Message" name="message" required></textarea>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-agree  d-flex align-items-center mb-20">
                                       <input class="e-check-input" type="checkbox" id="e-agree" required>
                                       <label class="e-check-label" for="e-agree">I agree to the<a href="#">Terms & Conditions</a></label>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__btn">
                                       <button type="submit" class="btn btn-primary">Send your message</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
                     <div class="contact__info white-bg p-relative z-index-1">
                        <div class="contact__shape">
                           <img class="contact-shape-1" src="assets/img/contact/contact-shape-1.png" alt="">
                           <img class="contact-shape-2" src="assets/img/contact/contact-shape-2.png" alt="">
                           <img class="contact-shape-3" src="assets/img/contact/contact-shape-3.png" alt="">
                        </div>
                        <div class="contact__info-inner white-bg">
                           <ul>
                              <li>
                                 <div class="contact__info-item d-flex align-items-start mb-35">
                                    <div class="contact__info-icon mr-15">
                                       <svg class="map" viewBox="0 0 24 24">
                                          <path class="st0" d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z"/>
                                          <circle class="st0" cx="12" cy="10" r="3"/>
                                       </svg>
                                    </div>
                                    <div class="contact__info-text">
                                       <h4>Address</h4>
                                       <p><a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">438/1A Behind Saint Judes School, Sar Sayyed Nagar, Nagra Jhansi UP , 284003</a></p>
   
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="contact__info-item d-flex align-items-start mb-35">
                                    <div class="contact__info-icon mr-15">
                                       <svg class="mail" viewBox="0 0 24 24">
                                          <path class="st0" d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z"/>
                                          <polyline class="st0" points="22,6 12,13 2,6 "/>
                                       </svg>
                                    </div>
                                    <div class="contact__info-text">
                                       <h4>Email us directly</h4>
                                       <p><a href="https://themepure.net/cdn-cgi/l/email-protection#b9caccc9c9d6cbcdf9dcddccdad8d597dad6d4"><span class="__cf_email__" data-cfemail="4f3c3a3f3f203d3b0f2a2b3a2c2e23612c2022">[Email:kgn.computer.academy@gmail.com]</span></a></p>
                                       <!-- <p><a href="https://themepure.net/cdn-cgi/l/email-protection#cda4a3aba28da8a9b8aeaca1e3aea2a0"> <span class="__cf_email__" data-cfemail="f1989f979eb194958492909ddf929e9c">[Appointments&#160;kgn.computer.academy@gmail.com]</span></a></p> -->
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="contact__info-item d-flex align-items-start mb-35">
                                    <div class="contact__info-icon mr-15">
                                       <svg class="call" viewBox="0 0 24 24">
                                          <path class="st0" d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z"/>
                                          </svg>
                                    </div>
                                    <div class="contact__info-text">
                                       <h4>Phone</h4>
                                       <p><a href="tel:+076178 55680">91+9999999999</a></p>
                                       <p><a href="tel:+076178 55680">91+9999999999</a></p>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <div class="contact__social pl-30">
                              <h4>Follow Us</h4>
                              <ul>
                                 <li><a href="#" class="fb" ><i class="social_facebook"></i></a></li>
                                 <li><a href="#" class="tw" ><i class="social_twitter"></i></a></li>
                                 <li><a href="#" class="pin" ><i class="social_pinterest"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact area end -->
         
           <section>
            <div class="container p-0">
               <div class="row">
                  <div class="col-xxl-12">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14412.925812621828!2d78.5319724!3d25.4305244!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397770f20085288f%3A0xde23ca1785a5e63c!2sKGN%20Computer%20Academy!5e0!3m2!1sen!2sin!4v1675055131941!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact info area start -->
        
         <!-- footer area start -->
         <?php include('includes/footer.php')?>

