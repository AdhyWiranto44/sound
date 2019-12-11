<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
   public function showHeadphones()
   {
      $data['title'] = 'Headphones';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header_content', $data);
      $this->load->view('templates/navbar_content', $data);
      $this->load->view('products/headphones', $data);
      $this->load->view('templates/footer_content');
   }

   public function showEarphones()
   {
      $data['title'] = 'Earphones';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header_content', $data);
      $this->load->view('templates/navbar_content', $data);
      $this->load->view('products/earphones', $data);
      $this->load->view('templates/footer_content');
   }

   public function showBrands()
   {
      $data['title'] = 'Brands';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header_content', $data);
      $this->load->view('templates/navbar_content', $data);
      $this->load->view('products/brands', $data);
      $this->load->view('templates/footer_content');
   }
}
