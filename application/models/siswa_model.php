<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_model extends CI_Model {

	
	public function getSiswa()
	{
		//mengambil semua data dari tabel siswa
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('alamat', 'alamat.id = siswa.id_alamat');
		return $this->db->get()->result_array();
	}

	public function tambahsiswa()
	{
		$data = 
		[
			"nama" => $this->input->post('nama',true),
			"id_alamat" => $this->input->post('alamat',true),
			"no_tlp" => $this->input->post('no_tlp',true)
		];

		$this->db->insert('siswa',$data);
	}

	public function getsiswaByNis($nis)
	{
		return $this->db->get_where('siswa',['nis' => $nis])->row_array();
	}
	
}