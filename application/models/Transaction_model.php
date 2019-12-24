<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Transaction_model extends CI_Model
{
  public function showAllCartItemByUser()
  {
    $user = $this->session->userdata('email');

    $queryItem = "SELECT `cart`.*, `headset`.*
                  FROM `cart` JOIN `headset`
                    ON `cart`.`id_headset` = `headset`.`id_headset`
                 WHERE `cart`.`email_user` = '$user'
                ";

    $item = $this->db->query($queryItem)->result_array();
    return $item;
  }

  public function getCartTotalUser()
  {

    $user = $this->session->userdata('email');

    $queryItem = "SELECT COUNT(email_user) as 'jumlah'
    FROM cart
    WHERE email_user = '$user'";

    $result = $this->db->query($queryItem)->result_array()[0]['jumlah'];

    return $result;
  }

  public function getTotal()
  {
    $allCart = $this->showAllCartItemByUser();
    // $kurir = $this->db->get('kurir')->result_array();
    $total = 0;

    foreach ($allCart as $i) {
      $total += $i['quantity'] * $i['harga_produk'];
    }

    return $total;
  }

  public function getAllKurir()
  {
    $kurir = $this->db->get('kurir')->result_array();
    return $kurir;
  }

  public function addToCart($id)
  {
    $data = [
      'id_cart' => '',
      'email_user' => $this->session->userdata('email'),
      'id_headset' => $id,
      'quantity' => 1
    ];
    $this->db->insert('cart', $data);
  }

  public function changeCartQuantity($id)
  {
    $queryQuantity = "SELECT quantity FROM cart WHERE id_headset = $id";
    $quantity = $this->db->query($queryQuantity)->row_array();

    $i = (int) $quantity['quantity'];

    $this->db->set('quantity', $i += 1);
    $this->db->where('id_headset', $id);
    $this->db->update('cart');
  }

  public function deleteOneCartProduct($id)
  {
    $this->db->delete('cart', ['id_headset' => $id]);
  }

  public function deleteAllCartProduct()
  {
    $user = $this->session->userdata('email');

    $this->db->delete('cart', ['email_user' => $user]);
  }

  public function checkout()
  {
    $allCart = $this->showAllCartItemByUser();
    $total = $this->getTotal();
    $selectedKurirId = $this->input->post('kurir');

    $query = "SELECT * FROM kurir WHERE id = '$selectedKurirId'";
    $queryBiaya = $this->db->query($query)->row_array();
    $biaya = (int) $queryBiaya['biaya'];

    $grandTotal =  $total + $biaya;

    foreach ($allCart as $item) {
      $data = [
        'id_pesanan' => '',
        'email_user' => $this->session->userdata('email'),
        'id_headset' => $item['id_headset'],
        'quantity' => $item['quantity'],
        'alamat' => htmlspecialchars($this->input->post('alamat')),
        'no_telp' => htmlspecialchars($this->input->post('telp')),
        'id_kurir' => $selectedKurirId,
        'metode_pembayaran' => $this->input->post('metode'),
        'total_pesanan' => $grandTotal
      ];

      $this->db->insert('pesanan', $data);
    }

    $this->db->delete('cart', ['email_user' => $this->session->userdata('email')]);
  }
}
