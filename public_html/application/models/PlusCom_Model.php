<?php defined('BASEPATH') OR exit('Nno direct script allowed');

class PlusCom_model extends CI_Model
{
    
      public function CheckUser_Signin($email)
            {
                     $this->db->where('email',$email);
                     return  $this->db->get('user_signin')->num_rows();
            }
            public function User_SignupDB($array)
            { 
            return $this->db->insert('user_signin', $array);
            }
                }
