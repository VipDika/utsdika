<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Cmhs extends CI_Controller
{
	
	public function index ()
	{
		$data['mahasiswa'] = $this->Mmhs->ambilmhs();
		$this->load->view('V_mhs',$data);
	}

	public function hasiledit ()
	{
		$data['mahasiswa'] = $this->Mmhs->ambiledit();
		$this->load->view('hasiledit',$data);
	}

	public function tambahmhs()
	{
		$this->load->view('tambah_mhs');

	}

	public function editmhs($id)
	{
		$data['mahasiswa'] = $this->Mmhs->editambilmhs($id);
		$this->load->view('edit_mhs',$data);	

	}
}
