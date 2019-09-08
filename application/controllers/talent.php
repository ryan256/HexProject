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
        $this->load->view('client/index', $data);
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


    public function profil($id)
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();


        $data['profiltalent'] = $this->db->get_where('profiltalent', ['talent_id' => $id])->row_array();

        $data['title'] = 'Profile Talent | Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/talent/profil', $data);
        $this->load->view('template/footer');
    }

    public function editprofil($id)
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

        if ($this->form_validation->run() == FALSE) {
            $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();


            $data['profiltalent'] = $this->db->get_where('profiltalent', ['talent_id' => $id])->row_array();

            $data['title'] = 'Profile Talent | Hex.Inc';
            $this->load->view('client/talent/navtalent', $data);
            $this->load->view('client/talent/editprofil', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                "talent_id"           => $this->input->post('talent_id', true),
                "name"                => $this->input->post('name', true),
                "nik"                 => $this->input->post('nik', true),
                "tempat_lahir"        => $this->input->post('tempat_lahir', true),
                "tanggal_lahir"       => $this->input->post('tanggal_lahir', true),
                "jenis_kelamin"       => $this->input->post('jenis_kelamin', true),
                "pendidikan_terakhir" => $this->input->post('pendidikan_terakhir', true),
                "alamat"              => $this->input->post('alamat', true),
                "kota"                => $this->input->post('kota', true),
                "provinsi"            => $this->input->post('provinsi', true),
                "kode_pos"            => $this->input->post('kode_pos', true),
                "pekerjaan"           => $this->input->post('pekerjaan', true),
                "no_hp"               => $this->input->post('no_hp', true)

            ];

            $this->db->where('talent_id', $this->input->post('talent_id'));
            $this->db->update('profiltalent', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Profile Berhasil Diedit dan <strong>Kembali ke Profile</strong>
        </div>');


            redirect('talent/dataakun');
        }
    }

    public function dataakunprofile()
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

        if ($this->form_validation->run() == false) {
            $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();

            $data['title'] = 'Edit Profile Talent | Hex.Inc';
            $this->load->view('client/talent/navtalent', $data);
            $this->load->view('client/talent/akunprofile', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'talent_id'           => htmlspecialchars($this->input->post('talent_id')),
                'name'                => htmlspecialchars($this->input->post('name')),
                'nik'                 => htmlspecialchars($this->input->post('nik')),
                'tempat_lahir'        => htmlspecialchars($this->input->post('tempat_lahir')),
                'tanggal_lahir'                   => date($this->input->post('tanggal_lahir')),
                'jenis_kelamin'       => htmlspecialchars($this->input->post('jenis_kelamin')),
                'pendidikan_terakhir' => htmlspecialchars($this->input->post('pendidikan_terakhir')),
                'alamat'              => htmlspecialchars($this->input->post('alamat')),
                'kota'                => htmlspecialchars($this->input->post('kota')),
                'provinsi'            => htmlspecialchars($this->input->post('provinsi')),
                'kode_pos'            => htmlspecialchars($this->input->post('kode_pos')),
                'pekerjaan'           => htmlspecialchars($this->input->post('pekerjaan')),
                'no_hp'               => htmlspecialchars($this->input->post('no_hp'))
            ];
            $this->db->insert('profiltalent', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Congratulation!
          </div>');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Profile Berhasil Diisi dan <strong>Kembali ke Profile</strong>
          </div>');

            redirect('talent/dataakun');
        }
    }



    public function training1()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Langkah-langkah Training | Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/training1');
        $this->load->view('template/footer');
    }

    public function socialmediamng()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Social Media Management| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihantraining/socialmedia');
        $this->load->view('template/footer');
    }
    public function contentmng()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Content Management| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihantraining/contentmng');
        $this->load->view('template/footer');
    }
    public function social()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Social| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihantraining/social');
        $this->load->view('template/footer');
    }
    public function tourism()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Tourism| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihantraining/Tourism');
        $this->load->view('template/footer');
    }
    public function education()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Education| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihantraining/education');
        $this->load->view('template/footer');
    }
    public function healty()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Healty| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihantraining/healty');
        $this->load->view('template/footer');
    }

    public function energy()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Energy| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihantraining/energy');
        $this->load->view('template/footer');
    }

    public function smartcity()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Smart City| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihantraining/smartcity');
        $this->load->view('template/footer');
    }



    public function pilihmntsocialmediamng()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Smart City| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihanmentor/socialmedia');
        $this->load->view('template/footer');
    }
    public function pilihmntcontentmng()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Smart City| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihanmentor/content');
        $this->load->view('template/footer');
    }
    public function pilihmnteducation()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Smart City| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihanmentor/educati');
        $this->load->view('template/footer');
    }
    public function pilihmntenergy()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Smart City| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihanmentor/energ');
        $this->load->view('template/footer');
    }
    public function pilihmnthealty()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Smart City| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihanmentor/healt');
        $this->load->view('template/footer');
    }
    public function pilihmntsmartcity()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Smart City| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihanmentor/smartcty');
        $this->load->view('template/footer');
    }
    public function pilihmntsocial()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Smart City| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihanmentor/soci');
        $this->load->view('template/footer');
    }
    public function pilihmnttourism()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Smart City| Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/pilihanmentor/touris');
        $this->load->view('template/footer');
    }




    public function event()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Event | Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/event');
        $this->load->view('template/footer');
    }

    public function event1()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/listevent/event1');
        $this->load->view('template/footer');
    }

    public function event2()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/listevent/event2');
        $this->load->view('template/footer');
    }

    public function event3()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/listevent/event3');
        $this->load->view('template/footer');
    }

    public function event4()
    {
        $data['client'] = $this->db->get_where('client', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('client/talent/navtalent', $data);
        $this->load->view('client/listevent/event1');
        $this->load->view('template/footer');
    }
}
