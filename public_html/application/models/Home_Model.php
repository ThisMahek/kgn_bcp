<?php
class Home_Model extends CI_Model
{
     public function  ShowAllCourse()
     {
        return $this ->db-> where('status',1)-> get('course')->result();
     }
     public function  ShowAllGallery()
     {
        return $this ->db-> where('status',1)-> get('gallery')->result();
     }
     public function  ShowAllTestimonial()
     {
        return $this ->db-> where('status',1)->get('testimonial')->result();
     }
    public function change_password($new_password){
    $data = array
    (
    'master_password' => $new_password
    );
    $this->db->where('master_id', $this->session->userdata('user_id'));
    return $this->db->update('education_center_master', $data);
    }
    public function user_profile($id)
    {
    $q = $this->db->query("Select * from education_center_master where master_id= '$id'");
    return $q->row();
    }

}
?>