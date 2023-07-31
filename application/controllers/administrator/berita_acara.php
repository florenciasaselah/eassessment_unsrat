<?php

class Berita_acara extends CI_Controller
{
    public function index()
    {
        $data['berita_acara'] = $this->berita_acara_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/berita_acara', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function cetak($id_berita_acara)
    {
        $BeritaAcara = $this->berita_acara_model->getBeritaAcaraById($id_berita_acara);
        $nim = $BeritaAcara[0]->nim;

        $nilai_seminar_hasil = $this->nilsemhas_model->ambil_nilsemhas_nim($nim)[0]->nilsemhas_total;
        $nilai_penguji =  $this->nilskripsi_kuji_model->ambil_kuji_nim($nim);
        $nilai_penelitian = $this->nilskripsi_kbim_model->ambil_kbim_nim($nim)[0]->nilskripsi_kbim_total;

        $nilai_ujian = $nilai_penguji[0]->nilskripsi_kuji_u;
        $nilai_skripsi = $nilai_penguji[0]->nilskripsi_kuji_k;

        $data['berita_acara'] = $this->berita_acara_model->getBeritaAcaraById($id_berita_acara);

        $data['nilai'] = [
            'nilai_seminar_hasil' => $nilai_seminar_hasil,
            'nilai_penelitian' => $nilai_penelitian,
            'nilai_ujian' => $nilai_ujian,
            'nilai_skripsi' => $nilai_skripsi,
        ];

        $this->load->view('administrator/berita_acara_cetak', $data);
    }
}
