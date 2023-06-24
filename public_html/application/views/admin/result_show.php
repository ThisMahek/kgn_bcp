<style>
    .cart-table-content table tbody > tr td {
    color: #333;
    font-size: 15px;
    padding: 10px 0;
    text-align: center;
}
.cart-table-content table thead > tr th {
    border-top: medium none;
    color: #333;
    font-size: 14px;
    font-weight: 500;
    padding: 10px 50px 10px;
    text-align: center;
    text-transform: uppercase;
    vertical-align: middle;
    white-space: nowrap;
}
.cart-table-content table thead > tr {
    background-color: #00a651;
    border: 1px solid #00a651;
}
.bold{
 font-weight: 600;
}
</style>

<div class="contact-area pt-10 pb-130">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-4">
                <div class="contact-form">
                    <div class="contact-title mb-45">
                        <h2>Result <span></span></h2>
                        <p>Please enter your enrollment No given by the Institute to get your data.</p>
                    </div>
                    <?php
                     $enroll=$this->input->post('enrollment');
                    ?>
                    <form method="post" action="<?=base_url()?>result/result_show" >
                        <label>Enter Enrollment</label>
                        <input type="text" name="enrollment" value="<?php echo $enroll;?>" placeholder="Enter Enrollment" required>
                        
                        <button class="submit btn-style" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-8">
                <?php 
                $cont=count($show_result);
                print_r($show_result);
                if($cont>0){?>
                    <div class="table-content table-responsive cart-table-content pt-130">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                   <th colspan="2" style="color:#fff;">Result</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                   <td class="product-name bold">Enrollment ID</td>
                                   <td class="product-name"><?php echo $show_result['result_enrollment_id'];?></td>
                                </tr>
                                
                                <tr>
                                   <td class="product-name bold">Candidate Name</td>
                                   <td class="product-name"><?php echo $show_result['result_candidate_name'];?></td>
                                </tr>
                                
                                 <tr>
                                   <td class="product-name bold">Father Name</td>
                                   <td class="product-name"><?php echo  $show_result['result_father_name'];?></td>
                                </tr>
                                
                                <tr>
                                   <td class="product-name bold">Course Name</td>
                                   <td class="product-name"><?php echo  $show_result['result_course_name'];?></td>
                                </tr>
                                
                                <tr>
                                   <td class="product-name bold">Registration No</td>
                                   <td class="product-name"><?php echo  $show_result['result_registration_no'];?></td>
                                </tr>
                                
                                <tr>
                                   <td class="product-name bold">Registration Date</td>
                                   <td class="product-name"><?php echo  $show_result['result_registration_date'];?></td>
                                </tr>
                                
                                <tr>
                                   <td class="product-name bold">Center Name</td>
                                   <td class="product-name"><?php echo  $show_result['result_center_name'];?></td>
                                </tr>
                                
                                <tr>
                                   <td class="product-name bold">Center Code</td>
                                   <td class="product-name"><?php echo  $show_result['result_center_code'];?></td>
                                </tr>
                                
                                <tr>
                                   <td class="product-name bold">Center Location</td>
                                   <td class="product-name"><?php echo  $show_result['result_center_location'];?></td>
                                </tr>
                                
                                 <tr>
                                   <td class="product-name bold">Center District</td>
                                   <td class="product-name"><?php echo  $show_result['result_center_district'];?></td>
                                </tr>
                                
                                <tr>
                                   <td class="product-name bold">State</td>
                                   <td class="product-name"><?php echo  $show_result['result_state'];?></td>
                                </tr>
                               
                            </tbody>
                            
                        </table>
                    </div>
                <?php }else{
                
                    //echo "<script>alert('Enrollment Number does not exist !')</script>";
                 }?>
            </div>
        </div>
    </div>
</div><br><br><br>