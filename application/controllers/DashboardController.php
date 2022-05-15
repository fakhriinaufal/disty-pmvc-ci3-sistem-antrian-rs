<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

	public function home()
	{
		$data['pageTitle'] = "Home - Template App";
		$this->loadView('home', $data);
	}

	public function loadView($page, $data)
	{
		$this->load->view('layouts/dashboard/header', $data);
		$this->load->view('layouts/dashboard/sidebar', $data);
		$this->load->view('pages/dashboard/' . $page);
		$this->load->view('layouts/dashboard/footer');
	}
}
