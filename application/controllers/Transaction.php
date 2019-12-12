<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
	}

    public function Pesanan($id)
    {
    	$data['title'] = 'Buy';
    	$data['detail'] = $this->Products_model->getProductById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    	
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Login dahulu sebelum membeli. :)</div>');
          redirect('auth');
        } else {
            $this->load->view('templates/header_content', $data);
            $this->load->view('templates/navbar_content', $data);
            $this->load->view('transactions/buy');
            $this->load->view('templates/footer_content'); 
        }

             
    }

    public function konfirmasiPesanan()
    {
    	
    }
}