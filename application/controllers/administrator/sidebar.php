<?php

class Sidebar extends CI_Controller
{
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('administrator/auth');
    }
}
