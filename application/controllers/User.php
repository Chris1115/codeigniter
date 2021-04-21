<?php

    class User extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Identity_model');
            $this->load->model('Account_model');
            $this->load->model('Forum_model');
        }

        public function index()
        {
            $data ['judul'] = 'User';
            $data ['detail'] = $this->db->get_where('identity', ['id' => $this->session->userdata('id')])->row_array();

            $this->load->view('templates/user/header', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/user/footer');
        }

        public function forum()
        {
            $data ['judul'] = 'Forum';
            $data ['forum'] = $this->Forum_model->getAllForum();
            $this->load->view('templates/user/header', $data);
            $this->load->view('user/forum');
            $this->load->view('templates/user/footer');
        }

        public function forum_detail($id)
        {
            $data ['judul'] = 'Forum Details';
            $data ['user'] = $this->db->get_where('identity', ['id' => $this->session->userdata('id')])->row_array();
            $data ['detail'] = $this->Forum_model->getForumDetails($id);
            $data ['info'] = $this->Forum_model->getForumInfo($id);
            
            $this->load->view('templates/user/header', $data);
            $this->load->view('user/forum_detail', $data);
            $this->load->view('templates/user/footer');

            $info = array(
                'forum_id'      => $id,
                'user_id'       => $data['user']['id'],
                'comments'      => $this->input->post('comments', TRUE)
            );

            if ($this->input->post('comments', TRUE) == '')
            {
                
            }
            else
            {
                $this->Forum_model->addComments(($info));
                header("Refresh:0");
            }
        }
    }