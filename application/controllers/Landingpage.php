<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller {

    public function index()
    {
        $this->data['title_template'] = "Pickme Up";
        $this->load->view('landing_page', $this->data);
    }
}
