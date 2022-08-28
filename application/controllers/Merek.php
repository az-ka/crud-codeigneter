<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Merek extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('nama') != "admin") {
      redirect(base_url("index.php/home"));
    }
    $this->load->model('merek_model');
  }
  public function index()
  {
    $data['merek'] = $this->merek_model->get_merek();
    $data['page']    = 'pages/merek/index';
    $this->load->view('layouts/app', $data);
  }
  function add_data()
  {
    $data['page']    = 'pages/merek/index';
    $this->load->view('layouts/app', $data);
  }
  function save_data()
  {
    $namaMerek = $this->input->post('namaMerek');
    $this->merek_model->add_data($namaMerek);
    redirect('index.php/merek');
  }
  function delete()
  {
    $idMerek = $this->uri->segment(3);
    $this->merek_model->delete($idMerek);
    redirect('index.php/merek');
  }
  public function edit($idMerek)
  {
    $this->load->model('merek_model');

    $idMerek = $this->uri->segment(3);

    $data = array(
      'namaMerek' => $this->merek_model->edit_merek($idMerek)
    );
    $data['page']    = 'pages/merek/edit_merek';
    $this->load->view('layouts/app', $data);
  }
  public function update()
  {
    $this->load->model('merek_model');

    $idMerek['idMerek']   = $this->input->post("idMerek");
    $namaMerek            = $this->input->post('namaMerek');

    $data = array(
      'namaMerek'         => $namaMerek
    );

    $this->merek_model->update_merek($data, $idMerek);

    redirect('index.php/merek');
  }
}
