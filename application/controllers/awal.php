<?php
defined('BASEPATH') or exit('No direct script access allowed');

class awal extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Beranda | Hex.Inc';

		$this->load->view('template/navbar', $data);
		$this->load->view('awal/index');
		$this->load->view('template/footer');
	}

	public function training1()
	{
		$data['title'] = 'Langkah-Langkah training| Hex.Inc';
		$this->load->view('template/navbar', $data);
		$this->load->view('template/training1');
		$this->load->view('template/footer');
	}

	public function position()
	{
		$data['title'] = 'Position | Hex.Inc';

		$this->load->view('template/navbar', $data);
		$this->load->view('template/position');
		$this->load->view('template/footer');
	}
	public function comunity()
	{
		$data['title'] = 'Comunity | Hex.Inc';

		$this->load->view('template/navbar', $data);
		$this->load->view('template/comunity');
		$this->load->view('template/footer');
	}
}
