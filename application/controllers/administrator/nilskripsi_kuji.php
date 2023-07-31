<?php

class Nilskripsi_kuji extends CI_Controller
{

    public function index()
    {
        $data['nilskripsi_kuji']       = $this->nilskripsi_kuji_model->tampil_data()->result();
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilskripsi_kuji', $data);
        $this->load->view('templates_administrator/footer_lec');
    }



    public function detail($id_nilskripsi_kuji)
    {
        $data['detail'] = $this->nilskripsi_kuji_model->ambil_id_nilskripsi_kuji($id_nilskripsi_kuji);
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilskripsi_kuji_detail', $data);
        $this->load->view('templates_administrator/footer_lec');
    }

    public function update($id)
    {
        $where = array('id_nilskripsi_kuji' => $id);
        $data['nilskripsi_kuji'] = $this->nilskripsi_kuji_model->edit_data(
            $where,
            'nilskripsi_kuji'
        )->result();
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilskripsi_kuji_update', $data);
        $this->load->view('templates_administrator/footer_lec');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_nilskripsi_kuji');
        $nilskripsi_kuji_1 = floatval($this->input->post('nilskripsi_kuji_1'));
        $nilskripsi_kuji_2 = floatval($this->input->post('nilskripsi_kuji_2'));
        $nilskripsi_kuji_3 = floatval($this->input->post('nilskripsi_kuji_3'));
        $nilskripsi_kuji_4 = floatval($this->input->post('nilskripsi_kuji_4'));
        $nilskripsi_kuji_5 = floatval($this->input->post('nilskripsi_kuji_5'));
        $nilskripsi_kuji_6 = floatval($this->input->post('nilskripsi_kuji_6'));
        $nilskripsi_kuji_7 = floatval($this->input->post('nilskripsi_kuji_7'));
        $nim_post = $this->input->post('nim');


        // Menghitung nilai total untuk skripsi
        $nilskripsi_kuji_k = $nilskripsi_kuji_1 * 0.1 + $nilskripsi_kuji_2 * 0.25 + $nilskripsi_kuji_3 * 0.1 + $nilskripsi_kuji_4 * 0.25
            + $nilskripsi_kuji_5 * 0.3;

        // Menghitung nilai total untuk ujian skripsi
        $nilskripsi_kuji_u = $nilskripsi_kuji_6 * 0.3 + $nilskripsi_kuji_7 * 0.7;

        // Cek jumlah pengisian nilai oleh dosen
        $pengisian_count = $this->nilskripsi_kuji_model->get_pengisian_count($id); // Mengambil jumlah pengisian dari database
        $max_pengisian = 3; // Jumlah maksimal pengisian oleh dosen

        if ($pengisian_count < $max_pengisian) {
            $data = array(
                'nilskripsi_kuji_1' => $nilskripsi_kuji_1,
                'nilskripsi_kuji_2' => $nilskripsi_kuji_2,
                'nilskripsi_kuji_3' => $nilskripsi_kuji_3,
                'nilskripsi_kuji_4' => $nilskripsi_kuji_4,
                'nilskripsi_kuji_5' => $nilskripsi_kuji_5,
                'nilskripsi_kuji_6' => $nilskripsi_kuji_6,
                'nilskripsi_kuji_7' => $nilskripsi_kuji_7,
                'nilskripsi_kuji_k' => $nilskripsi_kuji_k,
                'nilskripsi_kuji_u' => $nilskripsi_kuji_u,
                'nim' => $nim_post,
            );

            $where = array(
                'id_nilskripsi_kuji' => $id
            );

            // Menyimpan data nilai ke database
            $this->nilskripsi_kuji_model->update_data($where, $data, 'nilskripsi_kuji');

            // Update jumlah pengisian
            $this->nilskripsi_kuji_model->increment_pengisian_count($id);


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

        redirect('administrator/nilskripsi_kuji');
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'nilskripsi_kuji_1',
            'nilskripsi_kuji_1',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'nilskripsi_kuji_2',
            'nilskripsi_kuji_2',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'nilskripsi_kuji_3',
            'nilskripsi_kuji_3',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'nilskripsi_kuji_4',
            'nilskripsi_kuji_4',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'nilskripsi_kuji_5',
            'nilskripsi_kuji_5',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'nilskripsi_kuji_6',
            'nilskripsi_kuji_6',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'nilskripsi_kuji_7',
            'nilskripsi_kuji_7',
            'required',
            ['required' => 'Wajib Diisi!']
        );
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['nilskripsi_kuji'] = $this->nilskripsi_kuji_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilskripsi_kuji', $data);
        $this->load->view('templates_administrator/footer_lec');
    }
}
