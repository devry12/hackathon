<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parents extends CI_Controller {

    public function index()
    {
        $this->data['title_template'] = "Data Orang Tua";
        $this->load->view('template/header', $this->data);
        $this->load->view('parent', $this->data);
        $this->load->view('template/footer');
    }
}
