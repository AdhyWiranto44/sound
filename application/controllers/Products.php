<?php 
    defined('BASEPATH') or exit('No direct script access allowed');

    class Products extends CI_Controller
    {
       public function showHeadphones(){
        $this->load->view('templates/header_content');
        $this->load->view('products/headphones');
        $this->load->view('templates/footer_content');
       }

       public function showEarphones(){
        $this->load->view('templates/header_content');
        $this->load->view('products/earphones');
        $this->load->view('templates/footer_content');
       }

       public function showBrands(){
        $this->load->view('templates/header_content');
        $this->load->view('products/brands');
        $this->load->view('templates/footer_content');
       }
    }

