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
        $data['title'] = 'Beranda Company | Hex.Inc';
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/company/index', $data);
        $this->load->view('template/footer');
    }

    public function position()
    {
        $data['title'] = 'Position | Hex.Inc';
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('client/company/navcompany', $data);
        //$this->load->view('awal/regis', $data);
        //$this->load->view('awal/login', $data);
        $this->load->view('template/position');
        $this->load->view('template/footer');
    }



    public function dataakun()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Account Company | Hex.Inc';
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/company/akun');
        $this->load->view('template/footer');
    }

    public function profil($id)
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();

        $data['profilcompany'] = $this->db->get_where('profilcompany', ['company_id' => $id])->row_array();
        //$data['profilcompany'] = $this->db->get_where('profiltalent', ['talent_id' => $id])->row_array();

        $data['title'] = 'Profile company | Hex.Inc';
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/company/profil');
        $this->load->view('template/footer');
    }

    public function dataakunprofile()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|numeric|min_length[16]');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tnggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required|trim');
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required|trim|numeric');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim|numeric');


        if ($this->form_validation->run() == false) {
            $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();

            $data['title'] = 'Edit Profile Company | Hex.Inc';
            $this->load->view('client/company/navcompany', $data);
            $this->load->view('client/company/akunprofile');
            $this->load->view('template/footer');
        } else {
            $data = [
                'company_id'          => htmlspecialchars($this->input->post('company_id')),
                'nik'                 => htmlspecialchars($this->input->post('nik')),
                'name'                => htmlspecialchars($this->input->post('name')),
                'tempat_lahir'        => htmlspecialchars($this->input->post('tempat_lahir')),
                'tanggal_lahir'                   => date($this->input->post('tanggal_lahir')),
                'jenis_kelamin'       => htmlspecialchars($this->input->post('jenis_kelamin')),
                'alamat'              => htmlspecialchars($this->input->post('alamat')),
                'kota'                => htmlspecialchars($this->input->post('kota')),
                'provinsi'            => htmlspecialchars($this->input->post('provinsi')),
                'kode_pos'            => htmlspecialchars($this->input->post('kode_pos')),
                'jabatan'             => htmlspecialchars($this->input->post('jabatan')),
                'no_hp'               => htmlspecialchars($this->input->post('no_hp'))
            ];
            $this->db->insert('profilcompany', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
       Congratulation!
      </div>');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Profile Berhasil Diisi dan <strong>Kembali ke Profile</strong>
      </div>');

            redirect('company/dataakun');
        }
    }

    public function dataakunprofile2()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|numeric|min_length[16]');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tnggal Lahir', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidkan Terakhir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required|trim');
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required|trim|numeric');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim|numeric');

        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Profile Company | Hex.Inc';
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/company/akunprofile2');
        $this->load->view('template/footer');
    }
}
