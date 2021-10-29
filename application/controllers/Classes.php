<?php
    class Classes extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Identity_model');
            $this->load->model('Account_model');
            $this->load->model('Identity_model');
            $this->load->model('Forum_model');
            $this->load->model('Shop_model');
            $this->load->model('Class_model');
        }

        public function register($data)
        {
            $course_id = $data;
            $user_id = $this->session->userdata('id');

            $this->Class_model->registerClass($user_id, $course_id);
            redirect('user');
        }

        
    }

