<?php
defined('BASEPATH') or exit('No direct script access allowed');

class company extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('awal/index', $data);
        $this->load->view('template/footer');
    }



    public function dataakun()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/company/akun');
        $this->load->view('template/footer');
    }
    public function dataakunprofile()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/company/akunprofile');
        $this->load->view('template/footer');
    }
}
