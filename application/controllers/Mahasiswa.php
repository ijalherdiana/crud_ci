<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_mahasiswa');
        if (!isset($this->session->userdata['username'])) {
            redirect(base_url());
        }
    }
    public function index()
    {
        $title['title'] = "Mahasiswa";
        $data['mahasiswa'] = $this->m_mahasiswa->tampil_data()->result();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('mahasiswa', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $nama       = $this->input->post('nama');
        $nim        = $this->input->post('nim');
        $tgl_lahir  = $this->input->post('tgl_lahir');
        $jurusan    = $this->input->post('jurusan');
        $alamat     = $this->input->post('alamat');
        $email      = $this->input->post('email');
        $no_tlp     = $this->input->post('no_tlp');
        $foto       = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path']      = './assets/foto';
            $config['allowed_types']    = 'jpg|png|gif';

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'tgl_lahir' => $tgl_lahir,
            'jurusan' => $jurusan,
            'alamat' => $alamat,
            'email' => $email,
            'no_tlp' => $no_tlp,
            'foto' => $foto
        );

        $this->m_mahasiswa->input_data($data, 'tb_mahasiswa');
        redirect('mahasiswa/index');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_mahasiswa->hapus_data($where, 'tb_mahasiswa');
        redirect('mahasiswa/index');
    }
    public function edit($id)
    {
        $title['title'] = "Edit Data";
        $where = array('id' => $id);
        $data['mahasiswa'] = $this->m_mahasiswa->edit_data($where, 'tb_mahasiswa')->result();
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('edit', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $no_tlp = $this->input->post('no_tlp');
        $old = $this->input->post('old');
        $foto = $_FILES['foto'];
        if ($foto = NULL) {
            $foto = $old;
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data('file_name');
            } else {
                $foto = $old;
            }
        }

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'tgl_lahir' => $tgl_lahir,
            'jurusan' => $jurusan,
            'alamat' => $alamat,
            'email' => $email,
            'no_tlp' => $no_tlp,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );
        $this->m_mahasiswa->update_data($where, $data, 'tb_mahasiswa');
        redirect('mahasiswa/index');
    }
    public function detail($id)
    {
        $title['title'] = "Detail Mahasiswa";
        $this->load->model('m_mahasiswa');
        $detail = $this->m_mahasiswa->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('detail', $data);
        $this->load->view('templates/footer');
    }
}