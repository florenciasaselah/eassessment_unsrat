<?php

class Nilsemhas extends CI_Controller
{
    public function index()
    {
        $data['nilsemhas']       = $this->nilsemhas_model->tampil_data()->result();
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilsemhas', $data);
        $this->load->view('templates_administrator/footer_lec');
    }

    public function detail($id_nilsemhas)
    {
        $data['detail'] = $this->nilsemhas_model->ambil_id_nilsemhas($id_nilsemhas);
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilsemhas_detail',  $data);
        $this->load->view('templates_administrator/footer_lec');
    }

    public function update($id)
    {
        $where = array('id_nilsemhas' => $id);
        $data['nilsemhas'] = $this->nilsemhas_model->edit_data(
            $where,
            'nilsemhas'
        )->result();
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilsemhas_update', $data);
        $this->load->view('templates_administrator/footer_lec');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_nilsemhas');
        $nilsemhas_1 = $this->input->post('nilsemhas_1');
        $nilsemhas_2 = $this->input->post('nilsemhas_2');
        $nilsemhas_3 = $this->input->post('nilsemhas_3');


        // Menghitung nilai total
        $nilsemhas_total = $nilsemhas_1 * 0.1 + $nilsemhas_2 * 0.3 + $nilsemhas_3 * 0.6;

        // Cek jumlah pengisian nilai oleh dosen
        $pengisian_count = $this->nilsemhas_model->get_pengisian_count($id); // Mengambil jumlah pengisian dari database
        $max_pengisian = 6; // Jumlah maksimal pengisian oleh dosen

        if ($pengisian_count < $max_pengisian) {
            $data = array(
                'nilsemhas_1' => $nilsemhas_1,
                'nilsemhas_2' => $nilsemhas_2,
                'nilsemhas_3' => $nilsemhas_3,
                'nilsemhas_total' => $nilsemhas_total
            );

            $where = array(
                'id_nilsemhas' => $id
            );

            // Menyimpan data nilai ke database
            $this->nilsemhas_model->update_data($where, $data, 'nilsemhas');

            // Update jumlah pengisian
            $this->nilsemhas_model->increment_pengisian_count($id);



            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    Nilai Seminar Hasil Berhasil Ditambahkan!
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

        redirect('administrator/nilsemhas');
    }


    public function _rules()
    {
        $this->form_validation->set_rules(
            'nilsemhas_1',
            'nilsemhas_1',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'nilsemhas_2',
            'nilsemhas_2',
            'required',
            ['required' => 'Wajib Diisi!']
        );
        $this->form_validation->set_rules(
            'nilsemhas_3',
            'nilsemhas_3',
            'required',
            ['required' => 'Wajib Diisi!']
        );
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['nilsemhas'] = $this->nilsemhas_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header_lec');
        $this->load->view('templates_administrator/sidebar_lec');
        $this->load->view('administrator/nilsemhas', $data);
        $this->load->view('templates_administrator/footer_lec');
    }
}
