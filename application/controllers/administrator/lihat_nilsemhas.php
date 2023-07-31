<?php

class Lihat_nilsemhas extends CI_Controller
{
    public function index()
    {
        $data['nilsemhas']       = $this->nilsemhas_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/lihat_nilsemhas', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id_nilsemhas)
    {
        $data['detail'] = $this->nilsemhas_model->ambil_id_nilsemhas($id_nilsemhas);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/lihat_nilsemhas_detail',  $data);
        $this->load->view('templates_administrator/footer');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['nilsemhas'] = $this->nilsemhas_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/lihat_nilsemhas', $data);
        $this->load->view('templates_administrator/footer');
    }
}
