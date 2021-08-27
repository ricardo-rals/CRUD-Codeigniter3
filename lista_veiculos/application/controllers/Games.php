<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {	
	public function index()
	{
		$this->load->model("GamesModel");
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
        $this->load->model("GamesModel");
        $this->GamesModel->store($game);
        redirect("dashboard");
    }

    public function edit($id)
    {
        $this->load->model("GamesModel");
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
      $this->load->model("GamesModel");
      $game = $_POST;
      $this->GamesModel->update($id, $game);
      redirect("games");
    }
}
