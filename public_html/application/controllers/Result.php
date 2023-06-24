<?php
class Result extends CI_Controller {

 Public function __construct()
        {
			parent:: __construct();
		     $this->load->model("CSV_Model", "CV");
		     		//$this->load->model('result_model', 'import');
		     			$this->load->library('Excel');              
      }

public function download()
{
   $this->load->helper('download');
   force_download(APPPATH.'../assets/result.xlsx', NULL);
}

	public function index()
{
	$this->load->view('admin/result_add');
	}
			public function result_show()
			{
			//$db_name="default";
			$enrollment=$this->input->post('enrollment');
			$x=$this->db->where('result_enrollment_id',$enrollment)->get('education_center_result')->row_array();
			$get_result['show_result']=$x;
		//	$data['show_result']=$this->bm->quert($db_name,$get_result);
			$this->load->view('admin/result_show', $get_result);
			}

//   public function importFile(){
  
//       if ($this->input->post('submit'))
//       {
       
           
//                 $path = 'assets/';
//                 require_once APPPATH . "/third_party/PHPExcel.php";
//                 $config['upload_path'] = $path;
//                 $config['allowed_types'] = 'xlsx|xls|csv';
//                 $config['remove_spaces'] = TRUE;
//                 $this->load->library('upload', $config);
//                 $this->upload->initialize($config);            
//                 if (!$this->upload->do_upload('uploadFile')) {
//                     $error = array('error' => $this->upload->display_errors());
//                 } else {
//                     $data = array('upload_data' => $this->upload->data());
//                 }
//                 if(empty($error)){
//                   if (!empty($data['upload_data']['file_name'])) {
//                     $import_xls_file = $data['upload_data']['file_name'];
//                 } else {
//                     $import_xls_file = 0;
//                 }
             
//                 $inputFileName = $path . $import_xls_file;
                  
//                 try {
//                     $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
//                     $objReader = PHPExcel_IOFactory::createReader($inputFileType);
//                     $objPHPExcel = $objReader->load($inputFileName);
//                     $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
//                     $flag = true;
//                     $i=0;
//                       print_r($inputFileType);exit;
//                     foreach ($allDataInSheet as $value) {
//                       if($flag){
//                         $flag =false;
//                         continue;
//                       }
//                       $inserdata[$i]['result_id'] = $value['A'];
//                       $inserdata[$i]['result_candidate_name'] = $value['B'];
//                       $inserdata[$i]['result_father_name'] = $value['C'];
//                       $inserdata[$i]['result_course_name'] = $value['D'];
//                       $inserdata[$i]['result_registration_no'] = $value['E'];
//                       $inserdata[$i]['result_enrollment_id'] = $value['F'];
//                       $inserdata[$i]['result_registration_date'] = $value['G'];
//                       $inserdata[$i]['result_center_name'] = $value['H'];
//                       $inserdata[$i]['result_center_code'] = $value['I'];
//                       $inserdata[$i]['result_center_location'] = $value['J'];
//                       $inserdata[$i]['result_center_district'] = $value['K'];
//                       $inserdata[$i]['result_state'] = $value['L'];
//                       $i++;
                    
//                     }               
//                     $result = $this->CV->importData($inserdata);   
//                   // print_r($value['F']);exit;
//                   //  echo $this->db->last_query();die();
//                      if($result){
//                       $this->session->set_flashdata("msg", "file uploaded");

//                         redirect('CSV/upload_csv');

//                       //   echo "Imported successfully";
            
//                     }else{
//                       echo "ERROR !";
//                     }             
      
//               } catch (Exception $e) {
//                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
//                             . '": ' .$e->getMessage());
//                 }
//               }else{
//                   echo $error['error'];
//                 }
//               }
//          }

public function importFile(){
  
      if ($this->input->post('submit'))
       {
           
                $path = 'assets/uploads/';
                 require_once APPPATH . 'third_party/PHPExcel.php';
                //require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      //$inserdata[$i]['result_id'] = $value['A'];
                      $inserdata[$i]['result_candidate_name'] = $value['B'];
                      $inserdata[$i]['result_father_name'] = $value['C'];
                      $inserdata[$i]['result_course_name'] = $value['D'];
                      $inserdata[$i]['result_registration_no'] = $value['E'];

                      $inserdata[$i]['result_enrollment_id'] = $value['F'];
                      $inserdata[$i]['result_registration_date'] = $value['G'];
                      $inserdata[$i]['result_center_name'] = $value['H'];
                      $inserdata[$i]['result_center_code'] = $value['I'];
                      $inserdata[$i]['result_center_location'] = $value['J'];
                      $inserdata[$i]['result_center_district'] = $value['K'];
                      $inserdata[$i]['result_state'] = $value['L'];
                      $i++;
                    
                    }               
                    $result = $this->CV->importData($inserdata);   
                   // print_r($value['F']);exit;
                  //  echo $this->db->last_query();die();
                    if($result)
                    {
                       $this->session->set_flashdata('success', ' 
                       <div class="alert alert-success alert-dismissible fade show">
                          <strong>Success!</strong> File Upload successfully
                          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                       </div>
                       ');
                        redirect(base_url()."CSV/result_list");
        
            
                    }
                    else{
                       echo "ERROR !";
                       redirect(base_url()."CSV/upload_csv");
                   

                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                 // redirect(base_url()."CSV/upload_csv");
                   
                }
              }
         }




         
  }   