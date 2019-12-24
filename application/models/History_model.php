<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class History_model extends CI_Model
{
  public function getHistory()
  {
    $email_user = $this->session->userdata('email');

    $query = "SELECT pesanan.*, headset.nama_produk, kurir.nama_kurir, user.name FROM pesanan
              JOIN kurir
              ON pesanan.id_kurir = kurir.id
              JOIN user
              ON pesanan.email_user = user.email
              JOIN headset
              ON pesanan.id_headset = headset.id_headset
              WHERE email_user = '$email_user'";

    $queryHistory = $this->db->query($query)->result_array();

    return $queryHistory;
  }
}
