<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['title'] = "Dashboard";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }
}

/* End of file Dashboard.php.php and path \application\controllers\Dashboard.php.php */