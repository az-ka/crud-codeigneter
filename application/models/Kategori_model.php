<?php
class Kategori_model extends CI_Model
{

  function get_kategori()
  {
    $result = $this->db->get('kategori');
    return $result;
  }

  function add_data($namaKategori)
  {
    $data = array(
      'namaKategori' => $namaKategori
    );
    $this->db->insert('kategori', $data);
  }
  function delete($idKategori)
  {
    $this->db->where('idKategori', $idKategori);
    $this->db->delete('kategori');
  }
  public function edit_kategori($idKategori)
  {
    $query = $this->db->where("idKategori", $idKategori)->get("kategori");
    return $query->row();
  }
  public function update_kategori($data, $idKategori)
  {
    return $this->db->update("kategori", $data, $idKategori);
  }
}
