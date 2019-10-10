<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('template/navbar', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('template/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $client = $this->db->get_where('client', ['email' => $email])->row_array();

        if ($client) {
            //jika user aktif
            if ($client['is_active'] == 1) {
                //cek password
                if (password_verify($password, $client['password'])) {

                    $data = [
                        'email' => $client['email'],
                        'position' => $client['position']
                    ];
                    $this->session->set_userdata($data);
                    if ($client['position'] == 'talent') {
                        redirect('talent');
                    } elseif ($client['position'] == 'mentor') {
                        redirect('mentor');
                    } elseif ($client['position'] == 'company') {
                        redirect('company');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Wrong Password!
                        </div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    This Email is Not Been Activated!
                    </div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email id not Registered!
            </div>');

            redirect('Auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[client.email]', [
            'is_unique' => 'This Email has already registed!'

        ]);
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[8]|matches[password2]',
            [
                'matches' => 'Password dont matches!',
                'min_length' => 'Password too Short min 8!'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration Page';
            $this->load->view('template/navbar', $data);
            $this->load->view('auth/register', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'position' => htmlspecialchars($this->input->post('position')),
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('client', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Congratulation! your account has been Created. Please login
          </div>');

            redirect('auth');
        }
    }
    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('position');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           You have been Logged out! and <strong>Back to Home or Login</strong>
          </div>');
        redirect('auth');
    }
}
