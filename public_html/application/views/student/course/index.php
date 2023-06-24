<?php
$std_id=$this->session->std_id;
$student_name=$stu_info[0]['master_name'];

$student_email=$stu_info[0]['master_email'];
$student_mobile=$stu_info[0]['master_mobile'];

$student_fname=$stu_info[0]['master_fname']; 
$student_mname=$stu_info[0]['master_mname'];
$student_class=$stu_info[0]['master_class'];
$student_graduate=$stu_info[0]['master_graduate'];
$student_graduate_name=$stu_info[0]['master_graduate_name'];
$student_image=$stu_info[0]['master_image'];
$student_address=$stu_info[0]['master_address'];


?>
<style>
.dropify-wrapper {
    display: block;
    position: relative;
    cursor: pointer;
    overflow: hidden;
    width: 100%;
    max-width: 100%;
    height: 150px;
    padding: 5px 10px;
    font-size: 14px;
    line-height: 22px;
    color: #777;
    background-color: #FFF;
    background-image: none;
    text-align: center;
    border: 2px solid #E5E5E5;
    -webkit-transition: border-color .15s linear;
    transition: border-color .15s linear;
}

.card .card-title {
    color: #E91E63;
    margin-bottom: 1.2rem;
    text-transform: capitalize;
    font-size: 17px;
    font-weight: 700;
}
.list-wrapper ul li {
    font-size: .9375rem;
   padding: 0rem 0rem; 
    border: 1px solid #c9ccd7;
    margin-bottom: 0.812rem;
    border-radius: 0px; 
}

