<?php

class Dfskripsi extends CI_Controller
{

    public function index()
    {
        $data['dfskripsi']       = $this->dfskripsi_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dfskripsi', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data = array(
            'id_skripsi'         => set_value('id_skripsi'),
            'nama_mhs_skripsi'         => set_value('nama_mhs_skripsi'),
            'nim'         => set_value('nim'),
            'prodi_skripsi'         => set_value('prodi_skripsi'),
            'judul_skripsi'         => set_value('judul_skripsi'),
            'dospem1_skripsi'         => set_value('dospem1_skripsi'),
            'dospem2_skripsi'         => set_value('dospem2_skripsi'),
            'dosenuji1_skripsi'         => set_value('dosenuji1_skripsi'),
            'dosenuji2_skripsi'         => set_value('dosenuji2_skripsi'),
            'dosenuji3_skripsi'         => set_value('dosenuji3_skripsi'),
            'pengawas'         => set_value('pengawas'),
            'tgl_skripsi'         => set_value('tgl_skripsi'),
            'waktu_skripsi'         => set_value('waktu_skripsi'),
            'tempat_skripsi'         => set_value('tempat_skripsi'),
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dfskripsi_form', $data);
        $this->load->view('templates_administrator/footer');
    }


    public function input_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() ==  FALSE) {
            $this->input();
        } else {
            $data = array(
                'id_skripsi'         => $this->input->post('id_skripsi', TRUE),
                'nama_mhs_skripsi'         => $this->input->post('nama_mhs_skripsi', TRUE),
                'nim'         => $this->input->post('nim', TRUE),
                'prodi_skripsi'         => $this->input->post('prodi_skripsi', TRUE),
                'judul_skripsi'         => $this->input->post('judul_skripsi', TRUE),
                'dospem1_skripsi'         => $this->input->post('dospem1_skripsi', TRUE),
                'dospem2_skripsi'         => $this->input->post('dospem2_skripsi', TRUE),
                'dosenuji1_skripsi'         => $this->input->post('dosenuji1_skripsi', TRUE),
                'dosenuji2_skripsi'         => $this->input->post('dosenuji2_skripsi', TRUE),
                'dosenuji3_skripsi'         => $this->input->post('dosenuji3_skripsi', TRUE),
                'pengawas'         => $this->input->post('pengawas', TRUE),
                'tgl_skripsi'         => $this->input->post('tgl_skripsi', TRUE),
                'waktu_skripsi'         => $this->input->post('waktu_skripsi', TRUE),
                'tempat_skripsi'         => $this->input->post('tempat_skripsi', TRUE),
            );

            $this->dfskripsi_model->input_data_with_foreign_key($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show"
            role="alert">
          Mahasiswa Berhasil Ditambahkan!
            <button type="button" class="btn btn-close" data-dismiss="alert"
            aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          </div>');
            redirect('administrator/dfskripsi');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'nama_mhs_skripsi',
            'nama_mhs_skripsi',
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
            'prodi_skripsi',
            'prodi_skripsi',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'judul_skripsi',
            'judul_skripsi',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'dospem1_skripsi',
            'dospem1_skripsi',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'dospem2_skripsi',
            'dospem2_skripsi',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'dosenuji1_skripsi',
            'dosenuji1_skripsi',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'dosenuji2_skripsi',
            'dosenuji2_skripsi',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'dosenuji3_skripsi',
            'dosenuji3_skripsi',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'pengawas',
            'pengawas',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'tgl_skripsi',
            'tgl_skripsi',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'waktu_skripsi',
            'waktu_skripsi',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'tempat_skripsi',
            'tempat_skripsi',
            'required',
            ['required' => 'Wajib Diisi!']
        );
    }

    public function detail($id_skripsi)
    {
        $data['detail'] = $this->dfskripsi_model->ambil_id_skripsi($id_skripsi);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dfskripsi_detail', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update($id)
    {
        $where = array('id_skripsi' => $id);
        $data['dfskripsi'] = $this->dfskripsi_model->edit_data(
            $where,
            'dfskripsi'
        )->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dfskripsi_update', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id                 = $this->input->post('id_skripsi');
        $nama_mhs_skripsi    = $this->input->post('nama_mhs_skripsi');
        $nim         = $this->input->post('nim');
        $prodi_skripsi       = $this->input->post('prodi_skripsi');
        $judul_skripsi       = $this->input->post('judul_skripsi');
        $dospem1_skripsi     = $this->input->post('dospem1_skripsi');
        $dospem2_skripsi     = $this->input->post('dospem2_skripsi');
        $dosenuji1_skripsi   = $this->input->post('dosenuji1_skripsi');
        $dosenuji2_skripsi   = $this->input->post('dosenuji2_skripsi');
        $dosenuji3_skripsi   = $this->input->post('dosenuji3_skripsi');
        $pengawas        = $this->input->post('pengawas');
        $tgl_skripsi         = $this->input->post('tgl_skripsi');
        $waktu_skripsi       = $this->input->post('waktu_skripsi');
        $tempat_skripsi      = $this->input->post('tempat_skripsi');

        $data = array(
            'nama_mhs_skripsi' => $nama_mhs_skripsi,
            'nim' => $nim,
            'prodi_skripsi' => $prodi_skripsi,
            'judul_skripsi' => $judul_skripsi,
            'dospem1_skripsi' => $dospem1_skripsi,
            'dospem2_skripsi' => $dospem2_skripsi,
            'dosenuji1_skripsi' => $dosenuji1_skripsi,
            'dosenuji2_skripsi' => $dosenuji2_skripsi,
            'dosenuji3_skripsi' => $dosenuji3_skripsi,
            'pengawas' => $pengawas,
            'tgl_skripsi' => $tgl_skripsi,
            'waktu_skripsi' => $waktu_skripsi,
            'tempat_skripsi' => $tempat_skripsi,
        );

        $where = array(
            'id_skripsi' => $id
        );

        $this->dfskripsi_model->update_data($where, $data, 'dfskripsi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show"
        role="alert">
       Data Mahasiswa Berhasil Diubah!
        <button type="button" class="btn btn-close" data-dismiss="alert"
        aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      </div>');
        redirect('administrator/dfskripsi');
    }

    public function delete($id)
    {
        $where = array('id_skripsi' => $id);
        $this->dfskripsi_model->hapus_data($where, 'dfskripsi');
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
        redirect('administrator/dfskripsi');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['dfskripsi'] = $this->dfskripsi_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dfskripsi', $data);
        $this->load->view('templates_administrator/footer');
    }
}
