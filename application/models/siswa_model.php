<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_model extends CI_Model {

	
	public function getSiswa()
	{
    //mengambil semua data dari tabel siswa         
		return $this->db->get('siswa')->result_array();
	}

	public function tambahsiswa()
	{
		$data = 
		[
			"nama" => $this->input->post('nama',true),
			"alamat" => $this->input->post('alamat',true),
			"no_tlp" => $this->input->post('no_tlp',true)
		];

		$this->db->insert('siswa',$data);
	}

	public function getsiswaByNis($nis)
	{
		return $this->db->get_where('siswa',['nis' => $nis])->row_array();
	}
	
}