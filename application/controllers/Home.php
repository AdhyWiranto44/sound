<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header_content');
    $this->load->view('templates/navbar_content', $data);
    $this->load->view('home/index', $data);
    $this->load->view('templates/footer_content');
  }
}
