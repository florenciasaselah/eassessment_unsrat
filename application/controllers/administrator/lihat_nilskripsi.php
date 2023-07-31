<?php

class Lihat_nilskripsi extends CI_Controller
{
    public function index()
    {
        $data['nilskripsi_kuji']       = $this->nilskripsi_kuji_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/lihat_nilskripsi', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id_nilskripsi_kuji)
    {
        $data['detail'] = $this->nilskripsi_kuji_model->ambil_id_nilskripsi_kuji($id_nilskripsi_kuji);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/lihat_nilskripsi_detail',  $data);
        $this->load->view('templates_administrator/footer');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['nilskripsi_kuji'] = $this->nilskripsi_kuji_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/lihat_nilskripsi', $data);
        $this->load->view('templates_administrator/footer');
    }
}
