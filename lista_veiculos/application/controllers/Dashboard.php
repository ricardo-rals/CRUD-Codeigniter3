<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {	
	public function __construct()
	{
	  parent::__construct();
	  permission();
	  $this->load->model("VeiculosModel");
	}

	public function index()
	{
		
		$data['veiculos'] = $this->VeiculosModel->index();
		$data['title'] = "Dashboard - Codeigniter";

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
	}

	public function search()
	{
		$this->load->model("SearchModel");
		$data['title'] = "Resultado da pesquisa por *".$_POST['busca']."*";
		$data['result'] = $this->SearchModel->search($_POST);

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/result', $data);
		$this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
	}
}
