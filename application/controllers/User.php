<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // $this->load->model('UserModel');

    if (!$this->session->userdata('logged_in')) {
      $this->session->set_flashdata('failed', '<b>Login First!</b>');
      redirect('auth/login');
    }
  }

  public function index()
  {
    $this->load->view('templates/header_dash');
    $this->load->view('templates/side_dash');
    $this->load->view('dashboard/dashboard');
    $this->load->view('templates/footer_dash');
  }

  public function error()
  {
    $this->load->view('templates/header_form');
    $this->load->view('form/logged_in');
  }
}
