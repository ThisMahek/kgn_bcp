
      <div class="main-panel">        
        <div class="content-wrapper">

           <!--Success message-->
                  
            <?php $add_succ=$this->session->flashdata('add_succ');
            if($add_succ){
            ?>
            <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $add_succ;?></strong> 
                       </div>
                  <?php } ?>
                  
                  <!--Delete message-->
                  
            <?php $del_succ=$this->session->flashdata('del_succ');
            if($del_succ){
            ?>
            <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $del_succ;?></strong> 
                       </div>
                  <?php } ?>

            <div class="row">
             <div class="col-md-12 grid-margin" style="margin-top: 50px;">
                <a href="student/dashboard"><button type="button" class="btn btn-primary btn-rounded btn-fw">Back</button></a> 
                 
             </div>
           </div>

          <div class="row"> 
             <div class="col-md-2"></div>
             
             <div class="col-md-8 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4>All News</h4><br>
									
								<div class="d-flex align-items-center pt-4 pb-4 border-bottom">
								    <?php
								    $pdf=$show_news[0]['news_pdf'];
								    if($pdf==""){?>
								        
								     <img class="img-sm rounded-circle" src="assets/non_pdf.png" alt="profile">
								      
								    <?php }else{?>
								        
								     <img class="img-sm rounded-circle" src="assets/pdf.png" alt="profile">
								      
								   <?php }?>
								   
								 <div class="ml-3">
									<h4><?php echo $show_news[0]['news_title'];?></h4>
									<p><?php echo $show_news[0]['news_dis'];?></p>
									<small class="text-muted mb-0">
									    <i class="ti-calendar menu-icon"></i> 
									    <?php 
									    $dte= $show_news[0]['news_date'];
									    echo date("j F, Y", strtotime($dte));
									    ?>
									</small>
								</div>
							</div>
							 <?php
								  $pdf=$show_news[0]['news_pdf'];
								if($pdf==""){}else{?>
							<iframe src="upload/news/<?php echo $show_news[0]['news_pdf']; ?>" width="100%" height="600px;"></iframe>
							<?php }?>
						</div>
					</div>
				</div>
				
			 <div class="col-md-2"></div>
          </div>

      </div>
        
