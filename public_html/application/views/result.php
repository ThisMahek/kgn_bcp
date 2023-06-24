<?php include('includes/header.php')?>

<section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url()?>assets/image/page-title/page-title-2.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Result</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url()?>index.php/Home/index">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Result</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>


            <!-- checkout-area start -->
            <section class="checkout-area">
               <div class="container">
                  <!-- <form action="#" onsubmit="filter_data()"> -->
                     <div class="row pt-100 pb-30">
                           <div class="col-lg-4">
                              <div class="checkbox-form">                           
                                  <h3>Result</h3>

                                <h6>Please enter your enrollment No given by the Institute to get your data.</h6>
                                    <?php
                                    $enroll=$this->input->post('enrollment');
                                    ?>
                                    <form method="post" action="<?=base_url()?>index.php/Home/result" >
                                    <div class="checkout-form-list">

                                    <label class="text-dark">Enrollment.No<span class="required">*</span></label>
                                    <input type="text" name="enrollment" value="<?php echo $enroll;?>" placeholder="Enter Enrollment" required>
                                    </div>
                                    
                        <button class="btn btn-primary start-btn w-20"type="submit">Submit</button>
                                 
                               <!-- </form> -->
                               </div>
                           </div>
                 
                           <div class="col-lg-8 mt-5" id="res_data">
                           <?php 
                            
                
                if(!empty($data))
                
                {?>
                           <table class="table">

		<thead>
			<tr>
			<th colspan="2" class="text-center">Result</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>Enrollment ID</th>
				<td><?=$data->result_enrollment_id?></td>
			</tr>
			<tr>
				<th>Candidate Name</th>
				<td><?=$data->result_candidate_name?></td>
			</tr>
			<tr>
				<th>Father Name</th>
				<td><?=$data->result_father_name?></td>
			</tr>
			<tr>
				<th>Course Name</th>
				<td><?=$data->result_course_name?></td>
			</tr>
			<tr>
				<th>Registration No</th>
				<td><?=$data->result_registration_no?></td>
			</tr>
			<tr>
				<th>Registration Date</th>
				<td><?=$data->result_registration_date?></td>
			</tr>
			<tr>
				<th>Center Name</th>
				<td><?=$data->result_center_name?></td>
			</tr>
			<tr>
				<th>Center Code</th>
				<td><?=$data->result_center_code?></td>
			</tr>
			<tr>
				<th>Center Location</th>
				<td><?=$data->result_center_location?></td>
			</tr>
			<tr>
				<th>Center District</th>
				<td><?=$data->result_center_district?></td>
			</tr>
			<tr>
				<th>State</th>
				<td><?=$data->result_state?></td>
			</tr>
		</tbody>
		</table>
      <?php }else{
                echo '<h3>Enrollment Number does not exist</h3>';
                //echo "<script>alert('Enrollment Number does not exist !')</script>";
               }?>
      </div>
                
                           </div>
                     </div>
                  </form>
               </div>
         </section>
         <!-- checkout-area end -->
<?php include('includes/footer.php')?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  JS File -->
    
<!----<script>
$(document).ready(function() {
    $('#btn_2').click(function() {
       var res=$('#res').val();
       $.ajax({
            url:'<?=base_url("home/fetch_data")?>',
            method:"POST",
            data:{res:res}, 
            success:function(data)
            {
              $('#res_data').html(data); 
            }
            
    } );
} );
} );
 
        </script>-->