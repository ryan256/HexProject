<?php
defined('BASEPATH') or exit('No direct script access allowed');

class awal extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Beranda ---';

		$this->load->view('template/navbar', $data);
		//$this->load->view('awal/regis', $data);
		//$this->load->view('awal/login', $data);
		$this->load->view('awal/index');
		$this->load->view('template/footer');
	}
}
