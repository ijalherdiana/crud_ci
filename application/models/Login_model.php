<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function getdata($username = null, $password = null)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $row = $this->db->get('auth_user');
        return $row;
    }
}


/* End of file Login_model_model.php and path \application\models\Login_model_model.php */