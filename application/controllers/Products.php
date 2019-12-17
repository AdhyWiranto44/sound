<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Products_model');
   }

   public function headphones()
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

   public function earphones()
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

   public function brands()
   {
      $data['title'] = 'Brands';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header_content', $data);
      $this->load->view('templates/navbar_content', $data);
      $this->load->view('products/brands', $data);
      $this->load->view('templates/footer_content');
   }

   public function detail($id)
   {
      $data['title'] = 'Detail';
      $data['detail'] = $this->Products_model->getProductById($id);
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header_content', $data);
      $this->load->view('templates/navbar_content', $data);
      $this->load->view('products/detail', $data);
      $this->load->view('templates/footer_content');
   }

   public function dataHeadphones()
   {
      is_logged_in();
      $data['title'] = 'Data Headphones';
      $data['barang'] = $this->Products_model->getHeadphones();
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('products/dataHeadphones', $data);
      $this->load->view('templates/footer');
   }

   public function dataEarphones()
   {
      is_logged_in();
      $data['title'] = 'Data Earphones';
      $data['barang'] = $this->Products_model->getEarphones();
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('products/dataEarphones', $data);
      $this->load->view('templates/footer');
   }

   //menambahkan produk headphone
   public function tambahHeadphone()
   {
      $nama_produk = $this->input->post('nama_produk');
      $merk_produk = $this->input->post('merk_produk');
      $harga_produk = $this->input->post('harga_produk');
      $tipe_produk = $this->input->post('tipe_produk');
      $gambar_produk = $_FILES['gambar_produk']['name'];

      // cek jika ada gambar yang akan diupload
      if ($gambar_produk = '') { } else {
         $config['upload_path'] = './assets/products/headphone/';
         $config['allowed_types'] = 'jpg|jpeg|png|gif';
         $this->load->library('upload', $config);

         if (!$this->upload->do_upload('gambar_produk')) {
            echo "Gambar gagal diupload!";
         } else {
            $gambar_produk = $this->upload->data('file_name');
         }
      }
      $data = array(
         'nama_produk' => $nama_produk,
         'merk_produk' => $merk_produk,
         'harga_produk' => $harga_produk,
         'tipe_produk' => $tipe_produk,
         'gambar_produk' => $gambar_produk
      );
      $this->Products_model->tambahProduk($data, 'headset');
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Ditambahkan!</div>');
      redirect('products/dataHeadphones');
   }

   //menghapus produk Headphone
   public function hapusHeadphone($id)
   {
      $this->Products_model->hapusProduk($id);
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Dihapus!</div>');
      redirect('products/dataHeadphones');
   }

   //menambahkan produk earphone
   public function tambahEarphone()
   {
      $nama_produk = $this->input->post('nama_produk');
      $merk_produk = $this->input->post('merk_produk');
      $harga_produk = $this->input->post('harga_produk');
      $tipe_produk = $this->input->post('tipe_produk');
      $gambar_produk = $_FILES['gambar_produk']['name'];

      // cek jika ada gambar yang akan diupload
      if ($gambar_produk = '') { } else {
         $config['upload_path'] = './assets/products/earphone/';
         $config['allowed_types'] = 'jpg|jpeg|png|gif';
         $this->load->library('upload', $config);

         if (!$this->upload->do_upload('gambar_produk')) {
            echo "Gambar gagal diupload!";
         } else {
            $gambar_produk = $this->upload->data('file_name');
         }
      }
      $data = array(
         'nama_produk' => $nama_produk,
         'merk_produk' => $merk_produk,
         'harga_produk' => $harga_produk,
         'tipe_produk' => $tipe_produk,
         'gambar_produk' => $gambar_produk
      );
      $this->Products_model->tambahProduk($data, 'headset');
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Ditambahkan!</div>');
      redirect('products/dataEarphones');
   }
}
