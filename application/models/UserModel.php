<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function insertRegister($data)
  {
    return $this->db->insert('user', $data);
  }

  public function findAll()
  {
    return $this->db->get('user')->row_array();
  }

  public function findByEmail($email)
  {
    return $this->db->get_where('user', array('email' => $email))->row_array();
  }

  public function auth($email, $password)
  {
    $user = $this->findByEmail($email);
    if (!$user) {
      return false;
    }
    return password_verify($password, $user['password']);
  }
}
