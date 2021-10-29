<?php
    class Exercise extends CI_Controller
    {
        public function index()
        {
            $data ['judul'] = 'About Us'; 
            $this->load->view('templates/public/header', $data);
            $this->load->view('exercise/index');
            $this->load->view('templates/public/footer');
        }

        public function js()
        {
            $data ['judul'] = 'About Us'; 
            $this->load->view('templates/public/header', $data);
            $this->load->view('exercise/js');
            $this->load->view('templates/public/footer');
        }
    }