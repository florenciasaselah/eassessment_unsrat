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

        $id = $this->input->post('id_nilsemhas');
        $nilsemhas_1 = $this->input->post('nilsemhas_1');
        $nilsemhas_2 = $this->input->post('nilsemhas_2');
        $nilsemhas_3 = $this->input->post('nilsemhas_3');

        // Mendapatkan nama dari sesi atau sumber lainnya
        $username = $this->session->userdata('username');
        $nama = $this->session->userdata('nama');
        $id_user = $this->session->userdata('id_user');

        // Cek apakah dosen telah melakukan pengisian sebelumnya
        $existing_dosen_data = $this->nilsemhas_model->get_dosen_data($id, $username);
        if (!$existing_dosen_data) {
            // Dosen belum melakukan pengisian, lanjutkan
            $pengisian_count = $this->nilsemhas_model->get_pengisian_count($id); // Mengambil jumlah pengisian dari database
            $max_pengisian = 6; // Jumlah maksimal pengisian oleh dosen

            if ($pengisian_count < $max_pengisian) {
                $existing_data = $this->nilsemhas_model->ambil_id_nilsemhas($id);
                $existing_nilsemhas_1 = $existing_data[0]->nilsemhas_1;
                $existing_nilsemhas_2 = $existing_data[0]->nilsemhas_2;
                $existing_nilsemhas_3 = $existing_data[0]->nilsemhas_3;

                // Menghitung rata-rata nilai baru
                $updated_nilsemhas_1 = ($existing_nilsemhas_1 * $pengisian_count + $nilsemhas_1) / ($pengisian_count + 1);
                $updated_nilsemhas_2 = ($existing_nilsemhas_2 * $pengisian_count + $nilsemhas_2) / ($pengisian_count + 1);
                $updated_nilsemhas_3 = ($existing_nilsemhas_3 * $pengisian_count + $nilsemhas_3) / ($pengisian_count + 1);

                // Menghitung nilai total berdasarkan rata-rata baru
                $nilsemhas_total = $updated_nilsemhas_1 * 0.1 + $updated_nilsemhas_2 * 0.3 + $updated_nilsemhas_3 * 0.6;

                $data = array(
                    'nilsemhas_1' => $updated_nilsemhas_1,
                    'nilsemhas_2' => $updated_nilsemhas_2,
                    'nilsemhas_3' => $updated_nilsemhas_3,
                    'nilsemhas_total' => $nilsemhas_total
                );

                $where = array(
                    'id_nilsemhas' => $id
                );

                // Menyimpan data nilai ke tabel nilsemhas
                $this->nilsemhas_model->update_data($where, $data, 'nilsemhas');

                // Menyimpan data nilai ke tabel nilsemhas_dosen
                $data_dosen = array(
                    'id_nilsemhas' => $id,
                    'username' => $username,
                    'nama' => $nama,
                    'id_user' => $id_user,
                    'nilsemhas_1' => $nilsemhas_1,
                    'nilsemhas_2' => $nilsemhas_2,
                    'nilsemhas_3' => $nilsemhas_3
                );
                $this->nilsemhas_model->input_data_dosen($data_dosen);

                // Update jumlah pengisian
                $this->nilsemhas_model->increment_pengisian_count($id);

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
