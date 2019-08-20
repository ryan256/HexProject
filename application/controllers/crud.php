<?php
defined('BASEPATH') or exit('No direct script access allowed');

class crud extends CI_Controller
{
    public function index()
    {

        $data['reg'] = $this->username_model->getAllreg();
        if ($this->input->post('keyword')) {

            $data['reg'] = $this->username_model->cariData();
        }

        $this->load->view('crud/navberanda');
        $this->load->view('crud/akun', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        //$this->load->model('username_model');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('notelp', 'No.Telp', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('crud/navberanda');
            $this->load->view('crud/tambah');
            $this->load->view('template/footer');
        } else {

            $this->username_model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('crud');
        }
    }

    public function hapus($username)
    {
        $this->username_model->hapusData($username);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('crud');
    }

    public function detail($username)
    {
        $data['reg'] = $this->username_model->getDetail($username);

        $this->load->view('crud/navberanda');
        $this->load->view('crud/detail', $data);
        $this->load->view('template/footer');
    }

    public function ubah($username)
    {

        $data['reg'] = $this->username_model->getDetail($username);

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('notelp', 'No.Telp', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('crud/navberanda');
            $this->load->view('crud/ubah', $data);
            $this->load->view('template/footer');
        } else {

            $this->username_model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('crud');
        }
    }
}
