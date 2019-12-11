<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Products_model extends CI_Model
{
	public function getEarphones()
	{
		$query = "SELECT * FROM headset
					WHERE tipe_produk = 'Earphone'";

		return $this->db->query($query)->result_array();
	}
}