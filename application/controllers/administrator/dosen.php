<?php

class dosen extends CI_Controller
{

    public function index()
    {
        $data['user']       = $this->dosen_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data = array(
            'id_user' => set_value('id_user'),
            'nama' => set_value('nama'),
            'username' => set_value('username'),
            'password' => set_value(md5('password')),
            'level' => set_value('level'),
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen_form', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'username' => $this->input->post('username', TRUE),
                'password' => md5($this->input->post('password', TRUE)),
                'level' => $this->input->post('level', TRUE),
            );

            $this->dosen_model->input_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
          Dosen Berhasil Ditambahkan!
            <button type="button" class="btn btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          </div>');
            redirect('administrator/dosen');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'username',
            'username',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'password',
            'password',
            'required',
            ['required' => 'Wajib Diisi!']
        );
    }

    public function detail($id_user)
    {
        $data['detail'] = $this->dosen_model->ambil_id_user($id_user);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen_detail', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update($id)
    {
        $where = array('id_user' => $id);
        $data['user'] = $this->dosen_model->edit_data($where, 'user')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen_update', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $level = $this->input->post('level');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => md5($password),
            'level' => $level,
        );

        $where = array(
            'id_user' => $id
        );

        $this->dosen_model->update_data($where, $data, 'user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
       Data Dosen Berhasil Diubah!
        <button type="button" class="btn btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      </div>');
        redirect('administrator/dosen');
    }

    public function delete($id)
    {
        $where = array('id_user' => $id);
        $this->dosen_model->hapus_data($where, 'user');
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-primary alert-dismissible fade show"
        role="alert">
       Data Dosen Berhasil Dihapus!
        <button type="button" class="btn btn-close" data-dismiss="alert"
        aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      </div>'
        );
        redirect('administrator/dosen');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['user'] = $this->dosen_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen', $data);
        $this->load->view('templates_administrator/footer');
    }
}
