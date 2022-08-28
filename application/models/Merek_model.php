<?php
class Merek_model extends CI_Model
{

  function get_merek()
  {
    $result = $this->db->get('merek');
    return $result;
  }
  function add_data($namaMerek)
  {
    $data = array(
      'namaMerek' => $namaMerek
    );
    $this->db->insert('merek', $data);
  }
  function delete($idMerek)
  {
    $this->db->where('idMerek', $idMerek);
    $this->db->delete('merek');
  }
  public function edit_merek($idMerek)
  {
    $query = $this->db->where("idMerek", $idMerek)->get("merek");
    return $query->row();
  }
  public function update_merek($data, $idMerek)
  {
    return $this->db->update("merek", $data, $idMerek);
  }
}
