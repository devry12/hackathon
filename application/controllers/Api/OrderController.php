<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class OrderController extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    header("Access-Control-Allow-Headers: origin, x-requested-with, content-type, x-api-key");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    $this->load->model('DriverModel');
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

    public function naikBus($id)
    {
      if (!$this->DriverModel->naik($id)) {
        $data = [
            'success' => false,
            'message' => 'gagal mengubah data order',
          ];
          $this->response($data);
      }else {
        $data = [
            'success' => true,
            'message' => 'berhasil mengubah data order',
          ];
          $this->response($data);
      }
 
    }
    public function turunBus($id)
    {
      if (!$this->DriverModel->turun($id)) {
        $data = [
            'success' => false,
            'message' => 'gagal mengubah data order',
          ];
          $this->response($data);
      }else {
        $data = [
            'success' => true,
            'message' => 'berhasil mengubah data order',
          ];
          $this->response($data);
      }
 
    }
    public function statusSiswa($id)
    {   
       $this->response($this->DriverModel->statusSiswa($id));
    }

   

}