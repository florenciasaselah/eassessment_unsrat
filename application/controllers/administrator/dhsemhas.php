<?php

class Dhsemhas extends CI_Controller
{

    public function index()
    {
        $data['dfsemhas']       = $this->dhsemhas_model->tampil_data()->result();
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/dhsemhas', $data);
        $this->load->view('templates_administrator/footer_lec');
    }

    public function update()
    {
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/dhsemhas_update');
        $this->load->view('templates_administrator/footer_lec');
    }
}
