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

    public function loginParent()
	{
    $this->form_validation->set_rules('username', 'Username', 'required|callback_CheckUsername');
    $this->form_validation->set_rules('password', 'Password', 'required|callback_CheckPassword');
    $this->form_validation->set_error_delimiters('', '');
    if ($this->form_validation->run() == false) {
        $this->load->view('Auth/loginParent.php');
    }else {
        echo "berhasil";
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
