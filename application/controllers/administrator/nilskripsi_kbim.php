<?php

class Nilskripsi_kbim extends CI_Controller
{

    public function index()
    {
        $data['nilskripsi_kbim']       = $this->nilskripsi_kbim_model->tampil_data()->result();
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilskripsi_kbim', $data);
        $this->load->view('templates_administrator/footer_lec');
    }

    public function detail($id_nilskripsi_kbim)
    {
        $data['detail'] = $this->nilskripsi_kbim_model->ambil_id_nilskripsi_kbim($id_nilskripsi_kbim);
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilskripsi_kbim_detail',  $data);
        $this->load->view('templates_administrator/footer_lec');
    }

    public function update($id)
    {
        $where = array('id_nilskripsi_kbim' => $id);
        $data['nilskripsi_kbim'] = $this->nilskripsi_kbim_model->edit_data(
            $where,
            'nilskripsi_kbim'
        )->result();
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilskripsi_kbim_update', $data);
        $this->load->view('templates_administrator/footer_lec');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_nilskripsi_kbim');
        $nilskripsi_kbim_1 = $this->input->post('nilskripsi_kbim_1');
        $nilskripsi_kbim_2 = $this->input->post('nilskripsi_kbim_2');
        $nilskripsi_kbim_3 = $this->input->post('nilskripsi_kbim_3');
        $nim_post = $this->input->post('nim');


        // Menghitung nilai total
        $nilskripsi_kbim_total = $nilskripsi_kbim_1 * 0.3 + $nilskripsi_kbim_2 * 0.3 + $nilskripsi_kbim_3 * 0.4;

        // Cek jumlah pengisian nilai oleh dosen
        $pengisian_count = $this->nilskripsi_kbim_model->get_pengisian_count($id); // Mengambil jumlah pengisian dari database
        $max_pengisian = 2; // Jumlah maksimal pengisian oleh dosen

        if ($pengisian_count < $max_pengisian) {
            $data = array(
                'nilskripsi_kbim_1' => $nilskripsi_kbim_1,
                'nilskripsi_kbim_2' => $nilskripsi_kbim_2,
                'nilskripsi_kbim_3' => $nilskripsi_kbim_3,
                'nilskripsi_kbim_total' => $nilskripsi_kbim_total,
                'nim' => $nim_post
            );

            $where = array(
                'id_nilskripsi_kbim' => $id
            );

            // Menyimpan data nilai ke database
            $this->nilskripsi_kbim_model->update_data($where, $data, 'nilskripsi_kbim');

            // Update jumlah pengisian
            $this->nilskripsi_kbim_model->increment_pengisian_count($id);




            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
        Nilai Skripsi Berhasil Ditambahkan!
        <button type="button" class="btn btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Pengisian nilai sudah mencapai batas maksimal!
        <button type="button" class="btn btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
        }

        redirect('administrator/nilskripsi_kbim');
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'nilskripsi_kbim_1',
            'nilskripsi_kbim_1',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'nilskripsi_kbim_2',
            'nilskripsi_kbim_2',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'nilskripsi_kbim_3',
            'nilskripsi_kbim_3',
            'required',
            ['required' => 'Wajib Diisi!']
        );
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['nilskripsi_kbim'] = $this->nilskripsi_kbim_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilskripsi_kbim', $data);
        $this->load->view('templates_administrator/footer_lec');
    }
}
