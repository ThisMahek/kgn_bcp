<?php defined("BASEPATH") or exit("no direct script allowed");
class Basic_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		 
		 
	}



	


	

	public function select($database="",$tbl,$cdn,$ord_field='',$ord='asc'){

       $otherdb =$this->load->database('kgnacademy_db' , TRUE);

	    $otherdb->select("*");
		$otherdb->from($this->pro->prifix.$tbl);
		$count_cdn=count($cdn);
		if($count_cdn!=0){
		foreach($cdn as $k=>$v){
		$otherdb->where($k , $cdn[$k]);
		}
		}
		$otherdb->order_by($ord_field, $ord);
		$rs = $otherdb->get();
		return $rs->result_array();

		
	} 
	
	
	
	public function insert($database,$tbl,$arr){
	    $otherdb =$this->load->database( $database , TRUE);
	    
		$id=$otherdb->insert($this->pro->prifix.$tbl,$arr);
		return $otherdb->insert_id();
    } 
    
    
    public function delete($database,$cdn){
	     $otherdb =$this->load->database( $database , TRUE);

        $query = $otherdb->query($cdn);
        //$result = $query->result_array();
        return $query;	
	}
    
    
	
		public function update($database,$tbl,$cdn,$update_data){
		    
		     $otherdb =$this->load->database( $database , TRUE);
		     
		$count_cdn=count($cdn);
		if($count_cdn!=0){
		foreach($cdn as $k=>$v){
		$otherdb->where($k , $cdn[$k]);
		}
		}
		return $otherdb->update($this->pro->prifix.$tbl,$update_data);	
		  

		
	}
	
	public function quert($database,$cdn){
	     $otherdb =$this->load->database( $database , TRUE);

        $query = $otherdb->query($cdn);
        $result = $query->result_array();
        return $result;	
	}
		public function quert_te($database,$cdn){
	     $otherdb =$this->load->database( $database , TRUE);

        $query = $otherdb->query($cdn);
        //$result = $query->result_array();
        //return $result;	
	}
	
	public function base64_url_encode($input) {
 return strtr(base64_encode($input), '+/=', '._-');
}

public function base64_url_decode($input) {
 return base64_decode(strtr($input, '._-', '+/='));
}

public function time_minus($big,$small) {
    
      $secs = strtotime($big)-strtotime("00:00:00");
   return $time= date("H:i:s",strtotime($small)-$secs);
    
 
}
public function time_plus($big,$small) {
    
      $secs = strtotime($big)-strtotime("00:00:00");
   return $time= date("H:i:s",strtotime($small)+$secs);
    
 
}

public function time_to_decimal($time) {
    $hms = explode(":", $time);
    return ($hms[0] + ($hms[1]/60) + ($hms[2]/3600));
}

public function timezome($time,$zone){
$dt = new DateTime($time);
$tz = new DateTimeZone($zone); // or whatever zone you're after Asia/Kolkata

$dt->setTimezone($tz);
return $dt->format('H:i');
}

public function string_to_arr($deli,$str){
    
$arr=explode("$deli",$str);

return $arr;
}

public function find_number_from_string($str){
  preg_match_all('!\d+!', $str, $matches);
  return $matches;
}

public function date_dmy($date){
   
return $newDate = date("d-m-Y", strtotime($date));

}
public function date_dmmy($date){
   
return $newDate = date("d-M-Y", strtotime($date));

}
public function date_ymd($date){
   
return $newDate = date("Y-m-d", strtotime($date));

}




	
}
?>