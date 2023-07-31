<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fungsi_cari extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fungsi_cari_model');
    }

    public function cari_mahasiswa()
    {
        $keyword = $this->input->get('keyword');

        $data['dfsemhas'] = $this->Fungsi_cari_model->cari_mahasiswa_dfsemhas($keyword);
        $data['dfskripsi'] = $this->Fungsi_cari_model->cari_mahasiswa_dfskripsi($keyword);

        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/fungsi_cari', $data);
        $this->load->view('templates_administrator/footer_lec');
    }
}
