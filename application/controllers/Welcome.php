<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Dataguru');
	}
	public function index()
	{
		$recordMhs = $this->M_Dataguru->getDataGuru();
		$DATA = array('data_mhs' => $recordMhs);
		$this->load->view('home', $DATA);
	}

	public function formInput(){
		$this->load->view('form-input');
	}

	public function formEdit($id) {
		$recordMhs = $this->M_Dataguru->getDataGuruDetail($id);
		
		$DATA = array('data_mhs' =>$recordMhs);
		$this->load->view('form-edit', $DATA);
	}

	public function AksiInsert(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$notelpone = $this->input->post('notelpone');

		$DataInsert = array (
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'notelpone' => $notelpone,
			);

			$this->M_Dataguru->InsertDataMhs($DataInsert);
			redirect (base_url('welcome'));
	}

	public function AksiEdit(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$notelpone = $this->input->post('notelpone');

		$DataUpdate = array (
			'nama' => $nama,
			'alamat' => $alamat,
			'notelpone' => $notelpone
		);

		$this->M_Dataguru->EditDataMhs($DataUpdate, $nik);
		redirect (base_url());
	}

	public function AksiDeleteData($nik){
		$this->M_Dataguru->DeleteDataguru($nik);
		redirect(base_url());
	}
}
