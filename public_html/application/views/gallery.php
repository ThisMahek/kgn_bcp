<?php include('includes/header.php')?>
  

    <!-- page title area start -->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url()?>assets/image/page-title/page-title-2.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Gallery</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url()?>Home/index">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->
            <!-- course area start -->
            <section class="course__area pt-200 pb-120 grey-bg">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-xxl-12 col-xl-12 col-lg-12">
                     <div class="course__menu justify-content-center mb-60">
                        <div class="masonary-menu filter-button-group">
                            <?php
                            foreach($gallery_category as $row){
                            ?>
                        <button class="btn btn-primary" data-filter="#cat1<?=$row->id?>"><?=$row->title?></button>
                          <?php }?>
                       </div>
                     </div>
                  </div>
               </div>
               <div class="row grid">
                   <?php             
                            foreach($gallery as $row_gallery){
                               
                            ?>
                             
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item" id="cat1<?=$row_gallery->cat_id?>">
                     <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix">
                           <a href="#">
                              <img src="<?php echo base_url()?><?=$row_gallery->gallery_img?>" alt="">
                           </a>
                        </div>
                        <div class="course__content pb-3">                    
                           <h3 class="course__title"><a href="#"><?=$row_gallery->title?></a></h3> 
                        </div>
                     </div>
                  </div>
                 
            <?php }?>
               </div>
            </div>
         </section>
         <!-- course area end -->

         <!-- footer area start -->
         <?php include('includes/footer.php')?>

