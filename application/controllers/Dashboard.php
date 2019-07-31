<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->data['title_template'] = "Dashboard";
        $this->load->view('template/header', $this->data);
        $this->load->view('dashboard', $this->data);
        $this->load->view('template/footer');
    }
}
