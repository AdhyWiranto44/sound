<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Products_model');
      $this->load->model('transaction_model', 'transaction');
   }

   public function headphones()
   {
      $data['title'] = 'Headphones';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model("products_model");
      $data["headphones"] = $this->products_model->getHeadphones();
      $data["count"] = $this->transaction->getCartTotalUser();
      $data['item'] = $this->transaction->showAllCartItemByUser();

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
      $data["count"] = $this->transaction->getCartTotalUser();
      $data['earphones'] = $this->products_model->getEarphones();
      $data['item'] = $this->transaction->showAllCartItemByUser();

      $this->load->view('templates/header_content', $data);
      $this->load->view('templates/navbar_content', $data);
      $this->load->view('products/earphones', $data);
      $this->load->view('templates/footer_content');
   }

   public function brands()
   {
      $data['title'] = 'Brands';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data["count"] = $this->transaction->getCartTotalUser();
      $data['item'] = $this->transaction->showAllCartItemByUser();

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
      $data["count"] = $this->transaction->getCartTotalUser();
      $data['item'] = $this->transaction->showAllCartItemByUser();

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
      $data["count"] = $this->transaction->getCartTotalUser();
      $data['item'] = $this->transaction->showAllCartItemByUser();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('products/dataheadphones', $data);
      $this->load->view('templates/footer');
   }

   public function dataEarphones()
   {
      is_logged_in();
      $data['title'] = 'Data Earphones';
      $data['barang'] = $this->Products_model->getEarphones();
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data["count"] = $this->transaction->getCartTotalUser();
      $data['item'] = $this->transaction->showAllCartItemByUser();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('products/dataearphones', $data);
      $this->load->view('templates/footer');
   }

   //menambahkan produk headphone
   public function tambahHeadphone()
   {
      $nama_produk = htmlspecialchars($this->input->post('nama_produk'));
      $merk_produk = htmlspecialchars($this->input->post('merk_produk'));
      $harga_produk = htmlspecialchars($this->input->post('harga_produk'));
      $tipe_produk = "Headphone";
      $gambar_produk = $_FILES['gambar_produk']['name'];

      // cek jika ada gambar yang akan diupload
      if ($gambar_produk) {
         $config['allowed_types'] = 'gif|jpg|jpeg|png';
         $config['max_size'] = '8192'; // in kb
         $config['upload_path'] = './assets/products/headphone/';

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('gambar_produk')) {
            $upload_image = $this->upload->data('file_name');
            $this->db->set('gambar_produk', $upload_image);
         } else {
            $this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>Wrong image format! </br>Allowed format: gif\jpg\jpeg\png </br>max size: 8 Mb</div>");
            redirect('products/dataHeadphones');
         }
      }

      $data = [
         'nama_produk' => $nama_produk,
         'merk_produk' => $merk_produk,
         'harga_produk' => $harga_produk,
         'tipe_produk' => $tipe_produk,
         'gambar_produk' => $gambar_produk
      ];

      // $this->Products_model->tambahProduk($data, 'headset');
      $this->db->insert('headset', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show autoHide" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Ditambahkan!</div>');
      redirect('products/dataHeadphones');
   }

   //menambahkan produk earphone
   public function tambahEarphone()
   {
      $nama_produk = htmlspecialchars($this->input->post('nama_produk'));
      $merk_produk = htmlspecialchars($this->input->post('merk_produk'));
      $harga_produk = htmlspecialchars($this->input->post('harga_produk'));
      $tipe_produk = "Earphone";
      $gambar_produk = $_FILES['gambar_produk']['name'];

      // cek jika ada gambar yang akan diupload
      if ($gambar_produk) {
         $config['allowed_types'] = 'gif|jpg|jpeg|png';
         $config['max_size'] = '8192'; // in kb
         $config['upload_path'] = './assets/products/earphone/';

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('gambar_produk')) {
            $upload_image = $this->upload->data('file_name');
            $this->db->set('gambar_produk', $upload_image);
         } else {
            $this->session->set_flashdata('message', "<div class='alert alert-danger autoHide' role='alert'>Wrong image format! </br>Allowed format: gif\jpg\jpeg\png </br>max size: 8 Mb</div>");
            redirect('products/dataEarphones');
         }
      }

      $data = [
         'nama_produk' => $nama_produk,
         'merk_produk' => $merk_produk,
         'harga_produk' => $harga_produk,
         'tipe_produk' => $tipe_produk,
         'gambar_produk' => $gambar_produk
      ];

      // $this->Products_model->tambahProduk($data, 'headset');
      $this->db->insert('headset', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show autoHide" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Ditambahkan!</div>');
      redirect('products/dataEarphones');
   }

   //menghapus produk Headphone
   public function hapusHeadphone($id)
   {
      $this->Products_model->hapusHeadphone($id);

      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show autoHide" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Dihapus!</div>');
      redirect('products/dataHeadphones');
   }
   //menghapus produk earphone
   public function hapusEarphone($id)
   {
      $this->Products_model->hapusEarphone($id);
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show autoHide" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Dihapus!</div>');
      redirect('products/dataEarphones');
   }

   //edit Earphone
   public function editEarphone($id)
   {
      $data['title'] = 'Ubah Earphone';
      $where  = array('id_headset' => $id);
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['barang'] = $this->Products_model->editProduk($where, 'headset')->result();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('products/editEarphones', $data);
      $this->load->view('templates/footer');
   }
   public function ubahEarphone()
   {
      $id = $this->input->post('id_headset');
      $nama_produk = $this->input->post('nama_produk');
      $merk_produk = $this->input->post('merk_produk');
      $harga_produk = $this->input->post('harga_produk');
      $gambar_produk = $_FILES['gambar_produk']['name'];

      $data = array(
         'nama_produk' => $nama_produk,
         'merk_produk' => $merk_produk,
         'harga_produk' => $harga_produk,
         // 'tipe_produk' => $tipe_produk,
         'gambar_produk' => $gambar_produk
      );

      $where = array(
         'id_headset' => $id
      );

      $this->Products_model->ubahProduk($where, $data, 'headset');
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show autoHide" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Diubah!</div>');
      redirect('products/dataEarphones');
   }
   //edit headphone
   public function editHeadphone($id)
   {
      $data['title'] = 'Ubah Headphone';
      $where  = array('id_headset' => $id);
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['barang'] = $this->Products_model->editProduk($where, 'headset')->result();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('products/editHeadphones', $data);
      $this->load->view('templates/footer');
   }
   public function ubahHeadphone()
   {
      $id = $this->input->post('id_headset');
      $nama_produk = $this->input->post('nama_produk');
      $merk_produk = $this->input->post('merk_produk');
      $harga_produk = $this->input->post('harga_produk');
      $gambar_produk = $_FILES['gambar_produk']['name'];

      $data = array(
         'nama_produk' => $nama_produk,
         'merk_produk' => $merk_produk,
         'harga_produk' => $harga_produk,
         // 'tipe_produk' => $tipe_produk,
         'gambar_produk' => $gambar_produk
      );

      $where = array(
         'id_headset' => $id
      );

      $this->Products_model->ubahProduk($where, $data, 'headset');
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show autoHide" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Diubah!</div>');
      redirect('products/dataHeadphones');
   }
}
