<?php include('includes/header.php')?>
      <!-- header area end -->

  

      <main>
           <!-- page title area start -->
           <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url()?>assets/image/page-title/page-title-2.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Course</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url()?>Home/index">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">About</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->
  <!-- course area start -->
  <section class="course__area pt-115 pb-120 grey-bg">
            <div class="container">
         
               <div class="row grid">
                <?php
                   foreach($course as $row)
                   {
                   ?>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat2 cat4" >
                     <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix">
                           <a href="#">
                              <img src="<?php echo base_url()?><?=$row->course_img?>" alt="" height="200px" width="100%">
                           </a>
                        </div>
                        <div class="course__content">                    
                           <h3 class="course__title"><a href="#"><?=$row->title?></a></h3> 
                           <p><?=$row->description?></p>                    
                        </div>
                   
                     </div>
                  </div>
                 <?php }?>
                 
            
               </div>
            </div>
         </section>
         <!-- course area end -->

 <!-- teacher area start -->

         <!-- cta area start -->
         <?php include('includes/footer.php')?>
