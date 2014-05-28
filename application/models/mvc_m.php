<?php

class Mvc_m extends CI_Model {

	function simpan_user()
	{
		$data=array(
			"username"		=> $this->input->post('username'),
			"email"			=> $this->input->post('email'),
			"contact"		=> $this->input->post('contact'),
			"address"		=> $this->input->post('address')
			);
		$this->db->insert('usertbl',$data);
	}

	function baca_data()
	{	$sql="SELECT * FROM usertbl order by id asc";
		$query=$this->db->query($sql);
		return $query->result();
	}

	function hapus_data($id="")
	{
		$this->db->where($id);
		$this->db->delete('usertbl');

	}

	function edit_data($id="")
	{
		$data=array(
			"username"		=> $this->input->post('username'),
			"email"			=> $this->input->post('email'),
			"contact"		=> $this->input->post('contact'),
			"address"		=> $this->input->post('address')
			);
		$this->db->where($id);
		$this->db->update('usertbl',$data);
	}
}