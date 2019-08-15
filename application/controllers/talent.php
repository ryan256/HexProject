<?php
defined('BASEPATH') or exit('No direct script access allowed');

class talent extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Beranda Talent | Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/talent/index', $data);
        $this->load->view('template/footer');
    }

    public function position()
    {
        $data['title'] = 'Position | Hex.Inc';
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('client/talent/navtalent', $data);
        //$this->load->view('awal/regis', $data);
        //$this->load->view('awal/login', $data);
        $this->load->view('template/position');
        $this->load->view('template/footer');
    }

    public function dataakun()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Account Talent | Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/talent/akun');
        $this->load->view('template/footer');
    }
    public function dataakunprofile()
    {
        $this->form_validation->set_rules('nik', 'NIk', 'required|trim|numeric|min_length[35000000000000]');
        $this->form_validation->set_rules('tempatlahir', 'NIk', 'required|trim');
        $this->form_validation->set_rules('tanggallahir', 'NIk', 'required|trim');
        $this->form_validation->set_rules('pendidikanterakhir', 'NIk', 'required|trim');
        $this->form_validation->set_rules('alamat', 'NIk', 'required|trim');
        $this->form_validation->set_rules('kota', 'NIk', 'required|trim');
        $this->form_validation->set_rules('provinsi', 'NIk', 'required|trim');
        $this->form_validation->set_rules('kodepos', 'NIk', 'required|trim|numeric');
        $this->form_validation->set_rules('pekerjaan', 'NIk', 'required|trim');
        $this->form_validation->set_rules('nohp', 'NIk', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {
            $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();

            $data['title'] = 'Edit Profile Talent | Hex.Inc';
            $this->load->view('client/talent/navtalent', $data);
            $this->load->view('client/talent/akunprofile', $data);
            $this->load->view('template/footer');
        } else { }
    }
}
