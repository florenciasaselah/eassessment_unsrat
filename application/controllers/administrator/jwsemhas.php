<?php

class Jwsemhas extends CI_Controller
{
    public function index()
    {
        $data['dfsemhas'] = $this->dfsemhas_model->tampil_data()->result();
        usort($data['dfsemhas'], function ($a, $b) {
            return strtotime($a->tgl_semhas . ' ' . $a->waktu_semhas) - strtotime($b->tgl_semhas . ' ' . $b->waktu_semhas);
        });
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/jwsemhas', $data);
        $this->load->view('templates_administrator/footer_lec');
    }
}
