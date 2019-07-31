<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AuthController extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    header("Access-Control-Allow-Headers: origin, x-requested-with, content-type, x-api-key");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    // $this->load->model('AuthModel');
  }

  function response($data)
  {
    $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
    ->_display();
    exit;
  }

    public function index()
    {
        $this->load->view('welcome');
    }

    public function register()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('role','Role','required');
        $this->form_validation->set_error_delimiters('', '');
        if ($this->form_validation->run() == FALSE)
        {
            $data = [
                'success' => false,
                'message' => validation_errors(),
              ];
              return $this->response($data);
        }else{
             echo "berhasil";
        }
    }

}