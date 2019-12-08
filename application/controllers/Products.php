<?php 
    defined('BASEPATH') or exit('No direct script access allowed');

    class Products extends CI_Controller
    {
       public function showHeadphones(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_content');
        $this->load->view('templates/navbar_content', $data);
        $this->load->view('products/headphones');
        $this->load->view('templates/footer_content');
       }

       public function showEarphones(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_content');
        $this->load->view('templates/navbar_content', $data);
        $this->load->view('products/earphones');
        $this->load->view('templates/footer_content');
       }

       public function showBrands(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_content');
        $this->load->view('templates/navbar_content', $data);
        $this->load->view('products/brands');
        $this->load->view('templates/footer_content');
       }
    }

