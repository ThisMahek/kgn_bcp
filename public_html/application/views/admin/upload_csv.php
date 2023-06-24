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
                        <h4 class="card-title">Upload Result </h4>
                        <?= $this->session->flashdata('success')?>
                                            <?= $this->session->flashdata('error')?>
                       
                    </div>
                    
                    <div class="card-body p-4">
                    <form action="<?php echo base_url();?>result/importFile" method="post"  enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">
                            <div class="form-group row mb-4">
                                    <label class="col-form-label col-12 col-md-2 col-lg-2">File</label>
                                    <div class="col-sm-12 col-md-7">
                                    <p><label>UPLOAD only .xlsx .xls .csv format files</label>
                                        <input type="file" name="uploadFile"   class="form-control inputtags"  onchange="preview(this)"  required>
                                        <span id="sp_msg" style="color:red"></style>
                                      </div>
                                </div>
                                
                                <input type="submit" name="submit"  class="btn btn-info start-btn w-20" id="btn"value="Upload" class="btn btn-info" />
                           
                                <!-- <button type="submit" class="btn btn-info start-btn w-20" id="btn" name="submit">Upload</button> -->
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
</form>
<form   action="<?php echo base_url();?>result/download" method="post"  enctype="multipart/form-data">
      <p><label>Click below to download Excel sheet</label><br/>
      <a href="<?php echo base_url();?>result/download" download> Click to Download </a>
     
    </form>
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
                     
                       var allowedExtensions = /(\.csv|\.xls|\.xlsx )$/i;
                       if(!allowedExtensions.exec(filePath))
                       {
                    document.getElementById('sp_msg').innerHTML= '\n Please upload file having  .csv only.';
                      document.getElementById("btn").disabled=true;
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
               						document.getElementById('sp_msg').innerHTML=" ";
               						  document.getElementById("btn").disabled=false;
               				};
               				reader.readAsDataURL(image.files[0]);
               		 }
                       }
              
       	}
       	
    </script>