<?php

class Berita_acara_model extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('dfskripsi.nama_mhs_skripsi, dfskripsi.nim, dfskripsi.prodi_skripsi, dfskripsi.judul_skripsi, berita_acara.id_berita_acara');
        $this->db->from('berita_acara');
        $this->db->join('dfskripsi', 'dfskripsi.id_skripsi = berita_acara.id_skripsi');
        return $this->db->get();
    }

    public function getBeritaAcaraById($id_berita_acara)
    {
        $this->db->select('dfskripsi.id_skripsi, dfskripsi.nama_mhs_skripsi, dfskripsi.nim, dfskripsi.prodi_skripsi, dfskripsi.dospem1_skripsi, dfskripsi.dospem2_skripsi, 
                            dfskripsi.dosenuji1_skripsi, dfskripsi.dosenuji2_skripsi,
                            dfskripsi.dosenuji3_skripsi, dfskripsi.pengawas,
                            berita_acara.id_berita_acara');
        $this->db->from('berita_acara');
        $this->db->join('dfskripsi', 'dfskripsi.id_skripsi = berita_acara.id_skripsi');
        $this->db->where('id_berita_acara', $id_berita_acara);
        return $this->db->get()->result();
    }
}
