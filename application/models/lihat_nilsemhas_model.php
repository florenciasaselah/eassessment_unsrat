<?php

class Lihat_nilsemhas_model extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('dfsemhas.nama_mhs_semhas, dfsemhas.nim, dfsemhas.prodi_semhas, dfsemhas.judul_semhas, nilsemhas.id_nilsemhas');
        $this->db->from('nilsemhas');
        $this->db->join('dfsemhas', 'dfsemhas.id_semhas = nilsemhas.id_semhas');
        return $this->db->get();
    }

    public function input_data($data)
    {
        $this->db->insert('nilsemhas', $data);
    }

    public function ambil_id_nilsemhas($id_nilsemhas)
    {
        $this->db->select('dfsemhas.nama_mhs_semhas, dfsemhas.nim,
                            dfsemhas.prodi_semhas, dfsemhas.judul_semhas,
                            dfsemhas.dospem1_semhas, dfsemhas.dospem2_semhas,
                            dfsemhas.dosenuji1_semhas, dfsemhas.dosenuji2_semhas,
                            dfsemhas.dosenuji3_semhas, dfsemhas.komisi_semhas, dfsemhas.tgl_semhas,
                            dfsemhas.waktu_semhas, dfsemhas.tempat_semhas,
                            nilsemhas.*');
        $this->db->from('nilsemhas');
        $this->db->join('dfsemhas', 'dfsemhas.id_semhas = nilsemhas.id_semhas');
        $this->db->where('nilsemhas.id_nilsemhas', $id_nilsemhas);
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
        $this->db->from('dfsemhas');
        $this->db->like('nama_mhs_semhas', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('prodi_semhas', $keyword);
        $this->db->or_like('judul_semhas', $keyword);
        $this->db->or_like('dospem1_semhas', $keyword);
        $this->db->or_like('dospem2_semhas', $keyword);
        $this->db->or_like('dosenuji1_semhas', $keyword);
        $this->db->or_like('dosenuji2_semhas', $keyword);
        $this->db->or_like('dosenuji3_semhas', $keyword);
        $this->db->or_like('komisi_semhas', $keyword);
        $this->db->or_like('tgl_semhas', $keyword);
        $this->db->or_like('waktu_semhas', $keyword);
        $this->db->or_like('tempat_semhas', $keyword);
        return $this->db->get()->result();
    }
}
