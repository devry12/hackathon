<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('AuthModel');
    }

	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function registerParent()
    {
            $this->form_validation->set_rules('username','Username','required|is_unique[users.username]');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('role','Role','required');
            $this->form_validation->set_error_delimiters('', '');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('Auth/registerParent');
            }else{
                if($this->AuthModel->register()){
                    // Set flash data 
                    $this->session->set_flashdata('success', 'berhasil');
                    // After that you need to used redirect function instead of load view such as 
                    redirect("/");
                }else{
                    echo "gagal";
                }
            }
    }
    public function registerDriver()
    {
            $this->form_validation->set_rules('username','Username','required|is_unique[users.username]');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('role','Role','required');
            $this->form_validation->set_error_delimiters('', '');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('Auth/registerDriver');
            }else{
                if($this->AuthModel->register()){
                    // Set flash data 
                    $this->session->set_flashdata('success', 'berhasil');
                    // After that you need to used redirect function instead of load view such as 
                    redirect("/");
                }else{
                    echo "gagal";
                }
            }
    }
}
