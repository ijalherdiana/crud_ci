<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('login_model');
        $this->load->model('otentifikasi_model');
        if (isset($this->session->userdata['username'])) {
            redirect(base_url('dashboard'));
        }
    }
    public function index()
    {
        $title['title'] = "Login";
        $this->load->view('auth/templates/auth_header', $title);
        $this->load->view('auth/login');
        $this->load->view('auth/templates/auth_footer');
    }
    public function cek_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // cek dengan database kita
        // kita butuh model yang mengakses tabel auth_user

        $result = $this->login_model->getdata($username, $password);

        $num_rows = $result->num_rows();

        if ($num_rows == 1) {

            // belum selesai
            $data = $result->row();
            $this->session->set_userdata('nama', $data->nama_lengkap);
            redirect('dashboard');
            //belum selesai
        } else {
            $this->session->set_flashdata('warning', 'Username / Password tidak cocok');
            redirect('login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // cek dengan database
        // cek username dulu baru password , atau langsung cek keduanya
        // fungsi cek keduanya
        $result = $this->otentifikasi_model->cek_login($username, $password);

        //jumlah hasil query
        if ($result->num_rows() > 0) {
            $data = $result->row();

            $data_session = array(
                'username' => $data->username,
                'nama_lengkap' => $data->nama_lengkap,
                'level' => $data->level
            );

            $this->session->set_userdata($data_session);

            redirect('dashboard');
        } else {
            $this->session->set_flashdata('failed', 'username / password salah');
            redirect(base_url());
        }
    }
    // public function sign_out()
    // {
    //     $this->session->sess_destroy();
    //     redirect(base_url());
    // }
}