<?php
class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!isset($this->session->userdata['username'])) {
            redirect(base_url());
        }
    }
    public function index()
    {
        $data['title'] = "Profil";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('profile/index');
        $this->load->view('templates/footer');
    }
}