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
	 
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('username_model');
	}
	 
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
		
		$data['reg'] = $this->username_model->getAllreg();
		if($this->input->post('keyword')){

			$data['reg'] = $this->username_model->cariData();
		}

		$this->load->view('beranda/navberanda');
		$this->load->view('beranda/akun',$data);
		$this->load->view('beranda/fotbar');
	}
	
	public function tambah()
	{
		//$this->load->model('username_model');
		
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('notelp','No.Telp','required|numeric');
		
		if ($this->form_validation->run() == FALSE)
        {
        $this->load->view('beranda/navberanda');
		$this->load->view('beranda/akun/tambah');
		$this->load->view('beranda/fotbar');
        }
				
        else{
			
        $this->username_model->tambahData();
		$this->session->set_flashdata('flash','Ditambahkan');
		redirect('masuk/akun');
        }
					
	}
	
	public function hapus($username)
	{
		$this->username_model->hapusData($username);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('masuk/akun');
	}

	public function detail($username)
	{
		$data['reg'] = $this->username_model->getDetail($username);

		$this->load->view('beranda/navberanda');
		$this->load->view('beranda/akun/detail', $data);
		$this->load->view('beranda/fotbar');
	}

	public function ubah($username)
	{

		$data['reg'] = $this->username_model->getDetail($username);

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('notelp','No.Telp','required|numeric');
		
		if ($this->form_validation->run() == FALSE)
        {
        $this->load->view('beranda/navberanda');
		$this->load->view('beranda/akun/ubah', $data);
		$this->load->view('beranda/fotbar');
        }
				
        else{
			
        $this->username_model->ubahData();
		$this->session->set_flashdata('flash','Diubah');
		redirect('masuk/akun');}
	}
	
	public function dataakun()
	{
		$this->load->view('beranda/navberanda');
		$this->load->view('beranda/akun/dataakuntalent');
		$this->load->view('beranda/fotbar');
	}
	
}
