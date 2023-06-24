<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CSV extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("CSV_Model", "CV");
       	$this->load->library('Excel');       
        if (!$this->session->userdata('admin_id')) {

            redirect(base_url() . "Login/manage_login");
        }

    }


    public function upload_csv()
    {
        
        $this->load->view('admin/upload_csv');
    }
    public function result_list()
    {
        $data['result']=$this->db->where('status!=',2)->get('education_center_result')->result();
        $this->load->view('admin/result_list',$data);
    }
    

    public function upload_csv_file()
    {
        
            if (isset($_FILES['title'])) {
                if (!is_dir('./assets/')) {
                    mkdir('./assets/');
                }
                $config['upload_path'] = './assets/';
                $config['allowed_types'] = 'csv';
                $config['max_size'] = 100;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('title')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                }
                else {
                    $data = $this->upload->data();
                    $path = "./assets/" . $data['file_name'];
                    $fileName = fopen($path, "r");
                    $array =array();
                    $index = 0;


                    while (!feof($fileName))
                     {
                        $key = fgetcsv($fileName);
                        // print_r($key);

                        if ($index != 0 && !empty($key))
                         {  
                            
                            $res_data=$this->db->where('result_enrollment_id',$key['5'])->get('result')->num_rows();
                      
                            $array[] = array(

                                'result_id' => $key['0'],
                                'result_candidate_name' => $key['1'],
                                'result_father_name' => $key['2'],
                                'result_course_name' => $key['3'],
                                'result_registration_no' => $key['4'],
                                'result_enrollment_id' => $key['5'],
                                'result_registration_date' => $key['6'],
                                'result_center_name' => $key['7'],
                                'result_center_code' => $key['8'],
                                'result_center_location' => $key['9'],
                                'result_center_district' => $key['10'],
                                'result_state' => $key['11'],
                               'status'=>1,
                            );
                    
                        }
                      
                        //echo $index;

                        $index++;
                    }
             
                     
                        if($res_data>0)
                        {
                            
                            $x=$this->db->where('status',1)->update_batch('result', $array,'result_enrollment_id');
                        //    echo $this->db->last_query();die();
                        }
                        else
                        {
                        $x = $this->db->insert_batch('result', $array);
                        }
                    if($x)
                    {
                     $this->session->set_flashdata('success', ' 
           <div class="alert alert-success alert-dismissible fade show">
              <strong>Success!</strong> CSV Upload successfully
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
           </div>
           ');
                     
                    }
                else
                    {
                     $this->session->set_flashdata('error', ' 
           <div class="alert alert-danger alert-dismissible fade show">
             <strong>Error!</strong> Unable to  Upload CSV
             <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
           </div>

           ');
                    }
                    redirect(base_url()."CSV/upload_csv");

                    // print_r($array);
                    // die();
                   
                }

            }

        }
        public function  update_result_status()
    { 
       $tab =  'result';
       $id = $_GET['id'];
       $sval = $_GET['status'];
    
     if($sval == 1)
       {
         $status = 0;
       }
     else
       {
         $status = 1;
       }
    
     $data = array(
             'status'=> $status
            );
            $x=  $this->db->where('id',$id)->update('result',$data);
        
           if($x)
             {
              $this->session->set_flashdata('success', ' 
    <div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong> Status Updated successfully
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
              
             }
         else
             {
              $this->session->set_flashdata('error', ' 
    <div class="alert alert-danger alert-dismissible fade show">
      <strong>Error!</strong> Unable to  Update Status
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    ');
             }
             redirect(base_url()."CSV/result_list");
    }
       
  

    }

