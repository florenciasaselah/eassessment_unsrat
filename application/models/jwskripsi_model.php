<?php

class Jwskripsi_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->order_by('tgl_skripsi', 'ASC')
            ->order_by('waktu_skripsi', 'ASC')
            ->get('dfskripsi')
            ->result();
    }
}
