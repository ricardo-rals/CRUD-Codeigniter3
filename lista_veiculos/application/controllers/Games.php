<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Games extends CI_Controller
{
// COM ESSE CONSTRUCT NÃO PRECISO FICAR CHAMANDO $this->load->model("GamesModel"); EM TODAS AS FUNÇÕES
  public function __construct()
  {
    parent::__construct();
    $this->load->model("GamesModel");
  }

  public function index()
  {
    $data['games'] = $this->GamesModel->index();
    $data['title'] = "Games - Codeigniter";

    $this->load->view('templates/header', $data);
    $this->load->view('templates/nav-top', $data);
    $this->load->view('pages/games', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('templates/js', $data);
  }

  public function new()
  {
    $data['title'] = "Games - Codeigniter";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/nav-top', $data);
    $this->load->view('pages/form-games', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('templates/js', $data);
  }

  public function store()
  {
    $game = $_POST;
    $game["user_id"] = '1';
    $this->GamesModel->store($game);
    redirect("dashboard");
  }

  public function edit($id)
  { 
    $data['game'] = $this->GamesModel->show($id);
    $data['title'] = "Editar Game - Codeigniter";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/nav-top', $data);
    $this->load->view('pages/form-games', $data);
    $this->load->view('templates/footer', $data);
    $this->load->view('templates/js', $data);
  }

  public function update($id)
  {
    $game = $_POST;
    $this->GamesModel->update($id, $game);
    redirect("games");
  }

  public function delete($id)
  {
    $this->GamesModel->destroy($id);
    redirect("games");
  }
}
