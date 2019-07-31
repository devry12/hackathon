<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('driver');
        $this->load->view('template/footer');
    }
}
