<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

	public function login()
	{
		$data['pageTitle'] = "Sistem Antrian RS - Login";
		$this->load->view('layouts/auth/header', $data);
		$this->load->view('pages/auth/login');
		$this->load->view('layouts/auth/footer');
	}

	public function register()
	{
		$data['pageTitle'] = "Sistem Antrian RS - Register";
		$this->load->view('layouts/auth/header', $data);
		$this->load->view('pages/auth/register');
		$this->load->view('layouts/auth/footer');
	}
}
