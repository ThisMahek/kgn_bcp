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
                        <h4 class="card-title">Add Running </h4>
                       
                    </div>
                    <div class="card-body p-4">
                    <form action="<?=base_url()?>Running/SaveRunning" method="post"  >
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">
                            <div class="form-group row mb-4">
                                    <label class="col-form-label col-12 col-md-2 col-lg-2">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags" name="title" vrequired>
                                      </div>
                                </div>
                                <div class="form-group row mb-4">
                                <label for="exampleFormControlTextarea1" class="col-form-label col-12 col-md-2 col-lg-2">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                      </div>
                                </div>
 
                              
                            
                          
                                <button type="submit" class="btn btn-info start-btn w-20" id="btn">Submit</button>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
</form>
        <!-- end row -->
      

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

</div>
<!-- end main content-->
<?php include('includes/footer.php')?>
