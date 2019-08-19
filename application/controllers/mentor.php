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

    public function profil()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Profile Mentor | Hex.Inc';
        $this->load->view('client/mentor/navmentor', $data);
        $this->load->view('client/mentor/profil');
        $this->load->view('template/footer');
    }

    public function dataakunprofile()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|numeric|min_length[35000000000000]');
        $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggallahir', 'Tnggal Lahir', 'required|trim');
        $this->form_validation->set_rules('pendidikanterakhir', 'Pendidkan Terakhir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required|trim');
        $this->form_validation->set_rules('kodepos', 'Kode Pos', 'required|trim|numeric');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('nohp', 'No Hp', 'required|trim|numeric');
        $this->form_validation->set_rules('materi', 'Materi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = 'Edit Profile Mentor | Hex.Inc';
            $this->load->view('client/mentor/navmentor', $data);
            $this->load->view('client/mentor/akunprofile');
            $this->load->view('template/footer');
        } else { }
    }
}
