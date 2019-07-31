<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class DriverModel extends CI_Model {

    public function naik(int $id)
    {
      $this->db->set('status', '1');
      $this->db->where('userStudents_iduserStudents', $id);
      $this->db->where('userDrivers_iduserDrivers', 1);
      if ($this->db->update('orders')) {
        return true;
      }else {
        return false;
      }
    }
    public function turun(int $id)
    {
      $this->db->set('status', '2');
      $this->db->where('userStudents_iduserStudents', $id);
      $this->db->where('userDrivers_iduserDrivers', 1);
      if ($this->db->update('orders')) {
        return true;
      }else {
        return false;
      }
    }

  //this for get user from database
    public function statusSiswa($id)
    {
    $this->db->select('*');
    $this->db->from('orders');
    $this->db->where('userDrivers_iduserDrivers',$id);
    $query = $this->db->get();
    return $query->result_object();
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