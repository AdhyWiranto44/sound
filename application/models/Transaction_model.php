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
}
