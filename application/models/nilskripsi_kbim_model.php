<?php

class Nilskripsi_kbim_model extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('dfskripsi.nama_mhs_skripsi, dfskripsi.nim, dfskripsi.prodi_skripsi, dfskripsi.judul_skripsi, nilskripsi_kbim.id_nilskripsi_kbim');
        $this->db->from('nilskripsi_kbim');
        $this->db->join('dfskripsi', 'dfskripsi.id_skripsi = nilskripsi_kbim.id_skripsi');
        return $this->db->get();
    }

    public function input_data($data)
    {
        $this->db->insert('nilskripsi_kbim', $data);
    }

    public function ambil_id_nilskripsi_kbim($id_nilskripsi_kbim)
    {
        $this->db->select('dfskripsi.nama_mhs_skripsi, dfskripsi.nim,
                            dfskripsi.prodi_skripsi, dfskripsi.judul_skripsi,
                            dfskripsi.dospem1_skripsi, dfskripsi.dospem2_skripsi,
                            dfskripsi.dosenuji1_skripsi, dfskripsi.dosenuji2_skripsi,
                            dfskripsi.dosenuji3_skripsi, dfskripsi.pengawas,
                            dfskripsi.tgl_skripsi,
                            dfskripsi.waktu_skripsi, dfskripsi.tempat_skripsi,
                            nilskripsi_kbim.*');
        $this->db->from('nilskripsi_kbim');
        $this->db->join('dfskripsi', 'dfskripsi.id_skripsi = nilskripsi_kbim.id_skripsi');
        $this->db->where('nilskripsi_kbim.id_nilskripsi_kbim', $id_nilskripsi_kbim);
        $hasil = $this->db->get();

        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function ambil_kbim_nim($nim)
    {
        $this->db->select('*');
        $this->db->from('nilskripsi_kbim');
        $this->db->where('nilskripsi_kbim.nim', $nim);
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

    public function edit_data($where, $table)
    {
        $this->db->select('nilskripsi_kbim.*, dfskripsi.nama_mhs_skripsi, dfskripsi.nim, dfskripsi.prodi_skripsi, dfskripsi.judul_skripsi, nilskripsi_kbim.id_nilskripsi_kbim');
        $this->db->from($table);
        $this->db->join('dfskripsi', 'dfskripsi.id_skripsi = nilskripsi_kbim.id_skripsi');
        $this->db->where($where);
        return $this->db->get();
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);

        if ($this->db->error()['code'] !== 0) {
            $error = $this->db->error();
            $error_message = 'Database Error (' . $error['code'] . '): ' . $error['message'];
            show_error($error_message);
        }
    }

    public function get_pengisian_count($id)
    {
        $this->db->select('pengisian_count');
        $this->db->where('id_nilskripsi_kbim', $id);
        return $this->db->get('nilskripsi_kbim')->row()->pengisian_count;
    }

    public function increment_pengisian_count($id)
    {
        $this->db->set('pengisian_count', 'pengisian_count+1', FALSE);
        $this->db->where('id_nilskripsi_kbim', $id);
        $this->db->update('nilskripsi_kbim');
    }
}
