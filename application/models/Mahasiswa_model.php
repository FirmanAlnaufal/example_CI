<?php

class Mahasiswa_model extends CI_Model
{

    public function getMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
        
    }
    public function tambahData()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true)

        ];

        $this->db->insert('mahasiswa',$data);
    }

    public function ubahData()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true)

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa',$data);
    }

    public function cariData()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama',$keyword);
        $this->db->or_like('jurusan',$keyword);
        $this->db->or_like('nrp',$keyword);
        $this->db->or_like('email',$keyword);
        return $this->db->get('mahasiswa')->result_array();
    }

    public function hapusData($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('mahasiswa');
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa',['id' => $id])->row_array();
    }
}
