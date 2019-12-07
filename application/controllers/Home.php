<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $this->load->view('templates/header_content');
    $this->load->view('home/index');
    $this->load->view('templates/footer_content');
  }
}
