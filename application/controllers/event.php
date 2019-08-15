<?php
defined('BASEPATH') or exit('No direct script access allowed');

class event extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Event | Hex.Inc';
        $this->load->view('template/navbar', $data);
        $this->load->view('template/event');
        $this->load->view('template/footer');
    }

    public function event1()
    {
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('template/navbar', $data);
        $this->load->view('template/listevent/event1');
        $this->load->view('template/footer');
    }

    public function event2()
    {
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('template/navbar', $data);
        $this->load->view('template/listevent/event2');
        $this->load->view('template/footer');
    }

    public function event3()
    {
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('template/navbar', $data);
        $this->load->view('template/listevent/event3');
        $this->load->view('template/footer');
    }

    public function event4()
    {
        $data['title'] = 'Detail Event | Hex.Inc';
        $this->load->view('template/navbar', $data);
        $this->load->view('template/listevent/event4');
        $this->load->view('template/footer');
    }
}
