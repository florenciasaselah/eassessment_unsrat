<?php

class Lihat_nilskripsi_model extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('dfskripsi.nama_mhs_skripsi, dfskripsi.nim, dfskripsi.prodi_skripsi, dfskripsi.judul_skripsi, nilskripsi_kuji.id_nilskripsi_kuji');
        $this->db->from('nilskripsi_kuji');
        $this->db->join('dfskripsi', 'dfskripsi.id_skripsi_kuji = nilskripsi_kuji.id_skripsi_kuji');
        return $this->db->get();
    }

    public function input_data($data)
    {
        $this->db->insert('nilskripsi_kuji', $data);
    }

    public function ambil_id_nilskripsi_kuji($id_nilskripsi_kuji)
    {
        $this->db->select('dfskripsi.nama_mhs_skripsi, dfskripsi.nim,
                            dfskripsi.prodi_skripsi, dfskripsi.judul_skripsi,
                            dfskripsi.dospem1_skripsi, dfskripsi.dospem2_skripsi,
                            dfskripsi.dosenuji1_skripsi, dfskripsi.dosenuji2_skripsi,
                            dfskripsi.dosenuji3_skripsi, dfskripsi.pengawas,
                            dfskripsi.tgl_skripsi,
                            dfskripsi.waktu_skripsi, dfskripsi.tempat_skripsi,
                            nilskripsi_kuji.*');
        $this->db->from('nilskripsi_kuji');
        $this->db->join('dfskripsi', 'dfskripsi.id_skripsi = nilskripsi_kuji.id_skripsi');
        $this->db->where('nilskripsi_kuji.id_nilskripsi_kuji', $id_nilskripsi_kuji);
        $hasil = $this->db->get();

        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('dfskripsi');
        $this->db->like('nama_mhs_skripsi', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('prodi_skripsi', $keyword);
        $this->db->or_like('judul_skripsi', $keyword);
        $this->db->or_like('dospem1_skripsi', $keyword);
        $this->db->or_like('dospem2_skripsi', $keyword);
        $this->db->or_like('dosenuji1_skripsi', $keyword);
        $this->db->or_like('dosenuji2_skripsi', $keyword);
        $this->db->or_like('dosenuji3_skripsi', $keyword);
        $this->db->or_like('pengawas', $keyword);
        $this->db->or_like('tgl_skripsi', $keyword);
        $this->db->or_like('waktu_skripsi', $keyword);
        $this->db->or_like('tempat_skripsi', $keyword);
        return $this->db->get()->result();
    }
}
