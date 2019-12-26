<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('products_model', 'products');
      $this->load->model('transaction_model', 'transaction');
   }

   public function headphones()
   {
      $data['title'] = 'Headphones';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data["headphones"] = $this->products->getHeadphones();
      $data["count"] = $this->transaction->getCartTotalUser();
      $data['item'] = $this->transaction->showAllCartItemByUser();

      // pagination
      $config['base_url'] = 'http://localhost/tubesrekweb/sound/products/headphones';
      $config['total_rows'] = $this->products->countAllHeadphones();
      $config['per_page'] = 5;

      //styling
      $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
      $config['full_tag_close'] = '</ul></nav>';

      $config['first_link'] = 'First';
      $config['first_tag_open'] = '<li class="page-item">';
      $config['first_tag_close'] = '</li>';

      $config['last_link'] = 'Last';
      $config['last_tag_open'] = '<li class="page-item">';
      $config['last_tag_close'] = '</li>';

      $config['next_link'] = '&raquo';
      $config['next_tag_open'] = '<li class="page-item">';
      $config['next_tag_close'] = '</li>';

      $config['prev_link'] = '&laquo';
      $config['prev_tag_open'] = '<li class="page-item">';
      $config['prev_tag_close'] = '</li>';

      $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
      $config['cur_tag_close'] = '</a></li>';

      $config['num_tag_open'] = '<li class="page-item">';
      $config['num_tag_close'] = '</li>';

      $config['attributes'] = array('class' => 'page-link');

      //initialize
      $this->pagination->initialize($config);

      $data['start'] = $this->uri->segment(3);
      $data["headphones"] = $this->products->getAllHeadphones(5, 10);

      $this->load->view('templates/header_content', $data);
      $this->load->view('templates/navbar_content', $data);
      $this->load->view('products/headphones', $data);
      $this->load->view('templates/footer_content');
   }

   public function earphones()
   {
      $data['title'] = 'Earphones';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data["earphones"] = $this->products->getEarphones();
      $data["count"] = $this->transaction->getCartTotalUser();
      $data['earphones'] = $this->products->getEarphones();
      $data['item'] = $this->transaction->showAllCartItemByUser();

      // pagination
      $config['base_url'] = 'http://localhost/tubesrekweb/sound/products/earphones';
      $config['total_rows'] = $this->products->countAllEarphones();
      $config['per_page'] = 5;

      //styling
      $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
      $config['full_tag_close'] = '</ul></nav>';

      $config['first_link'] = 'First';
      $config['first_tag_open'] = '<li class="page-item">';
      $config['first_tag_close'] = '</li>';

      $config['last_link'] = 'Last';
      $config['last_tag_open'] = '<li class="page-item">';
      $config['last_tag_close'] = '</li>';

      $config['next_link'] = '&raquo';
      $config['next_tag_open'] = '<li class="page-item">';
      $config['next_tag_close'] = '</li>';

      $config['prev_link'] = '&laquo';
      $config['prev_tag_open'] = '<li class="page-item">';
      $config['prev_tag_close'] = '</li>';

      $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
      $config['cur_tag_close'] = '</a></li>';

      $config['num_tag_open'] = '<li class="page-item">';
      $config['num_tag_close'] = '</li>';

      $config['attributes'] = array('class' => 'page-link');

      //initialize
      $this->pagination->initialize($config);

      $data['start'] = $this->uri->segment(3);
      $data["earphones"] = $this->products->getAllEarphones($config['per_page'], $data['start']);

      $this->load->view('templates/header_content', $data);
      $this->load->view('templates/navbar_content', $data);
      $this->load->view('products/earphones', $data);
      $this->load->view('templates/footer_content');
   }

   // public function brands()
   // {
   //    $data['title'] = 'Brands';
   //    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   //    $data["count"] = $this->transaction->getCartTotalUser();
   //    $data['item'] = $this->transaction->showAllCartItemByUser();

   //    $this->load->view('templates/header_content', $data);
   //    $this->load->view('templates/navbar_content', $data);
   //    $this->load->view('products/brands', $data);
   //    $this->load->view('templates/footer_content');
   // }

   public function detail($id)
   {
      $data['title'] = 'Detail';
      $data['detail'] = $this->products->getProductById($id);
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
      $data['barang'] = $this->products->getHeadphones();
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
      $data['barang'] = $this->products->getEarphones();
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

      // $this->products->tambahProduk($data, 'headset');
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

      // $this->products->tambahProduk($data, 'headset');
      $this->db->insert('headset', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show autoHide" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Ditambahkan!</div>');
      redirect('products/dataEarphones');
   }

   //menghapus produk Headphone
   public function hapusHeadphone($id)
   {
      $this->products->hapusHeadphone($id);

      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show autoHide" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Dihapus!</div>');
      redirect('products/dataHeadphones');
   }
   //menghapus produk earphone
   public function hapusEarphone($id)
   {
      $this->products->hapusEarphone($id);
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show autoHide" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Dihapus!</div>');
      redirect('products/dataEarphones');
   }

   //edit Earphone
   public function editEarphone($id)
   {
      $data['title'] = 'Edit Earphone';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['earphone'] = $this->products->getProductById($id);

      $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim');
      $this->form_validation->set_rules('merk_produk', 'Merk Produk', 'required|trim');
      $this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required|trim');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('products/editEarphone', $data);
         $this->load->view('templates/footer');
      } else {
         $nama_produk = $this->input->post('nama_produk');
         $merk_produk = $this->input->post('merk_produk');
         $harga_produk = $this->input->post('harga_produk');

         // cek jika ada gambar yang akan diupload
         $upload_image = $_FILES['image']['name'];

         if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '8192'; // in kb
            $config['upload_path'] = './assets/products/earphone';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
               $old_image = $data['earphone']['gambar_produk'];
               if ($old_image != $upload_image) {
                  unlink(FCPATH . 'assets/products/earphone/' . $old_image);
               }
               $new_image = $this->upload->data('file_name');
               $this->db->set('gambar_produk', $new_image);
            } else {
               $this->session->set_flashdata('message', "<div class='alert alert-danger autoHide' role='alert'>Wrong image format! </br>Allowed format: gif\jpg\jpeg\png </br>max size: 8 Mb</div>");
               redirect('products/dataEarphones');
            }
         }

         $this->db->set('nama_produk', $nama_produk);
         $this->db->set('merk_produk', $merk_produk);
         $this->db->set('harga_produk', $harga_produk);
         $this->db->where('id_headset', $id);
         $this->db->update('headset');

         $this->session->set_flashdata('message', '<div class="alert alert-success autoHide" role="alert">Data headset berhasil diubah!</div>');
         redirect('products/dataEarphones');
      }
   }
   //edit headphone
   public function editHeadphone($id)
   {
      $data['title'] = 'Edit Headphone';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['headphone'] = $this->products->getProductById($id);

      $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim');
      $this->form_validation->set_rules('merk_produk', 'Merk Produk', 'required|trim');
      $this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required|trim');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('products/editHeadphone', $data);
         $this->load->view('templates/footer');
      } else {
         $nama_produk = $this->input->post('nama_produk');
         $merk_produk = $this->input->post('merk_produk');
         $harga_produk = $this->input->post('harga_produk');

         // cek jika ada gambar yang akan diupload
         $upload_image = $_FILES['image']['name'];

         if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '8192'; // in kb
            $config['upload_path'] = './assets/products/headphone';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
               $old_image = $data['headphone']['gambar_produk'];
               if ($old_image != $upload_image) {
                  unlink(FCPATH . 'assets/products/headphone/' . $old_image);
               }
               $new_image = $this->upload->data('file_name');
               $this->db->set('gambar_produk', $new_image);
            } else {
               $this->session->set_flashdata('message', "<div class='alert alert-danger autoHide' role='alert'>Wrong image format! </br>Allowed format: gif\jpg\jpeg\png </br>max size: 8 Mb</div>");
               redirect('products/dataHeadphones');
            }
         }

         $this->db->set('nama_produk', $nama_produk);
         $this->db->set('merk_produk', $merk_produk);
         $this->db->set('harga_produk', $harga_produk);
         $this->db->where('id_headset', $id);
         $this->db->update('headset');

         $this->session->set_flashdata('message', '<div class="alert alert-success autoHide" role="alert">Data headset berhasil diubah!</div>');
         redirect('products/dataHeadphones');
      }
   }
}
