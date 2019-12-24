<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Products_model extends CI_Model
{
	public function getHeadphones()
	{
		$query = "SELECT * FROM headset
					WHERE tipe_produk = 'Headphone'";

		return $this->db->query($query)->result_array();
	}

	// pagination
	public function getAllHeadphones($limit, $start)
	{
		$query = "SELECT * FROM headset
					WHERE tipe_produk = 'Headphone'";

		// return $this->db->query($query, $limit, $start)->result_array();
		return $this->db->get('headset', $limit, $start)->result_array();
	}

	public function countAllHeadphones()
	{
		$query = "SELECT * FROM headset
					WHERE tipe_produk = 'Headphone'";

		return $this->db->query($query)->num_rows();
	}

	// end pagination

	public function getEarphones()
	{
		$query = "SELECT * FROM headset
					WHERE tipe_produk = 'Earphone'";

		return $this->db->query($query)->result_array();
	}

	// pagination
	public function getAllEarphones($limit, $start)
	{
		$query = "SELECT * FROM headset
					WHERE tipe_produk = 'Earphone'";

		// return $this->db->query($query, $limit, $start)->result_array();
		return $this->db->get('headset', $limit, $start)->result_array();
	}

	public function countAllEarphones()
	{
		$query = "SELECT * FROM headset
		WHERE tipe_produk = 'Earphone'";

		return $this->db->query($query)->num_rows();
	}

	// end pagination

	public function getProductById($id)
	{
		return $this->db->get_where('headset', ['id_headset' => $id])->row_array();
	}

	public function tambahProduk($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function hapusHeadphone($id)
	{
		$img_name = $this->db->get_where('headset', ['id_headset' => $id])->row_array();

		unlink(FCPATH . 'assets/products/headphone/' . $img_name['gambar_produk']);
		$this->db->delete('headset', ['id_headset' => $id]);
	}

	public function hapusEarphone($id)
	{
		$img_name = $this->db->get_where('headset', ['id_headset' => $id])->row_array();

		unlink(FCPATH . 'assets/products/earphone/' . $img_name['gambar_produk']);
		$this->db->delete('headset', ['id_headset' => $id]);
	}

	public function editProduk($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function ubahProduk($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
