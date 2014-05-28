<?php

class Mvc_c extends CI_Controller {

	function index()
	{
		$this->load->model('mvc_m');
		$data=array(
			"title"  => "MVC",
			"action" => base_url('index.php/mvc_c/save'),
			"hasil"	 => $this->mvc_m->baca_data()
			);
		$this->load->view('welcome_mvc',$data);
	}

	function save()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('contact','contact','required');
		$this->form_validation->set_rules('address','address','required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}

		else 
		{
			$this->load->model('mvc_m');
			$this->mvc_m->simpan_user();
			redirect('mvc_c/index');
		}

	}

	function remove($id="")
	{
		$this->load->model('mvc_m');
		$this->mvc_m->hapus_data(array("id"=>$id));
		redirect('mvc_c/index');

	}

	function edit($id="")
	{
		$this->load->model('mvc_m');
		$data=array(
			"title"		=> 'MVC edit',
			"action" 	=> base_url('index.php/mvc_c/update/'.$id),
			"hasil"		=> $this->db->get_where('usertbl', array('id' => $id))
			);
		$this->load->view('form_edit',$data);
	}

	function update($id="")
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('contact','contact','required');
		$this->form_validation->set_rules('address','address','required');

		if($this->form_validation->run()==FALSE)
		{
			redirect('mvc_c/edit/'.$id);
		}
		
		else
		{
			$this->load->model('mvc_m');
			$this->mvc_m->edit_data(array("id"=>$id));
			redirect('mvc_c/index');
		}

	}

}