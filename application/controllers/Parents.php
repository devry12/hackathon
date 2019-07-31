<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parents extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('parent');
        $this->load->view('template/footer');
    }
}
