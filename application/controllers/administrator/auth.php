<?php

class Auth extends CI_Controller
{
    public function index()
    {
        // Cek status login
        if ($this->session->userdata('logged_in')) {
            // Jika sudah login, redirect ke halaman dashboard
            redirect('administrator/dashboard');
        } else {
            // Jika belum login, tampilkan halaman login
            $this->load->view('templates_administrator/header_lec');
            $this->load->view('administrator/login');
            $this->load->view('templates_administrator/footer_lec');
        }
    }

    public function proses_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'NIP cannot be empty!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password cannot be empty!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/header_lec');
            $this->load->view('administrator/login');
            $this->load->view('templates_administrator/footer_lec');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $username;
            $pass = MD5($password);

            $cek = $this->login_model->cek_login($user, $pass);

            if ($cek->num_rows() > 0) {
                foreach ($cek->result() as $ck) {
                    $sess_data['username'] = $ck->username;
                    $sess_data['level'] = $ck->level;
                    $sess_data['nama'] = $ck->nama;

                    $this->session->set_userdata($sess_data);
                }

                if ($sess_data['level'] == 'dosen') {
                    redirect('administrator/dashboard_dosen');
                } elseif ($sess_data['level'] == 'admin') {
                    redirect('administrator/dashboard_admin');
                } else {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Invalid NIP or password!
                            <button type="button" class="btn btn-close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('administrator/auth');
                }
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid NIP or password!
                        <button type="button" class="btn btn-close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('administrator/auth');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('administrator/auth');
    }
}
