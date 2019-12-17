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

	public function getHeadphones()
	{
		$query = "SELECT * FROM headset
					WHERE tipe_produk = 'Headphone'";

		return $this->db->query($query)->result_array();
	}

	public function getProductById($id)
	{
		return $this->db->get_where('headset', ['id_headset' => $id])->row_array();
	}

	public function tambahProduk($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function deleteproduct($id)
	{
		$this->db->delete('headset', ['id' => $id]);
	}
}
