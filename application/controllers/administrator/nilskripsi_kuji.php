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
        $captcha_response = $this->input->post('g-recaptcha-response');
        $secret_key = '6Lf9nq4nAAAAAHLUNnMhTa1hXk8cE7NagLLTCcaK';
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$captcha_response");
        $responseKeys = json_decode($response, true);

        if (intval($responseKeys["success"]) !== 1) {
            // Captcha tidak valid
            $this->session->set_flashdata('pesan', 'Captcha tidak valid. Harap coba lagi.');
            redirect('administrator/nilsemhas');
        }
        $captcha_answer = $this->input->post('captcha_answer');

        // Verifikasi Captcha
        if ($captcha_answer == $sum) {
            // Captcha benar
            // Lanjutkan dengan proses pengisian nilai
        } else {
            // Captcha salah
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Perhitungan Salah! Silahkan coba lagi.
            <button type="button" class="btn btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>');
            redirect('administrator/nilsemhas');
        }

        $id = $this->input->post('id_nilskripsi_kuji');
        $nilskripsi_kuji_1 = floatval($this->input->post('nilskripsi_kuji_1'));
        $nilskripsi_kuji_2 = floatval($this->input->post('nilskripsi_kuji_2'));
        $nilskripsi_kuji_3 = floatval($this->input->post('nilskripsi_kuji_3'));
        $nilskripsi_kuji_4 = floatval($this->input->post('nilskripsi_kuji_4'));
        $nilskripsi_kuji_5 = floatval($this->input->post('nilskripsi_kuji_5'));
        $nilskripsi_kuji_6 = floatval($this->input->post('nilskripsi_kuji_6'));
        $nilskripsi_kuji_7 = floatval($this->input->post('nilskripsi_kuji_7'));
        $nim_post = $this->input->post('nim');

        // Mendapatkan nama dari sesi atau sumber lainnya
        $username = $this->session->userdata('username');
        $nama = $this->session->userdata('nama');
        $id_user = $this->session->userdata('id_user');

        // Cek apakah dosen telah melakukan pengisian sebelumnya
        $existing_dosen_data = $this->nilskripsi_kuji_model->get_dosen_data($id, $username);
        if (!$existing_dosen_data) {
            // Dosen belum melakukan pengisian, lanjutkan
            $pengisian_count = $this->nilskripsi_kuji_model->get_pengisian_count($id); // Mengambil jumlah pengisian dari database
            $max_pengisian = 3; // Jumlah maksimal pengisian oleh dosen

            if ($pengisian_count < $max_pengisian) {
                $existing_data = $this->nilskripsi_kuji_model->ambil_id_nilskripsi_kuji($id);
                $existing_nilskripsi_kuji_1 = $existing_data[0]->nilskripsi_kuji_1;
                $existing_nilskripsi_kuji_2 = $existing_data[0]->nilskripsi_kuji_2;
                $existing_nilskripsi_kuji_3 = $existing_data[0]->nilskripsi_kuji_3;
                $existing_nilskripsi_kuji_4 = $existing_data[0]->nilskripsi_kuji_4;
                $existing_nilskripsi_kuji_5 = $existing_data[0]->nilskripsi_kuji_5;
                $existing_nilskripsi_kuji_6 = $existing_data[0]->nilskripsi_kuji_6;
                $existing_nilskripsi_kuji_7 = $existing_data[0]->nilskripsi_kuji_7;


                // Menghitung rata-rata nilai baru
                $updated_nilskripsi_kuji_1 = ($existing_nilskripsi_kuji_1 * $pengisian_count + $nilskripsi_kuji_1) / ($pengisian_count + 1);
                $updated_nilskripsi_kuji_2 = ($existing_nilskripsi_kuji_2 * $pengisian_count + $nilskripsi_kuji_2) / ($pengisian_count + 1);
                $updated_nilskripsi_kuji_3 = ($existing_nilskripsi_kuji_3 * $pengisian_count + $nilskripsi_kuji_3) / ($pengisian_count + 1);
                $updated_nilskripsi_kuji_4 = ($existing_nilskripsi_kuji_4 * $pengisian_count + $nilskripsi_kuji_4) / ($pengisian_count + 1);
                $updated_nilskripsi_kuji_5 = ($existing_nilskripsi_kuji_5 * $pengisian_count + $nilskripsi_kuji_5) / ($pengisian_count + 1);
                $updated_nilskripsi_kuji_6 = ($existing_nilskripsi_kuji_6 * $pengisian_count + $nilskripsi_kuji_6) / ($pengisian_count + 1);
                $updated_nilskripsi_kuji_7 = ($existing_nilskripsi_kuji_7 * $pengisian_count + $nilskripsi_kuji_7) / ($pengisian_count + 1);

                // // Menghitung nilai total untuk skripsi
                $nilskripsi_kuji_k = $updated_nilskripsi_kuji_1 * 0.1 + $updated_nilskripsi_kuji_2 * 0.25 + $updated_nilskripsi_kuji_3 * 0.1 + $updated_nilskripsi_kuji_4 * 0.25
                    + $updated_nilskripsi_kuji_5 * 0.3;

                // Menghitung nilai total untuk ujian skripsi
                $nilskripsi_kuji_u = $updated_nilskripsi_kuji_6 * 0.3 + $updated_nilskripsi_kuji_7 * 0.7;

                $data = array(
                    'nilskripsi_kuji_1' => $updated_nilskripsi_kuji_1,
                    'nilskripsi_kuji_2' => $updated_nilskripsi_kuji_2,
                    'nilskripsi_kuji_3' => $updated_nilskripsi_kuji_3,
                    'nilskripsi_kuji_4' => $updated_nilskripsi_kuji_4,
                    'nilskripsi_kuji_5' => $updated_nilskripsi_kuji_5,
                    'nilskripsi_kuji_6' => $updated_nilskripsi_kuji_6,
                    'nilskripsi_kuji_7' => $updated_nilskripsi_kuji_7,
                    'nilskripsi_kuji_k' => $nilskripsi_kuji_k,
                    'nilskripsi_kuji_u' => $nilskripsi_kuji_u,
                    'nim' => $nim_post
                );

                $where = array(
                    'id_nilskripsi_kuji' => $id
                );

                // Menyimpan data nilai ke tabel nilskripsi_kuji
                $this->nilskripsi_kuji_model->update_data($where, $data, 'nilskripsi_kuji');

                // Menyimpan data nilai ke tabel nilskripsi_kuji_dosen
                $data_dosen = array(
                    'id_nilskripsi_kuji' => $id,
                    'username' => $username,
                    'nama' => $nama,
                    'id_user' => $id_user,
                    'nilskripsi_kuji_1' => $nilskripsi_kuji_1,
                    'nilskripsi_kuji_2' => $nilskripsi_kuji_2,
                    'nilskripsi_kuji_3' => $nilskripsi_kuji_3,
                    'nilskripsi_kuji_4' => $nilskripsi_kuji_4,
                    'nilskripsi_kuji_5' => $nilskripsi_kuji_5,
                    'nilskripsi_kuji_6' => $nilskripsi_kuji_6,
                    'nilskripsi_kuji_7' => $nilskripsi_kuji_7
                );
                $this->nilskripsi_kuji_model->input_data_dosen($data_dosen);

                // Update jumlah pengisian
                $this->nilskripsi_kuji_model->increment_pengisian_count($id);

                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Anda berhasil melakukan pengisian nilai!
    <button type="button" class="btn btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Pengisian nilai telah mencapai batas maksimal!
    <button type="button" class="btn btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Anda telah melakukan pengisian nilai sebelumnya!
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
