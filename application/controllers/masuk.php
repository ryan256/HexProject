<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class masuk extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function berandamasuk()
	{
		$this->load->view('beranda/navberanda');
		$this->load->view('beranda/menutengah');
		$this->load->view('beranda/fotbar');
	}
	
	public function event()
	{
		$this->load->view('beranda/navberanda');
		$this->load->view('beranda/event');
		$this->load->view('beranda/fotbar');
	}
	
	public function event1()
	{
		$this->load->view('beranda/navberanda');
		$this->load->view('beranda/listevent/event1');
		$this->load->view('beranda/fotbar');
	}
	
	public function event2()
	{
		$this->load->view('beranda/navberanda');
		$this->load->view('beranda/listevent/event2');
		$this->load->view('beranda/fotbar');
	}
	
	public function event3()
	{
		$this->load->view('beranda/navberanda');
		$this->load->view('beranda/listevent/event3');
		$this->load->view('beranda/fotbar');
	}
	
	public function event4()
	{
		$this->load->view('beranda/navberanda');
		$this->load->view('beranda/listevent/event4');
		$this->load->view('beranda/fotbar');
	}
	
	public function akun()
	{
		$this->load->view('beranda/navberanda');
		$this->load->view('beranda/akun');
		$this->load->view('beranda/fotbar');
	}
	
	public function dataakun()
	{
		$this->load->view('beranda/navberanda');
		$this->load->view('beranda//akun/dataakuntalent');
		$this->load->view('beranda/fotbar');
	}
	
}
