<?php

class SearchModel extends CI_Model
{
    public function search($busca)
    {
        if (empty($busca)) {
            return array();
        }

        $busca = $this->input->post("busca");
        $this->db->like("placa", $busca);

        return $this->db->get("tb_veiculos")->result_array();
    }
}
