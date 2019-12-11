<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Products_model');
   }

   public function showHeadphones()
   {
      $data['title'] = 'Headphones';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model("products_model");
      $data["headphones"] = $this->products_model->getHeadphones();

      $this->load->view('templates/header_content', $data);
      $this->load->view('templates/navbar_content', $data);
      $this->load->view('products/headphones', $data);
      $this->load->view('templates/footer_content');
   }

   public function showEarphones()
   {
      $data['title'] = 'Earphones';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model("products_model");
      $data["earphones"] = $this->products_model->getEarphones();

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

   public function detailProduct($id)
   {
      $data['judul'] = 'Detail Produk';
      $data['detail'] = $this->Products_model->getProductById($id);

      $this->load->view('templates/header_content', $data);
      $this->load->view('templates/navbar_content', $data);
      $this->load->view('products/detail', $data);
      $this->load->view('templates/footer_content');
   }
}
