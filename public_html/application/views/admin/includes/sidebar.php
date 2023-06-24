 <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="<?= base_url()?>Admin/index">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>Student/all_student">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                    <span data-key="t-apps">All Student</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    <span data-key="t-apps">Slider Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="<?php echo base_url()?>Slider/manage_slider">
                                            <span data-key="t-chat">Slider</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>Slider/add_slider">
                                            <span data-key="t-chat">Add Slider</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                       
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                    <span data-key="t-apps">Course Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="<?php echo base_url()?>Course/manage_course">
                                            <span data-key="t-chat">Course</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>Course/add_course">
                                            <span data-key="t-chat">Add Course</span>
                                        </a>
                                    </li>
                                   
        
                                </ul>
                            </li>
 
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                <i class="fa fa-camera" aria-hidden="true"></i>
                                    <span data-key="t-apps">Gallery Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="<?php echo base_url()?>Gallery/manage_gallery">
                                            <span data-key="t-chat">Gallery</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>Gallery/add_gallery">
                                            <span data-key="t-chat">Add Gallery</span>
                                        </a>
                                    </li>
            
                                      <li>
                                        <a href="<?php echo base_url()?>Gallery/add_gallery_category">
                                            <span data-key="t-chat">Add Gallery Category</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>Gallery/manage_gallery_category">
                                            <span data-key="t-chat">Manage Gallery Category</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                    <span data-key="t-apps">Testimonial Manage</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="<?php echo base_url()?>Testimonial/manage_Testimonial">
                                            <span data-key="t-chat">Testimonial</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>Testimonial/add_testimonial">
                                            <span data-key="t-chat">Add Testimonial</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <!--<li>-->
                            <!--    <a href="javascript: void(0);" class="has-arrow">-->
                            <!--    <i class="fa fa-map-marker" aria-hidden="true"></i>-->
                            <!--        <span data-key="t-apps">Address Management</span>-->
                            <!--    </a>-->
                                <!--<ul class="sub-menu" aria-expanded="false">-->
                                <!--    <li>-->
                                <!--        <a href="<?php echo base_url()?>Address/manage_address">-->
                                <!--            <span data-key="t-chat">Address Management</span>-->
                                <!--        </a>-->
                                <!--    </li>-->
                                <!--    <li>-->
                                <!--        <a href="<?php echo base_url()?>Address/add_address">-->
                                <!--            <span data-key="t-chat">Add Address</span>-->
                                <!--        </a>-->
                                <!--    </li>-->
                                   
                                <!--</ul>-->
                            <!--</li>-->
                            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                <i class="fa fa-newspaper" aria-hidden="true"></i>
                                    <span data-key="t-apps">Running Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="<?php echo base_url()?>Running/manage_running">
                                            <span data-key="t-chat">Running</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>Running/add_running">
                                            <span data-key="t-chat">Add Running</span>
                                        </a>
                                    </li>
                                   
                                </ul>

                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                <i class="fa fa-newspaper" aria-hidden="true"></i>
                                    <span data-key="t-apps">Result Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="<?php echo base_url()?>CSV/upload_csv">
                                            <span data-key="t-chat">Upload Result</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>CSV/result_list">
                                            <span data-key="t-chat">Result</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                                
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                <i class="fa fa-newspaper" aria-hidden="true"></i>
                                    <span data-key="t-apps">Enquiry Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="<?php echo base_url()?>admin/manage_enquiry">
                                            <span data-key="t-chat">Manage Enquiry</span>
                                        </a>
                                    </li>

                                   
                                </ul>

                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->