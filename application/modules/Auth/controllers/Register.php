<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Register_model', 'rm');
    date_default_timezone_set('Asia/Jakarta');
  }


  function index()
  {
    $this->load->view('register_view');
  }

  function create()
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
