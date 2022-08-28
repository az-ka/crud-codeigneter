<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("index.php/login"));
		}
	}

	public function index()
	{
		$data['page']		= 'pages/home/index';
		$this->load->view('layouts/app', $data);
	}
}
