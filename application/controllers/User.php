<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function setdata()
    {
        $this->session->set_userdata('username', 'administrator');
        $this->session->set_userdata('nama', 'Ijal herdiana');
        $this->session->set_userdata('level', 'admin');
        // echo "Session Telah dibuat";
        //-------------------------------
        $this->session->set_flashdata('pesan', 'Session Telah dibuat');
        redirect('user/getdata');
        //-------------------------------
    }
    public function getdata()
    {
        $this->data['username'] = $this->session->userdata('username');
        $this->data['nama'] = $this->session->userdata('nama');
        $this->data['level'] = $this->session->userdata('level');
        //-------------------------------
        $this->data['pesan'] = $this->session->flashdata('pesan');
        //-------------------------------
        $this->load->view('view_session', $this->data);
    }
    public function setdata_array()
    {
        $data = array(
            'username' => 'mahasiswa',
            'nama'     => 'Anjani',
            'level'    => 'mahasiswa'
        );
        $this->session->set_userdata($data);
        echo "Session mengggunakan array dibuat";
    }
    public function hapussession($nama_session = null)
    {

        $this->session->unset_userdata($nama_session);
        //-------------------------------
        $this->session->set_flashdata('pesan', 'Anda Berhasil menghaspus session ');
        redirect('user/getdata');
        //-------------------------------
    }
    public function view()
    {
        echo "<pre>";
        print_r($this->session->userdata());
        echo "</pre>";
    }
    public function destroy()
    {
        $this->session->sess_destroy();
        echo "Destroy Session";
        redirect(base_url());
    }
}

/* End of file User.php and path \application\controllers\User.php */