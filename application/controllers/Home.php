<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
<<<<<<< HEAD
  public function __construct()
  {
      parent::__construct();
      $this->load->model('Transaction_model', 'transaction');
      $this->load->library('cart');
  }
  
=======


>>>>>>> 6b5663a8cfb2a5c9cc6b932b9796642d06f16d80
  public function index()
  {
    $email =  $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()['email'];

    $data['title'] = 'Sound';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
<<<<<<< HEAD
    $data['count'] =  $this->db->where(['email_user'=>$email])->from("cart")->count_all_results();
    $data['item'] = $this->transaction->showAllCartItemByUser();
   
=======
    $data['count'] =  $this->db->where(['email_user' => $email])->from("cart")->count_all_results();
>>>>>>> 6b5663a8cfb2a5c9cc6b932b9796642d06f16d80

    $this->load->view('templates/header_content', $data);
    $this->load->view('templates/navbar_content', $data);
    $this->load->view('home/index', $data);
    $this->load->view('templates/footer_content', $data);
  }
}
