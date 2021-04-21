<?php
    class Home extends CI_Controller
    {
        public function index()
        {
            $data ['judul'] = 'Home'; 
            $this->load->view('templates/public/header', $data);
            $this->load->view('home/index');
            $this->load->view('templates/public/footer');
        }
    }
