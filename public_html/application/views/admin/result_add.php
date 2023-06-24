
 <div class="main-panel">        
        <div class="content-wrapper">

           <!--Success message-->
                  
                   <?php $add_succ=$this->session->flashdata('msg');

            if($add_succ){

            ?>

            <div class="alert alert-success alert-dismissible">

            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                        <strong><?php echo $add_succ;?></strong> 

                       </div>

                  <?php } ?>

       
            <div class="">
            
               </div>
       
                  <?php $not_succ=$this->session->flashdata('msg1');

            if($not_succ){

            ?>

      

            <div class="alert alert-danger alert-dismissible">

            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                        <strong><?php echo $fill_succ;?></strong> 

                       </div>

                  <?php } ?>

              <!--Delete message-->
                  
             
            <div class="">
           
            </div>
               

          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card px-3">
                <div class="card-body">
                 
                  <div class="row lightGallery">
                                     
              
          
            

             
                  <div class="">
    <br />
    <h3 align="center"></h3>
    <form   action="<?php echo base_url();?>result/importFile" method="post"  enctype="multipart/form-data">
      <p><label>UPLOAD only .xlsx .xls .csv format files</label>
      <input type="file" name="uploadFile"  value="" /></p>
      <br />
      <input type="submit" name="submit" value="Upload" class="btn btn-info" />
    </form>
   </div>
                

                <div class="">
    <br />
    <h3 align="center"></h3>
    <form   action="<?php echo base_url();?>result/download" method="post"  enctype="multipart/form-data">
      <p><label>Click below to download Excel sheet</label>
      <br>
      <br>
      <a href="<?php echo base_url();?>result/download" download> Click to Download </a>
     
    </form>
   </div>
                </div> 
             

           
                 
                  </div>
                </div>
              </div>
            </div>
          </div>        


        
      

