<?php

class Helm_model extends CI_model
{
	// public function getAllProduk($id)
	// {
	// 	$this->db->get_where('helm_jadi', ;
	// }

	public function getProdukById($id)
	{
		return $this->db->get_where('helm_jadi', ['id' => $id])->row_array();
	}

	public function hapusDataProduk($id)
	{
		$this->db->delete('helm_jadi', ['id' => $id]);
	}

	public function ubahDataProduk()
	{
		$data = [
			"merek" => $this->input->post('merek', true),
			"tipe" => $this->input->post('tipe', true),
			"ukuran" => $this->input->post('ukuran', true),
			"jenis" => $this->input->post('jenis', true),
			"harga" => $this->input->post('harga', true),
			"warna" => $this->input->post('warna', true)

		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('helm_jadi', $data);
	}
}
