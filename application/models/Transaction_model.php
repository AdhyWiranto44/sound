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
    $data['kurir'] = $this->db->get('kurir')->result_array();
    $total = 0;

    foreach ($allCart as $i) {
      $total += $i['quantity'] * $i['harga_produk'];
    }

    return $total;
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
}
