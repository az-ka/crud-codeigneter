<?php
class Produk_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function input($data)
  {
    try {
      $this->db->insert('produk', $data);
      return true;
    } catch (Exception $e) {
    }
  }
  public function join3table()
  {
    $this->db->select('produk.*, kategori.namaKategori, merek.namaMerek');
    $this->db->from('produk');
    $this->db->join('kategori', 'produk.idKategori = kategori.idKategori');
    $this->db->join('merek', 'produk.idMerek = merek.idMerek');
    $query = $this->db->get();
    return $query->result_array();
  }
  public function get_kategori()
  {
    $quary = $this->db->query("SELECT * FROM kategori");
    return $quary->result();
  }
  public function get_merek()
  {
    $quary = $this->db->query("SELECT * FROM merek");
    return $quary->result();
  }
  public function get_produk($idProduk)
  {
    $quary = $this->db->query("SELECT * FROM produk where idProduk = " . $idProduk);
    return $quary->result();
  }
  function add_data($namaProduk, $harga, $stok, $deskripsi, $status, $idKategori, $idMerek, $foto)
  {
    $data = array(
      'namaProduk' => $namaProduk,
      'harga' => $harga,
      'stok' => $stok,
      'deskripsi' => $deskripsi,
      'status' => $status,
      'idKategori' => $idKategori,
      'idMerek' => $idMerek,
      'foto' => $foto
    );
    $this->db->insert('produk', $data);
  }
  function delete($idProduk)
  {
    $this->db->where('idProduk', $idProduk);
    $this->db->delete('produk');
  }
  public function edit_data($idProduk)
  {
    $query = $this->db->where("idProduk", $idProduk)->get("produk");
    return $query->row();
  }
  public function update_data($data, $idProduk)
  {
    return $this->db->update("produk", $data, $idProduk);
  }
}
