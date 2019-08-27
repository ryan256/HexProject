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
        $this->load->view('client/index', $data);
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
        $data['profilcompany2'] = $this->db->get_where('profilcompany2', ['company2_id' => $id])->row_array();

        $data['title'] = 'Profile company | Hex.Inc';
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/company/profil');
        $this->load->view('template/footer');
    }

    public function editprofil($id)
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

        if ($this->form_validation->run() == FALSE) {
            $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();

            $data['profilcompany'] = $this->db->get_where('profilcompany', ['company_id' => $id])->row_array();

            $data['title'] = 'Profile company | Hex.Inc';
            $this->load->view('client/company/navcompany', $data);
            $this->load->view('client/company/editprofil');
            $this->load->view('template/footer');
        } else {
            $data = [
                'company_id'          => $this->input->post('company_id', true),
                'nik'                 => $this->input->post('nik', true),
                'name'                => $this->input->post('name', true),
                'tempat_lahir'        => $this->input->post('tempat_lahir', true),
                'tanggal_lahir'       => $this->input->post('tanggal_lahir', true),
                'jenis_kelamin'       => $this->input->post('jenis_kelamin', true),
                'alamat'              => $this->input->post('alamat', true),
                'kota'                => $this->input->post('kota', true),
                'provinsi'            => $this->input->post('provinsi', true),
                'kode_pos'            => $this->input->post('kode_pos', true),
                'jabatan'             => $this->input->post('jabatan', true),
                'no_hp'               => $this->input->post('no_hp', true)

            ];

            $this->db->where('company_id', $this->input->post('company_id'));
            $this->db->update('profilcompany', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Profile Berhasil Diedit dan <strong>Kembali ke Profile</strong>
        </div>');


            redirect('company/dataakun');
        }
    }

    public function editprofil2($id)
    {
        $this->form_validation->set_rules('npwp', 'Npwp', 'required|trim|numeric|min_length[20]');
        $this->form_validation->set_rules('name', 'Nama Perusahaan', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required|trim');
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required|trim|numeric');
        $this->form_validation->set_rules('jumlah_pendapatan', 'Jumlah Pendapatan', 'required|trim');
        $this->form_validation->set_rules('jumlah_tenaga', 'Jumlah Tenaga', 'required|trim');
        $this->form_validation->set_rules('jenis_usaha', 'Jenis Usaha', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'No Telphone', 'required|trim|numeric');
        $this->form_validation->set_rules('website', 'Website', 'required|trim');

        if ($this->form_validation->run() == FALSE) {

            $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();

            $data['profilcompany2'] = $this->db->get_where('profilcompany2', ['company2_id' => $id])->row_array();

            $data['title'] = 'Profile company | Hex.Inc';
            $this->load->view('client/company/navcompany', $data);
            $this->load->view('client/company/editprofil2');
            $this->load->view('template/footer');
        } else {
            $data = [
                'company2_id'         => $this->input->post('company2_id', true),
                'npwp'                => $this->input->post('npwp', true),
                'name'                => $this->input->post('name', true),
                'alamat'              => $this->input->post('alamat', true),
                'kota'                => $this->input->post('kota', true),
                'provinsi'            => $this->input->post('provinsi', true),
                'kode_pos'            => $this->input->post('kode_pos', true),
                'jumlah_pendapatan'   => $this->input->post('jumlah_pendapatan', true),
                'jumlah_tenaga'       => $this->input->post('jumlah_tenaga', true),
                'jenis_usaha'         => $this->input->post('jenis_usaha', true),
                'no_telp'             => $this->input->post('no_telp', true),
                'website'             => $this->input->post('website', true)
            ];

            $this->db->where('company2_id', $this->input->post('company2_id'));
            $this->db->update('profilcompany2', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Profile Berhasil Diedit dan <strong>Kembali ke Profile</strong>
        </div>');


            redirect('company/dataakun');
        }
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
        $this->form_validation->set_rules('npwp', 'Npwp', 'required|trim|numeric|min_length[20]');
        $this->form_validation->set_rules('name', 'Nama Perusahaan', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required|trim');
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required|trim|numeric');
        $this->form_validation->set_rules('jumlah_pendapatan', 'Jumlah Pendapatan', 'required|trim');
        $this->form_validation->set_rules('jumlah_tenaga', 'Jumlah Tenaga', 'required|trim');
        $this->form_validation->set_rules('jenis_usaha', 'Jenis Usaha', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'No Telphone', 'required|trim|numeric');
        $this->form_validation->set_rules('website', 'Website', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();

            $data['title'] = 'Edit Profile Company | Hex.Inc';
            $this->load->view('client/company/navcompany', $data);
            $this->load->view('client/company/akunprofile2');
            $this->load->view('template/footer');
        } else {
            $data = [
                'company2_id'         => htmlspecialchars($this->input->post('company2_id')),
                'npwp'                => htmlspecialchars($this->input->post('npwp')),
                'name'                => htmlspecialchars($this->input->post('name')),
                'alamat'              => htmlspecialchars($this->input->post('alamat')),
                'kota'                => htmlspecialchars($this->input->post('kota')),
                'provinsi'            => htmlspecialchars($this->input->post('provinsi')),
                'kode_pos'            => htmlspecialchars($this->input->post('kode_pos')),
                'jumlah_pendapatan'   => htmlspecialchars($this->input->post('jumlah_pendapatan')),
                'jumlah_tenaga'       => htmlspecialchars($this->input->post('jumlah_tenaga')),
                'jenis_usaha'         => htmlspecialchars($this->input->post('jenis_usaha')),
                'no_telp'             => htmlspecialchars($this->input->post('no_telp')),
                'website'             => htmlspecialchars($this->input->post('website'))
            ];
            $this->db->insert('profilcompany2', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
       Congratulation!
      </div>');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Profile Berhasil Diisi dan <strong>Kembali ke Profile</strong>
      </div>');

            redirect('company/dataakun');
        }
    }

    public function event()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Event | Hex.Inc';
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/event');
        $this->load->view('template/footer');
    }

    public function event1()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/listevent/event1');
        $this->load->view('template/footer');
    }

    public function event2()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/listevent/event2');
        $this->load->view('template/footer');
    }

    public function event3()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/listevent/event3');
        $this->load->view('template/footer');
    }

    public function event4()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('client/company/navcompany', $data);
        $this->load->view('client/listevent/event1');
        $this->load->view('template/footer');
    }
}
