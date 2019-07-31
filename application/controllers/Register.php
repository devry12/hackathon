<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function orang_tua()
    {
        $this->data['title_template'] = "Daftar Sebagai Orang Tua";
        $this->load->view('register_orang_tua', $this->data);
    }

    public function driver()
    {
        $this->data['title_template'] = "Daftar Sebagai Driver";
        $this->load->view('register_driver', $this->data);
    }
}
