<?php

class Dfsemhas_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('dfsemhas');
    }

    public function input_data($data)
    {
        $this->db->insert('dfsemhas', $data);
        $id_semhas = $this->db->insert_id();

        // mengambil nim berdasarkan id_semhas
        $this->db->select('nim');
        $this->db->where('id_semhas', $id_semhas);
        $query = $this->db->get('dfsemhas');
        $row = $query->row();
        $nim = $row->nim;

        // menambahkan data di tabel berita acara
        $data_nilsemhas = array(
            'id_semhas' => $id_semhas,
            'nim' => $nim,
            // tambahkan kolom-kolom lain yang perlu ditambahkan
        );
        $this->db->insert('nilsemhas', $data_nilsemhas);
    }

    public function ambil_id_semhas($id_semhas)
    {
        $hasil = $this->db->where('id_semhas', $id_semhas)->get('dfsemhas');

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

        // Hapus juga baris terkait pada tabel nilai_semhas_final
        if ($table === 'dfsemhas') {
            $id_semhas = $where['id_semhas'];
            $this->db->where('id_nilsemhas', $id_semhas);
            $this->db->delete('nilai_semhas_final');
        }
    }


    public function input_data_with_foreign_key($data)
    {
        $this->db->insert('dfsemhas', $data);
        $id_semhas = $this->db->insert_id();

        // mengambil nim berdasarkan id_semhas
        $this->db->select('nim');
        $this->db->where('id_semhas', $id_semhas);
        $query = $this->db->get('dfsemhas');
        $row = $query->row();
        $nim = $row->nim;

        $nilsemhas_data = array(
            'id_semhas' => $id_semhas,
            'nim' => $nim,
            // tambahkan field lain yang sesuai dengan struktur tabel nilsemhas
        );

        $this->db->insert('nilsemhas', $nilsemhas_data);
    }
}
