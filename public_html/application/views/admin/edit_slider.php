<?php include('includes/header.php')?>
<?php include('includes/sidebar.php')?>
<style>
    input{
        display:none;
    }
    </style>


<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Slider </h4>
                       
                    </div>
                    <div class="card-body p-4">
                    <form action="<?=base_url()?>Slider/updateslider" method="post"  enctype="multipart/form-data" >
                    <input type="hiddden" name="id" value="<?=$result->id?>">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">
                            <div class="form-group row mb-4">
                                    <label class="col-form-label col-12 col-md-2 col-lg-2">Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags" name="title" value="<?=$result->title?>"required="">
                                      </div>
                                </div>
                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Add Images</label>
                                <div class="col-sm-12 col-md-7">
                                <div class="mb-3">
                                    <input class="form-control" type="file" id="formFile" name="slider_img" onchange="preview(this)">
                                    <img class="img-thumbnail rounded-circle avatar-xl image" alt="300x200" src="<?php echo base_url()?><?=$result->slider_img?>" data-holder-rendered="true">
                                    <span id="sp_messag2" style="color:red"></span>
                                </div>
                                
                                </div>
                                </div>
                              
                            
                                <button type="submit" name="update" id="btn2" class="btn btn-info start-btn w-20" value="1">Update</button>
                                    
                           
                            </div>
</form>
                         
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
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
                    document.getElementById('sp_messag2').innerHTML= '\n Please upload file having extensions .jpeg, .png, .jpeg only.';
                      document.getElementById("btn2").disabled=true;
                          // return false;
                       }else{
                           //Image preview
                           if (image.files && image.files[0]) {
               				var reader = new FileReader();
               				reader.onload = function (e){
               					$('.image')
               						.attr('src', e.target.result)
               						.width(110)
               						.height(70);
               						document.getElementById('sp_messag2').innerHTML=" ";
               						  document.getElementById("btn2").disabled=false;
               				};
               				reader.readAsDataURL(image.files[0]);
               		 }
                       }
              
       	}
       	
    </script>
