<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Sign-up - Codeigniter";

		$this->load->view('pages/signup', $data);
	}

	public function store()
	{
		$this->load->model("UsersModel");
		$user = array(
			"name" => $_POST["name"],
			"email" => $_POST["email"],
			"password" => md5($_POST["password"])
		);

		$this->UsersModel->store($user);
		redirect("login");
	}
}
