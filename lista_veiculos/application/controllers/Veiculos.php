<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veiculos extends CI_Controller {
	public function index()
	{
        $texto = "Você está usando o controller Veiculos";
        $dados = array("mensagem" => $texto);
		$this->load->view("veiculos/lista", $dados);
	}

    public function listar_array()
    {
        $this->load->model("VeiculosModel","veiculos");

        $resultado = $this->veiculos->listar_todos();

        echo '<pre>';

        var_dump($resultado);
    }

    public function listar_tabela()
    {
        $this->load->model("VeiculosModel","veiculos");

        $resultado = $this->veiculos->listar_todos();

        $dados = array("veiculos" => $resultado);

        $this->load->view("veiculos/lista_tabela", $dados);
    }
}
