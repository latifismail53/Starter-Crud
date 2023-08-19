<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model', 'am');
    date_default_timezone_set('Asia/Jakarta');
  }


  function login()
  {
    check_already_logged_in();
    $this->load->view('login_view');
  }

  function do_login()
  {
  }

  function validate()
  {
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect();
  }
}
