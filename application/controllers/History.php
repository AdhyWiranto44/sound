<?php

defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('history_model', 'history');
  }

  public function transactionlist()
  {
    $data['title'] = 'Transaction List';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['transactionlist'] = $this->history->getHistory();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('history/transactionlist', $data);
    $this->load->view('templates/footer');
  }
}
