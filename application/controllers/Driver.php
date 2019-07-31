<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends CI_Controller {

    public function index()
    {
        $this->data['title_template'] = "Data Mitra Driver";
        $this->load->view('template/header', $this->data);
        $this->load->view('driver', $this->data);
        $this->load->view('template/footer');
    }
}
