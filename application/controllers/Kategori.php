<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('nama') != "admin") {
			redirect(base_url("index.php/home"));
		}
		$this->load->model('kategori_model');
	}
	public function index()
	{
		$data['kategori'] = $this->kategori_model->get_kategori();
		$data['page']		= 'pages/kategori/index';
		$this->load->view('layouts/app', $data);
	}
	function add_data()
	{
		$data['page']		= 'pages/kategori/index';
		$this->load->view('layouts/app', $data);
	}
	function save_data()
	{
		$namaKategori = $this->input->post('namaKategori');
		$this->kategori_model->add_data($namaKategori);
		redirect('index.php/kategori');
	}
	function delete()
	{
		$idKategori = $this->uri->segment(3);
		$this->kategori_model->delete($idKategori);
		redirect('index.php/kategori');
	}
	public function edit($idKategori)
	{
		$this->load->model('kategori_model');

		$idKategori = $this->uri->segment(3);

		$data = array(
			'namaKategori' => $this->kategori_model->edit_kategori($idKategori)
		);
		$data['page']		= 'pages/kategori/edit_kategori';
		$this->load->view('layouts/app', $data);
	}
	public function update()
	{
		$this->load->model('kategori_model');

		$idKategori['idKategori'] = $this->input->post("idKategori");
		$namaKategori             = $this->input->post('namaKategori');

		$data = array(
			'namaKategori'         => $namaKategori
		);

		$this->kategori_model->update_kategori($data, $idKategori);

		redirect('index.php/kategori');
	}
}
