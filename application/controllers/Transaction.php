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
    	
        $this->load->view('templates/header_content', $data);
        $this->load->view('templates/navbar_content', $data);
        $this->load->view('transactions/buy');
        $this->load->view('templates/footer_content');     
    }

    public function konfirmasiPesanan()
    {
    	
    }
}