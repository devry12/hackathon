<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginusers extends CI_Controller {

    public function index()
    {
        $this->data['title_template'] = "Login Users";
        $this->load->view('login_users', $this->data);
    }
}
