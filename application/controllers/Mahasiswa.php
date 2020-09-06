<?php


class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswa();
        if($this->input->post('keyword')){
            $data['mahasiswa'] =$this->Mahasiswa_model->cariData();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form tambah Data Mahasiswa';

        $this->form_validation->set_rules('nama','Nama','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahData();
            $this->session->set_flashdata('message','ditambahkan');
            redirect('mahasiswa');
        }
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form ubah Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['jurusan'] = ['Teknik Informatika','Desain Grafis','Sistem Informasi','Sastra Indonesia'];

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nrp','Nrp','required|numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahData();
            $this->session->set_flashdata('message','ditambahkan');
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusData($id);
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('templates/footer');
    }
}
