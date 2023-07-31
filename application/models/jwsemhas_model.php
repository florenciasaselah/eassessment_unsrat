<?php

class Jwsemhas_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->order_by('tgl_semhas', 'ASC')
            ->order_by('waktu_semhas', 'ASC')
            ->get('dfsemhas')
            ->result();
    }
}
