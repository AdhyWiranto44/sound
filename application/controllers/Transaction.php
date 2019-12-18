<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaction_model', 'transaction');
        $this->load->library('cart');
    }

    public function pesanan()
    {
        $data['title'] = 'Buy';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kurir'] = $this->db->get('kurir')->result_array();
        $data['list_order'] = $this->transaction->showAllCartItemByUser();
        $data["count"] = $this->transaction->getCartTotalUser();
        $data['item'] = $this->transaction->showAllCartItemByUser();
        $data['total'] = $this->transaction->getTotal();

        $query = $this->db->get_where('cart', ['email_user' => $this->session->userdata('email')]);

        if ($query->num_rows() < 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">There is no item in your cart!<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="font-family: arial;">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('home');
        } else {
            $this->load->view('templates/header_content', $data);
            $this->load->view('templates/navbar_content', $data);
            $this->load->view('transactions/buy', $data);
            $this->load->view('templates/footer_content');
        }
    }

    public function konfirmasipesanan()
    {
        $this->db->delete('cart', ['email_user' => $this->session->userdata('email')]);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Transaction Success!<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="font-family: arial;">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('home');
    }

    public function buy($id)
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Login dahulu sebelum membeli. :)</div>');
            redirect('auth');
        } else {
            $query = $this->db->get_where('cart', ['id_headset' => $id]);

            if ($query->num_rows() < 1) {
                $this->transaction->addToCart($id);
            } else {
                $this->transaction->changeCartQuantity($id);
            }

            redirect('transaction/pesanan');
        }
    }

    // public function Cart()
    // {
    //     $data['title'] = 'Shopping Cart';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $query = $this->db->get_where('cart', ['email_user' => $this->session->userdata('email')]);
    //     $data['item'] = $this->transaction->showAllCartItemByUser();
    // }

    public function addToCart($id)
    {
        // $data = [
        //     'id_cart' => '',
        //     'email_user' => $this->session->userdata('email'),
        //     'id_headset' => $id,
        //     'quantity' => 1
        // ];

        // $this->db->insert('cart', $data);

        $query = $this->db->get_where('cart', ['id_headset' => $id]);

        if ($query->num_rows() < 1) {
            $this->transaction->addToCart($id);
        } else {
            $this->transaction->changeCartQuantity($id);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Produk berhasil ditambahkan di cart!<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="font-family: arial;">
            <span aria-hidden="true">&times;</span>
            </button></div>');

        redirect('home');
    }

   
}
