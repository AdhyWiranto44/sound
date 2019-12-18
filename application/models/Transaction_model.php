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

  public function getCartTotalUser() {

    $user = $this->session->userdata('email');

    $queryItem = "SELECT COUNT(email_user) as 'jumlah'
    FROM cart
    WHERE email_user = '$user'";

    $result = $this->db->query($queryItem)->result_array()[0]['jumlah'];

    return $result;
  }

  // public function getAllById($id)
  // {
  //   $result = $this->db->where('id_headset', $id)
  //                     ->limit(1)
  //                     ->get('cart');
    
  //   if($result->num_rows() > 0){
  //     return $result->row();
  //   } else {
  //     return array();
  //   }
  // }
}
