<?php
    class About extends CI_Controller
    {
        public function index()
        {
            $data ['judul'] = 'About Us'; 
            $this->load->view('templates/public/header', $data);
            $this->load->view('about/index');
            $this->load->view('templates/public/footer');
        }

        public function contact()
        {
            $data ['judul'] = 'Contact'; 
            $this->load->view('templates/public/header', $data);
            $this->load->view('about/contact');
            $this->load->view('templates/public/footer');
        }
    }