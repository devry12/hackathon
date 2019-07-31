<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        $this->data['title_template'] = "Pickme Up";
        $this->load->view('template/header', $this->data);
        $this->load->view('dashboard', $this->data);
        $this->load->view('template/footer');
    }
}
