<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

	public function login()
	{
		$data['pageTitle'] = "Login";
		$this->load->view('layouts/auth/header', $data);
		$this->load->view('pages/auth/login');
		$this->load->view('layouts/auth/footer');
	}
}
