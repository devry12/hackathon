<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AuthModel extends CI_Model {

    public function register()
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'roleName' => $this->input->post('role'),
        ];

        if($this->db->insert('users',$data)){
          $id = $this->db->insert_id();

          if ($this->input->post('role') == 'parent') {
            $datas = [
              'iduserParents' => $id
            ];
            $this->db->insert('userParents',$datas);
          }else {
            $datas = [
              'iduserDrivers' => $id
            ];
            $this->db->insert('userDrivers',$datas);
          };
            return true;
        }else{
            return false;
        }
    }

  //this for get user from database
    public function get_user($key,$val)
    {
      $query = $this->db->get_where('users',array($key=>$val ));
      if (!empty($query->row_array())) {
        return $query->row_array();
      }
      return false;
    }
  //this for check password correct or not in database
  public function CheckPassword($username,$password)
  {
    $hash = $this->get_user('username',$username)['password'];
    if (password_verify($password,$hash)) {
      return true;
    }
    return false;
  }
}