<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Register_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->library('user_agent');
  }

  function setLogin($username, $password)
  {
  }
}
