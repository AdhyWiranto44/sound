<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{
    public function Pesanan()
    {
        $this->load->view('templates/header_content');
        $this->load->view('transactions/buy');
        $this->load->view('templates/footer_content');     
    }

    public function konfirmasiPesanan()
    {
    	
    }
}