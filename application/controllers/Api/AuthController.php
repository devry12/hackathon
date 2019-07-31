<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AuthController extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    header("Access-Control-Allow-Headers: origin, x-requested-with, content-type, x-api-key");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    $this->load->model('AuthModel');
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

    public function login()
	{
    $this->form_validation->set_rules('username', 'Username', 'required|callback_CheckUsername');
    $this->form_validation->set_rules('password', 'Password', 'required|callback_CheckPassword');
    $this->form_validation->set_error_delimiters('', '');
    if ($this->form_validation->run() == false) {
      $data = [
        'success' => false,
        'message' => validation_errors(),
      ];
      $this->response($data);
    }else {
      $user = $this->AuthModel->get_user('username',$this->input->post('username'));
      $data = [
        'success' => true,
        'idUsers'     => $user['idusers'],
        'username'     => $user['username'],
        'role'     => $user['roleName'],
        'message' => 'berhasil',
      ];
      $this->response($data);
    }
  }
  

  //this for check Nim
  public function CheckUsername($username)
  {
    if(!$this->AuthModel->get_user('username',$username)){
      $this->form_validation->set_message('CheckUsername','This %s Not exists.');
      return false;
    }
    return true;
  }
  //this for check password
public function CheckPassword($password)
{
    $user = $this->AuthModel->get_user('username',$this->input->post('username'));
    if (!$this->AuthModel->CheckPassword($user['username'],$password))
    {
      $this->form_validation->set_message('CheckPassword','This %s is incorrect.');
      return false;
    }
    return true;
}

}