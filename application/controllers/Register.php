<?php
class Register extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Registration";
        $this->load->view('auth/templates/auth_header', $data);
        $this->load->view('auth/registration');
        $this->load->view('auth/templates/auth_footer');
    }
}