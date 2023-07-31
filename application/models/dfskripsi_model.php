<?php

class Dfskripsi_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('dfskripsi');
    }


    public function input_data($data)
    {
        $this->db->insert('dfskripsi', $data);
        $id_skripsi = $this->db->insert_id();

        // menambahkan data di tabel nilskripsi_kbim
        $data_nilskripsi_kbim = array(
            'id_skripsi' => $id_skripsi,
            // tambahkan kolom-kolom lain yang perlu ditambahkan
        );
        $this->db->insert('nilskripsi_kbim', $data_nilskripsi_kbim);

        // menambahkan data di tabel nilskripsi_kuji
        $data_nilskripsi_kuji = array(
            'id_skripsi' => $id_skripsi,
            // tambahkan kolom-kolom lain yang perlu ditambahkan
        );
        $this->db->insert('nilskripsi_kuji', $data_nilskripsi_kuji);

        // mengambil nim berdasarkan id_skripsi
        $this->db->select('nim');
        $this->db->where('id_skripsi', $id_skripsi);
        $query = $this->db->get('dfskripsi');
        $row = $query->row();
        $nim = $row->nim;

        // menambahkan data di tabel berita acara
        $data_berita_acara = array(
            'id_skripsi' => $id_skripsi,
            'nim' => $nim,
            // tambahkan kolom-kolom lain yang perlu ditambahkan
        );
        $this->db->insert('berita_acara', $data_berita_acara);
    }
    public function ambil_id_skripsi($id_skripsi)
    {
        $hasil = $this->db->where('id_skripsi', $id_skripsi)->get('dfskripsi');

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
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function input_data_with_foreign_key($data)
    {
        $this->db->insert('dfskripsi', $data);
        $id_skripsi = $this->db->insert_id();

        $nilskripsi_kbim_data = array(
            'id_skripsi' => $id_skripsi
            // tambahkan field lain yang sesuai dengan struktur tabel nilskripsi_kbim
        );

        $this->db->insert('nilskripsi_kbim', $nilskripsi_kbim_data);

        $nilskripsi_kuji_data = array(
            'id_skripsi' => $id_skripsi
            // tambahkan field lain yang sesuai dengan struktur tabel nilskripsi_kuji
        );

        $this->db->insert('nilskripsi_kuji', $nilskripsi_kuji_data);

        // mengambil nim berdasarkan id_skripsi
        $this->db->select('nim');
        $this->db->where('id_skripsi', $id_skripsi);
        $query = $this->db->get('dfskripsi');
        $row = $query->row();
        $nim = $row->nim;

        $berita_acara_data = array(
            'id_skripsi' => $id_skripsi,
            'nim' => $nim,
            // tambahkan field lain yang sesuai dengan struktur tabel berita_acara
        );

        $this->db->insert('berita_acara', $berita_acara_data);
    }
}
