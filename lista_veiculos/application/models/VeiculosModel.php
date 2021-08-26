<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VeiculosModel extends CI_Model {
	public function listar_todos()
	{
        $this->db->select("placa, cor, modelo, ano, chassi");

        $resultado = $this->db->get("veiculos")->result();

        return $resultado;
	}
}
