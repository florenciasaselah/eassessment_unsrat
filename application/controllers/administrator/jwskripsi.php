<?php

class Jwskripsi extends CI_Controller
{
    public function index()
    {
        $data['dfskripsi'] = $this->dfskripsi_model->tampil_data()->result();
        usort($data['dfskripsi'], function ($a, $b) {
            return strtotime($a->tgl_skripsi . ' ' . $a->waktu_skripsi) - strtotime($b->tgl_skripsi . ' ' . $b->waktu_skripsi);
        });
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/jwskripsi', $data);
        $this->load->view('templates_administrator/footer_lec');
    }
}
