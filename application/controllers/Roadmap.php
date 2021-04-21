<?php
    class Roadmap extends CI_Controller
    {
        public function index()
        { 
            $data ['judul'] = 'Study';  
            $this->load->view('templates/public/header', $data);
            $this->load->view('roadmap/index');
            $this->load->view('templates/public/footer');
        }
    }