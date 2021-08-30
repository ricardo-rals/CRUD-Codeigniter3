<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Veiculos extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    permission();
    $this->load->model("VeiculosModel");
  }

  public function index()
  {
    $data['veiculos'] = $this->VeiculosModel->index();
    $data['title'] = "Veiculos - Codeigniter";

    $this->load->view('templates/header', $data);
    $this->load->view('templates/nav-top', $data);
    $this->load->view('pages/veiculos', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('templates/js', $data);
  }

  public function new()
  {
    $data['title'] = "Veiculos - Codeigniter";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/nav-top', $data);
    $this->load->view('pages/form-veiculos', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('templates/js', $data);
  }

  public function store()
  {
    $veiculo = $_POST;
    $this->VeiculosModel->store($veiculo);
    redirect("dashboard");
  }

  public function edit($id)
  {
    $data['veiculo'] = $this->VeiculosModel->show($id);
    $data['title'] = "Editar Veiculo - Codeigniter";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/nav-top', $data);
    $this->load->view('pages/form-veiculos', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('templates/js', $data);
  }

  public function update($id)
  {
    $veiculo = $_POST;
    $this->VeiculosModel->update($id, $veiculo);
    redirect("veiculos");
  }

  public function delete($id)
  {
    $this->VeiculosModel->destroy($id);
    redirect("dashboard");
  }
}
