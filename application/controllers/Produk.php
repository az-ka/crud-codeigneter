<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('status') != "login") {
      redirect(base_url("index.php/login"));
    }
    $this->load->model('produk_model');
    $this->load->helper(array('form', 'url'));
  }
  public function index()
  {
    $data['join'] = $this->produk_model->join3table();
    $data['kategori'] = $this->produk_model->get_kategori();
    $data['merek'] = $this->produk_model->get_merek();
    $data['page']    = 'pages/produk/index';
    $this->load->view('layouts/app', $data);
  }

  public function input()
  {
    $data['page']    = 'pages/produk/index';
    $this->load->view('layouts/app', $data);
  }
  function add_data()
  {
    $data['page']    = 'pages/produk/index';
    $this->load->view('layouts/app', $data);
  }
  function save_data()
  {
    $namaProduk = $this->input->post('namaProduk');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');
    $deskripsi = $this->input->post('deskripsi');
    $status = $this->input->post('status');
    $idKategori = $this->input->post('idKategori');
    $idMerek = $this->input->post('idMerek');
    $foto = $_FILES['foto'];
    if ($foto = '') {
    } else {
      $config['upload_path']          = './assets/images';
      $config['allowed_types']        = 'gif|jpg|png';

      $this->load->library('upload', $config);
      $this->upload->do_upload('foto');
      $foto = $this->upload->data('file_name');
    }


    $this->produk_model->add_data($namaProduk, $harga, $stok, $deskripsi, $status, $idKategori, $idMerek, $foto);
    redirect('index.php/produk');
  }
  function delete()
  {
    $idProduk = $this->uri->segment(3);
    $this->produk_model->delete($idProduk);
    redirect('index.php/produk');
  }
  public function edit($idProduk)
  {
    $this->load->model('produk_model');

    $idProduk = $this->uri->segment(3);

    $data = array(
      'namaProduk' => $this->produk_model->edit_data($idProduk)
    );
    $data['kategori'] = $this->produk_model->get_kategori();
    $data['merek'] = $this->produk_model->get_merek();
    $data['produk'] = $this->produk_model->get_produk($idProduk);
    $data['page']    = 'pages/produk/edit_produk';
    $this->load->view('layouts/app', $data);
  }
  public function update()
  {
    $this->load->model('produk_model');
    $idProduk['idProduk'] = $this->input->post('idProduk');
    $namaProduk = $this->input->post('namaProduk');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');
    $deskripsi = $this->input->post('deskripsi');
    $status = $this->input->post('status');
    $idKategori = $this->input->post('idKategori');
    $idMerek = $this->input->post('idMerek');
    $foto = $_FILES['foto'];
    if ($foto = '') {
    } else {
      $config['upload_path']          = './assets/images';
      $config['allowed_types']        = 'gif|jpg|png';

      $this->load->library('upload', $config);
      $this->upload->do_upload('foto');
      $foto = $this->upload->data('file_name');
    }

    $data = array(
      'namaProduk' => $namaProduk,
      'harga' => $harga,
      'stok' => $stok,
      'deskripsi' => $deskripsi,
      'status' => $status,
      'idKategori' => $idKategori,
      'idMerek' => $idMerek,
      'foto' => $foto,
    );

    $this->produk_model->update_data($data, $idProduk);

    redirect('index.php/produk');
  }
}
