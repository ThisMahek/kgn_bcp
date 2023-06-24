
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <?php
                $seg=$this->uri->segment(3);
                if($seg=="corse_edit"){?>

                  <form method="post" action="master/courses/corse_update" enctype="multipart/form-data">

                 <input type="hidden" name="edit_id" value="<?php echo $show_edit[0]['courses_id'];?>">   


                  <div class="form-group">
                    <label>Title</label>
                      <input type="text" class="form-control" placeholder="Enter title" name="title" value="<?php echo $show_edit[0]['courses_title'];?>">
                      <?php echo form_error('title', '<div class="error" style="font-weight:600;color:red">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea rows="12" name="des" placeholder="Enter description" class="form-control"><?php echo $show_edit[0]['courses_dis'];?></textarea>
                    <?php echo form_error('des', '<div class="error" style="font-weight:600;color:red">', '</div>'); ?>    
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter price" value="<?php echo $show_edit[0]['courses_price'];?>" name="price" id="txtChar" onkeypress="return isNumberKey(event)"> <?php echo form_error('price', '<div class="error" style="font-weight:600;color:red">', '</div>'); ?>  
                  </div>                                         
                 <div class="form-group">
                   <label>Image Upload</label>
                  <input type="file" name="courses_img" class="dropify" /> 
                  <img src="upload/courses/<?php echo $show_edit[0]['courses_img'];?>" style="height: 200px;width: 250px;">              
                  </div><br> 

                <button type="submit" class="btn btn-info" style="float:right;">Update</button>
                </form>

                <?php }else{?>

                  <form method="post" action="master/courses" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Title</label>
                      <input type="text" class="form-control" placeholder="Enter title" name="title">
                      <?php echo form_error('title', '<div class="error" style="font-weight:600;color:red">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea rows="12" name="des" placeholder="Enter description" class="form-control"></textarea>
                    <?php echo form_error('des', '<div class="error" style="font-weight:600;color:red">', '</div>'); ?>    
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter price" name="price" id="txtChar" onkeypress="return isNumberKey(event)"> <?php echo form_error('price', '<div class="error" style="font-weight:600;color:red">', '</div>'); ?>  
                  </div>                                         
                 <div class="form-group">
                   <label>Image Upload</label>
                  <input type="file" name="courses_img" class="dropify" />                  
                  </div><br> 

                <button type="submit" class="btn btn-info" style="float:right;">Submit</button>
                </form>

                <?php }?> 
                  
                </div>                
              </div>
            </div>            
          </div>

          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Courses Table</h4>
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Image</th>
                          <th>Action</th>
                            
                        </tr>
                      </thead>
                      <tbody>                        
                      <?php
                        foreach($show_courses as $k=>$v){

                          $idd=$v['courses_id'];
                          $id=$this->bm->base64_url_encode($idd);
                        ?>
                        <tr>
                          <td><?php echo $k+1;?></td>
                          <td><?php 
                          $tl= $v['courses_title'];
                          echo substr($tl,0,30);
                          ?></td>
                          <td><?php 
                          $ds= $v['courses_dis'];
                          echo substr($ds,0,80);
                          ?></td>
                          <td><?php echo $v['courses_price'];?></td>
                          <td><img src="upload/courses/<?php echo $v['courses_img'];?>"></td>  

                          <td>
                            <div class="btn-group">
                            <button type="button" class="btn btn-outline-danger btn-sm dropdown-toggle" data-toggle="dropdown">Action</button>
                            <div class="dropdown-menu">
                              <a href="master/courses/corse_edit/<?php echo $id;?>" class="dropdown-item">Edit</a>
                              <a onclick="return confirm('Are you sure delete this?')" href="master/courses/corse_delete/<?php echo $id;?>" class="dropdown-item">Delete</a>                              
                            </div>                          
                          </div>
                          </td>

                        </tr> 
                        <?php }?>                       
                      </tbody>
                    </table>
                  </div>



                </div>
              </div>
            </div>
          </div>

      </div>
        
        <SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>