<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mentor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Beranda Mentor | Hex.Inc';
        $this->load->view('client/mentor/navmentor', $data);
        $this->load->view('client/mentor/index', $data);
        $this->load->view('template/footer');
    }

    public function position()
    {
        $data['title'] = 'Position | Hex.Inc';
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('client/mentor/navmentor', $data);
        //$this->load->view('awal/regis', $data);
        //$this->load->view('awal/login', $data);
        $this->load->view('template/position');
        $this->load->view('template/footer');
    }

    public function dataakun()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Account Mentor | Hex.Inc';
        $this->load->view('client/mentor/navmentor', $data);
        $this->load->view('client/mentor/akun');
        $this->load->view('template/footer');
    }
    public function dataakunprofile()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Profile Mentor | Hex.Inc';
        $this->load->view('client/mentor/navmentor', $data);
        $this->load->view('client/mentor/akunprofile');
        $this->load->view('template/footer');
    }
}
