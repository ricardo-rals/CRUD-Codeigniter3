<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VeiculosModel extends CI_Model
{

  public function index()
  {
    return $this->db->get('tb_veiculos')->result_array();
  }

  public function store($veiculo)
  {
    $this->db->insert('tb_veiculos', $veiculo);
  }

  public function show($id)
  {
    return $this->db->get_where('tb_veiculos', array(
      'id' => $id
    ))->row_array();
  }

  public function update($id, $veiculo)
  {
    $this->db->where("id",$id);

    return $this->db->update("tb_veiculos", $veiculo);
  }

  public function destroy($id)
  {
    $this->db->where("id",$id);

    return $this->db->delete("tb_veiculos");
  }
}
