<?php

class Dosen_model extends CI_Model
{
    // Menampilkan data hanya untuk user dengan level = dosen
    public function tampil_data()
    {
        $this->db->where('level', 'dosen');
        return $this->db->get('user');
    }

    public function input_data($data)
    {
        $this->db->insert('user', $data);
    }

    public function ambil_id_user($id_user)
    {
        $hasil = $this->db->where('id_user', $id_user)->get('user');

        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->like('nama', $keyword);
        $this->db->or_like('username', $keyword);
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
}