</style>
 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            
    <?php if($student_fname=='' && $student_address==''){ ?>
    <div class="row">
    <div class="col-md-10 grid-margin stretch-card" id="add_view" style="display:block;">
        <div class="card">
            <div class="card-body"> 
            
                <h4 class="" style="font-family: cursive;font-size: 25px;color:#4CAF50;">Please Complete Your Profile</h4><br>
                <form method="post" action="student/dashboard/add_profile" enctype="multipart/form-data">
                    <div class="row"> 
                    <div class="form-group col-md-9">
                        <div class="row"> 
                    <div class="form-group col-md-12">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?=$student_name;?>" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?=$student_email;?>" disabled >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Number</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?=$student_mobile;?>" disabled >
                    </div>
                    </div>

                    </div>
                    <div class="form-group col-md-2">
                       <h4 class="card-title d-flex">Profile Image</h4>
                  <input type="file" name="pro_img" class="dropify" />  
                       
                    </div>
                    
               

                    
                    
                    <div class="form-group col-md-6">
                        <label>Father Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="fname" value="<?=$student_fname;?>" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Mother Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="mname" value="<?=$student_mname;?>" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Class / Study In</label>
                        <input type="text" class="form-control"  name="class" value="<?=$student_class;?>" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Address</label>
                        <input type="text" class="form-control"  name="Address" value="<?=$student_address;?>" required="">
                    </div>
                    

                <div class="form-group col-md-8">
                    </div>
                    <div class="form-group col-md-4">
                         <button type="submit" class="btn btn-success" style="float:right;">Submit</button>
                        </div>
                 
                    
                     </div> 
                </form>

            </div>                
        </div>
    </div>
    </div>        
         
    <?php
    }else{
$course_id=$demo_course_arr[0]['mcourses_id']; 
$course_id_en=$this->bm->base64_url_encode($course_id);


$course_name=$demo_course_arr[0]['mcourses_name'];        
$course_desc=$demo_course_arr[0]['mcourses_desc'];

$course_price=$demo_course_arr[0]['mcourses_price'];
$course_day=$demo_course_arr[0]['mcourses_duration'];
$course_link=$demo_course_arr[0]['mcourses_demo_link'];
$link_to_vedio=$this->pro->link_to_embed($course_link);

	
	
    ?> 
          <div class="row">
            <div class="col-md-12 grid-margin" style="margin-top: 50px;">
              <?php //$this->load->view('student/course/youtube'); ?>
                 <a href='student/dashboard'><button type="button"  class="btn btn-primary btn-rounded btn-fw">Back</button></a>
            </div>
          </div>
<?php
 $post=$this->uri->segment(5); 
 if($post=='plan'){
?>          
        <div class="row">
          
             
              <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-lg-12">
                      <h4 class="card-title"><?=$course_name;?></h4>
                      
                      </div>
                      
                      </div>
                  <p class="card-description">
                      
                      
                      <?=$course_desc;?>
                  <br > <br > <br >
   <style>
     .app-container {
  position: relative;
}

.banner-overlay {
    position: absolute;
    width: 100%;
    height: 360px;
    background-image: linear-gradient(to right, rgb(0,0,0,0), rgb(0,0,0,0) 50%, rgb(0,0,0,0));
    top: 0px;
    left: 0;
}
.banner-overlay1 {
    position: absolute;
    width: 85%;
    height: 30px;
    background-image: linear-gradient(to right, rgb(0,0,0,0), rgb(0,0,0,0) 50%, rgb(0,0,0,0));
    bottom: 0px;
    right: 0;
}
.banner-overlay2 {
    position: absolute;
    width: 50%;
    height: 30px;
    background-image: linear-gradient(to right, rgb(0,0,0,0), rgb(0,0,0,0) 50%, rgb(0,0,0,0));
    bottom: 0px;
    right: 0;
}
   .mejs__mediaelement iframe { pointer-events: none; }
   </style>
   
   <div class="app-container">
<?php 
if($course_link==''){}else{
?>
<iframe id='video' width="100%" height="400" src="<?=$link_to_vedio;?>&enablejsapi=1&html5=1" frameborder="0" ></iframe>
<?php
}
?>

  <div class="banner-overlay">
  </div>
  <div class="banner-overlay1">
  </div>
</div>
<div class="buttons">
  <!-- if we needed to change height/width we could use viewBox here -->
  <button type="button" id="play-button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="ti-control-play"></i>
                      </button>
                      
  <button type="button" id="pause-button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="ti-control-pause"></i>
                      </button>
  
</div>
  <script>
// https://developers.google.com/youtube/iframe_api_reference

// global variable for the player
var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
  // create the global player from the specific iframe (#video)
  player = new YT.Player('video', {
    events: {
      // call this function when player is ready to use
      'onReady': onPlayerReady,
         playerVars: {rel: 0, showinfo: 0, ecver: 2}
    }
  });
}

function onPlayerReady(event) {
  
  // bind events
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function() {
    player.playVideo();
  });
  
  var pauseButton = document.getElementById("pause-button");
  pauseButton.addEventListener("click", function() {
    player.pauseVideo();
  });
  
}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>



                  </p>
                  
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
								<div class="card-body">
									<h4 class="card-title">Post Question</h4>
									<div class="list-wrapper pt-2">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
										<?php
										$db_name=$this->session->db_name;
										$post_cdn="SELECT * FROM `education_center_post` WHERE `post_mcid`='$course_id'";
										$post_ar=$this->bm->quert($db_name,$post_cdn);
										
										foreach($post_ar as $post_er){
										    $post_id=$post_er['post_id'];
										    $post_id_en=$this->bm->base64_url_encode($post_id);
										    $post_title=$post_er['post_title'];
										?>
											<li id='unlock_<?=$post_id;?>'>
												<div class="form-check form-check-flat">
													<label class="form-check-label"><?=$post_title;?> </label>
												</div>
												 <i class="ti-unlock" style="color: #71c016;font-weight: 900;margin-left: 15px;"></i>
											</li>
<script>
    $("#unlock_<?=$post_id;?>").click(function(){
  //alert("The paragraph was clicked.");
   window.location.replace("student/course/myplan/<?=$course_id_en;?>/<?=$post_id_en;?>");
  
});
</script>											
										<?php
										}
										?>	
											
											
											
										</ul>
                  </div>
                  
								</div>
							</div> 
            
             </div>
            
       
        </div>  
 <?php
 }else{ 
 $vpost_id=$this->bm->base64_url_decode($post);
	$db_name=$this->session->db_name;
    $vpost_cdn="SELECT * FROM `education_center_post` WHERE `post_mcid`='$course_id' AND `post_id`=' $vpost_id'";
	$vpost_ar=$this->bm->quert($db_name,$vpost_cdn);
	
$vpost_title=$vpost_ar[0]['post_title'];	
$vpost_desc=$vpost_ar[0]['post_desc'];
$vpost_link=$vpost_ar[0]['post_link'];
$vlink_to_vedio=$this->pro->link_to_embed($vpost_link);
 ?>
     
     <div class="row">
          
             
              <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-lg-12">
                      <h4 class="card-title"><?=$course_name;?></h4>
                      
                      </div>
                      
                      </div>
                  <p class="card-description">
                      
                      
                      <?=$vpost_title;?>
                  <br > 
                  
     <?php 
if($vpost_link==''){}else{
?>             
   <style>
     .app-container {
  position: relative;
}

.banner-overlay {
    position: absolute;
    width: 100%;
    height: 360px;
    background-image: linear-gradient(to right, rgb(0,0,0,0), rgb(0,0,0,0) 50%, rgb(0,0,0,0));
    top: 0px;
    left: 0;
}
.banner-overlay1 {
    position: absolute;
    width: 85%;
    height: 30px;
    background-image: linear-gradient(to right, rgb(0,0,0,0), rgb(0,0,0,0) 50%, rgb(0,0,0,0));
    bottom: 0px;
    right: 0;
}
.banner-overlay2 {
    position: absolute;
    width: 50%;
    height: 30px;
    background-image: linear-gradient(to right, rgb(0,0,0,0), rgb(0,0,0,0) 50%, rgb(0,0,0,0));
    bottom: 0px;
    right: 0;
}
   .mejs__mediaelement iframe { pointer-events: none; }
   </style>
   
   <div class="app-container">
<iframe id="video" width="100%" height="400" src="<?=$vlink_to_vedio;?>?enablejsapi=1&html5=1" frameborder="2"  ></iframe>

  <div class="banner-overlay">
  </div>
  <div class="banner-overlay1">
  </div>
</div>
<div class="buttons">
  <!-- if we needed to change height/width we could use viewBox here -->
  <button type="button" id="play-button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="ti-control-play"></i>
                      </button>
                      
  <button type="button" id="pause-button" class="btn btn-outline-secondary btn-rounded btn-icon">
                        <i class="ti-control-pause"></i>
                      </button>
  
</div>
  <script>
// https://developers.google.com/youtube/iframe_api_reference

// global variable for the player
var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
  // create the global player from the specific iframe (#video)
  player = new YT.Player('video', {
    events: {
      // call this function when player is ready to use
      'onReady': onPlayerReady,
         playerVars: {rel: 0, showinfo: 0, ecver: 2}
    }
  });
}

function onPlayerReady(event) {
  
  // bind events
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function() {
    player.playVideo();
  });
  
  var pauseButton = document.getElementById("pause-button");
  pauseButton.addEventListener("click", function() {
    player.pauseVideo();
  });
  
}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>
<?php
}
?>
<?=$vpost_desc;?>

                  </p>
                  
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
								<div class="card-body">
									<h4 class="card-title">Post Question</h4>
									<div class="list-wrapper pt-2">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
										<?php
										$db_name=$this->session->db_name;
										$post_cdn="SELECT * FROM `education_center_post` WHERE `post_mcid`='$course_id' ORDER By `post_day` DESC";
										$post_ar=$this->bm->quert($db_name,$post_cdn);
										
										foreach($post_ar as $post_er){
										    $post_id=$post_er['post_id'];
										    $post_id_en=$this->bm->base64_url_encode($post_id);
										    $post_title=$post_er['post_title'];
										    
										    
										    
$myvpost_cdn="SELECT * FROM `education_center_view_post` WHERE `view_post_pid`='$post_id' AND `view_post_mc_id`='$course_id' AND `view_post_std_id`='$std_id'";
	$myvpost_ar=$this->bm->quert($db_name,$myvpost_cdn);
	$count_myvpost_ar=count($myvpost_ar);
										?>
											<li id='unlock_<?=$post_id;?>' <?php if($vpost_id==$post_id){ echo "style='background-color: #E91E63;color: white;font-weight: 700;'"; } 
											if($count_myvpost_ar!=0){ echo "style='background-color:#000000;color: white;font-weight: 700;'";}?>>
												<div class="form-check form-check-flat">
													<label class="form-check-label"><?=$post_title;?> </label>
												</div>
												 <i class="ti-unlock" <?php if($vpost_id==$post_id){ echo "style='color:#ffffff;font-weight: 900;margin-left: 15px;'"; }else{  echo "style='color:#71c016 ;font-weight: 900;margin-left: 15px;'"; }?>  ></i>
											</li>
<script>
    $("#unlock_<?=$post_id;?>").click(function(){
  //alert("The paragraph was clicked.");
       window.location.replace("student/course/myplan/<?=$course_id_en;?>/<?=$post_id_en;?>");

});
</script>											
										<?php
										}
										?>	
											
											
											
										</ul>
                  </div>
                  
								</div>
							</div> 
            
             </div>
            
       
        </div>  
     
     <?php } ?>         
<?php
}
?>           
        
        </div>
        <!-- content-wrapper ends -->
        