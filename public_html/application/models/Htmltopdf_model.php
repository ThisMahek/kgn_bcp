<?php
class Htmltopdf_model extends CI_Model
{
	function fetch($std_id)
	{
		$this->db->where('master_id', $std_id);
		return $this->db->get('education_center_master');
	}
	function fetch_single_details($customer_id)
	{
		$this->db->where('master_id', $customer_id);
		$data = $this->db->get('education_center_master');

	$output = '<table  width="100%"  cellpadding="10">';
		foreach($data->result() as $row)
		{

        if ($row->student_type =='Direct') {
          	
           
		
		$output .= '


		<tr>
                      
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal; ">Student Type   : </b><bstyle=" border: 1px solid black" >'.$row->student_type.' </b></b><br>
			    
			    </td>
			    <td width="20%"><img src="'.base_url().$row->userprofile_picture.'" style="height 40px; width:120px; margin-top=10px"  align="right"/></td>
	    </tr>
       <tr>
                      
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal; ">Student Name : </b>'.$row->master_name.'</b><br></td></tr>
			    <tr>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Email : </b>'.$row->master_email.'</b>
			    </td>
			    
			    </tr>
			    <tr>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Mobile No : </b>'.$row->master_mobile.'</b>
			    </td>
			    
			    </tr>

			     <tr>
			     <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Father Name : </b>'.$row->master_fname.'</b>
			    </td>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Mother Name : </b>'.$row->master_mname.'</b>
			    </td>
			    
			    </tr>
	    
	            <tr>
	            <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Class : </b>'.$row->master_class.'</b>
			    </td>
			   
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Roll No : </b>'.$row->master_roll_no.'</b>
			    </td>
			    
			    </tr>

			     <tr>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Register Date : </b>'.$row->master_register_date.'</b>
			    </td>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Address : </b>'.$row->master_address.'</b>
			    </td>
			    </tr>
       
                <tr>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">City : </b>'.$row->master_city.'</b>
			    </td>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">State : </b>'.$row->master_state.'</b>
			    </td>
			    </tr>

			    <tr>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Adhar No : </b>'.$row->master_aadhar_no.'</b>
			    </td>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">PIN No : </b>'.$row->master_pin_no.'</b>
			    </td>
			    </tr>
       




   
			';
             	
		}else{

              
		$output .= '


		<tr>
                      
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal; "> Student Type : </b><bstyle=" border: 1px solid black" >'.$row->student_type.' </b></b><br>
			    <b style="color:Teal;">Facilitation Center : </b>'.$row->facilitation_center_name.'</b>
			    </td>
			   <td width="20%"><img src="'.base_url().$row->userprofile_picture.'" style="height 40px; width:120px;"  align="right"/></td>
	    </tr>
       <tr>
                      
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal; ">Student Name : </b>'.$row->master_name.'</b><br></td></tr>
			    <tr>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Email : </b>'.$row->master_email.'</b>
			    </td>
			    
			    </tr>
			    <tr>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Mobile No : </b>'.$row->master_mobile.'</b>
			    </td>
			    
			    </tr>

			     <tr>
			     <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Father Name : </b>'.$row->master_fname.'</b>
			    </td>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Mother Name : </b>'.$row->master_mname.'</b>
			    </td>
			    
			    </tr>
	    
	            <tr>
	            <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Class : </b>'.$row->master_class.'</b>
			    </td>
			   
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Roll No : </b>'.$row->master_roll_no.'</b>
			    </td>
			    
			    </tr>

			     <tr>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Register Date : </b>'.$row->master_register_date.'</b>
			    </td>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Address : </b>'.$row->master_address.'</b>
			    </td>
			    </tr>
       
                <tr>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">City : </b>'.$row->master_city.'</b>
			    </td>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">State : </b>'.$row->master_state.'</b>
			    </td>
			    </tr>

			    <tr>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">Adhar No : </b>'.$row->master_aadhar_no.'</b>
			    </td>
			    <td width="50%" style=" border: 1px solid black"><b style="color:Teal;">PIN No : </b>'.$row->master_pin_no.'</b>
			    </td>
			    </tr>
       




   
			';

		}


	}

		$output .= '</table>';
		/*$output .= '
		<tr>
			<td colspan="2" align="center"><a href="'.base_url().'htmltopdf" class="btn btn-primary">Back</a></td>
		</tr>
		
		';*/
		
		return $output;
     

		//return $sd;
	}
}

?>