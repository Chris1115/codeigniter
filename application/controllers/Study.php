<?php
    class Study extends CI_Controller
    {
        public function index()
        { 
            $data ['judul'] = 'Study';  
            $this->load->view('templates/public/header', $data);
            $this->load->view('study/index');
            $this->load->view('templates/public/footer');
        }

        public function html()
        { 
            $data ['judul'] = 'Study';  
            $this->load->view('templates/public/header', $data);
            $this->load->view('study/html');
            $this->load->view('templates/public/footer');
        }

        public function css()
        { 
            $data ['judul'] = 'Study';  
            $this->load->view('templates/public/header', $data);
            $this->load->view('study/css');
            $this->load->view('templates/public/footer');
        }

        public function js()
        { 
            $data ['judul'] = 'Study';  
            $this->load->view('templates/public/header', $data);
            $this->load->view('study/js');
            $this->load->view('templates/public/footer');
        }
    }