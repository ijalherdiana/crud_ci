<?php
class Faq extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Faq";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('faq/index');
        $this->load->view('templates/footer');
    }
}