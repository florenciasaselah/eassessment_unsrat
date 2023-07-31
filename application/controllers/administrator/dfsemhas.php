<?php

class Dfsemhas extends CI_Controller
{

    public function index()
    {
        $data['dfsemhas']       = $this->dfsemhas_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dfsemhas', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data = array(
            'id_semhas'         => set_value('id_semhas'),
            'nama_mhs_semhas'         => set_value('nama_mhs_semhas'),
            'nim'         => set_value('nim'),
            'prodi_semhas'         => set_value('prodi_semhas'),
            'judul_semhas'         => set_value('judul_semhas'),
            'dospem1_semhas'         => set_value('dospem1_semhas'),
            'dospem2_semhas'         => set_value('dospem2_semhas'),
            'dosenuji1_semhas'         => set_value('dosenuji1_semhas'),
            'dosenuji2_semhas'         => set_value('dosenuji2_semhas'),
            'dosenuji3_semhas'         => set_value('dosenuji3_semhas'),
            'komisi_semhas'         => set_value('komisi_semhas'),
            'tgl_semhas'         => set_value('tgl_semhas'),
            'waktu_semhas'         => set_value('waktu_semhas'),
            'tempat_semhas'         => set_value('tempat_semhas'),
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dfsemhas_form', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'nama_mhs_semhas' => $this->input->post('nama_mhs_semhas', TRUE),
                'nim' => $this->input->post('nim', TRUE),
                'prodi_semhas' => $this->input->post('prodi_semhas', TRUE),
                'judul_semhas' => $this->input->post('judul_semhas', TRUE),
                'dospem1_semhas' => $this->input->post('dospem1_semhas', TRUE),
                'dospem2_semhas' => $this->input->post('dospem2_semhas', TRUE),
                'dosenuji1_semhas' => $this->input->post('dosenuji1_semhas', TRUE),
                'dosenuji2_semhas' => $this->input->post('dosenuji2_semhas', TRUE),
                'dosenuji3_semhas' => $this->input->post('dosenuji3_semhas', TRUE),
                'komisi_semhas' => $this->input->post('komisi_semhas', TRUE),
                'tgl_semhas' => $this->input->post('tgl_semhas', TRUE),
                'waktu_semhas' => $this->input->post('waktu_semhas', TRUE),
                'tempat_semhas' => $this->input->post('tempat_semhas', TRUE),
            );

            $this->dfsemhas_model->input_data_with_foreign_key($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show"
        role="alert">
      Mahasiswa Berhasil Ditambahkan!
        <button type="button" class="btn btn-close" data-dismiss="alert"
        aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      </div>');
            redirect('administrator/dfsemhas');
        }
    }


    public function _rules()
    {
        $this->form_validation->set_rules(
            'nama_mhs_semhas',
            'nama_mhs_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'nim',
            'nim',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'prodi_semhas',
            'prodi_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'judul_semhas',
            'judul_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'dospem1_semhas',
            'dospem1_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'dospem2_semhas',
            'dospem2_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'dosenuji1_semhas',
            'dosenuji1_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'dosenuji2_semhas',
            'dosenuji2_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'dosenuji3_semhas',
            'dosenuji3_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'komisi_semhas',
            'komisi_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'tgl_semhas',
            'tgl_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'waktu_semhas',
            'waktu_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'tempat_semhas',
            'tempat_semhas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
    }

    public function detail($id_semhas)
    {
        $data['detail'] = $this->dfsemhas_model->ambil_id_semhas($id_semhas);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dfsemhas_detail', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update($id)
    {
        $where = array('id_semhas' => $id);
        $data['dfsemhas'] = $this->dfsemhas_model->edit_data(
            $where,
            'dfsemhas'
        )->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dfsemhas_update', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id                 = $this->input->post('id_semhas');
        $nama_mhs_semhas    = $this->input->post('nama_mhs_semhas');
        $nim         = $this->input->post('nim');
        $prodi_semhas       = $this->input->post('prodi_semhas');
        $judul_semhas       = $this->input->post('judul_semhas');
        $dospem1_semhas     = $this->input->post('dospem1_semhas');
        $dospem2_semhas     = $this->input->post('dospem2_semhas');
        $dosenuji1_semhas   = $this->input->post('dosenuji1_semhas');
        $dosenuji2_semhas   = $this->input->post('dosenuji2_semhas');
        $dosenuji3_semhas   = $this->input->post('dosenuji3_semhas');
        $komisi_semhas      = $this->input->post('komisi_semhas');
        $tgl_semhas         = $this->input->post('tgl_semhas');
        $waktu_semhas       = $this->input->post('waktu_semhas');
        $tempat_semhas      = $this->input->post('tempat_semhas');

        $data = array(
            'nama_mhs_semhas' => $nama_mhs_semhas,
            'nim' => $nim,
            'prodi_semhas' => $prodi_semhas,
            'judul_semhas' => $judul_semhas,
            'dospem1_semhas' => $dospem1_semhas,
            'dospem2_semhas' => $dospem2_semhas,
            'dosenuji1_semhas' => $dosenuji1_semhas,
            'dosenuji2_semhas' => $dosenuji2_semhas,
            'dosenuji3_semhas' => $dosenuji3_semhas,
            'komisi_semhas' => $komisi_semhas,
            'tgl_semhas' => $tgl_semhas,
            'waktu_semhas' => $waktu_semhas,
            'tempat_semhas' => $tempat_semhas,
        );

        $where = array(
            'id_semhas' => $id
        );

        $this->dfsemhas_model->update_data($where, $data, 'dfsemhas');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show"
        role="alert">
       Data Mahasiswa Berhasil Diubah!
        <button type="button" class="btn btn-close" data-dismiss="alert"
        aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      </div>');
        redirect('administrator/dfsemhas');
    }

    public function delete($id)
    {
        $where = array('id_semhas' => $id);
        $this->dfsemhas_model->hapus_data($where, 'dfsemhas');
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-primary alert-dismissible fade show"
        role="alert">
       Data Mahasiswa Berhasil Dihapus!
        <button type="button" class="btn btn-close" data-dismiss="alert"
        aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      </div>'
        );
        redirect('administrator/dfsemhas');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['dfsemhas'] = $this->dfsemhas_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dfsemhas', $data);
        $this->load->view('templates_administrator/footer');
    }
}
