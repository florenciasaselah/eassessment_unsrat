<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fungsi_cari_model extends CI_Model
{

    public function cari_mahasiswa_dfsemhas($keyword)
    {
        $this->db->like('nama_mhs_semhas', $keyword);
        return $this->db->get('dfsemhas')->result();
    }

    public function cari_mahasiswa_dfskripsi($keyword)
    {
        $this->db->like('nama_mhs_skripsi', $keyword);
        return $this->db->get('dfskripsi')->result();
    }
}
