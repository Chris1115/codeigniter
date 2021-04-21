<?php
    class Auth extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('Identity_model');
            $this->load->model('Account_model');
        }

        public function index()
        {
            $data ['judul'] = 'Login';
            
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/public/header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/public/footer');
            }
            else
            {
                $this->_login();
            }
        }

        private function _login()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('account', ['username' => $username])->row_array();

            if($user)
            {

                if($password == $user['password'])
                {
                    $data = $this->db->get_where('identity', ['id' => $user['id']])->row_array();
                    
                    if ($data['role'] == 'staff')
                    {
                        redirect('admin');
                    }
                    else
                    {
                        $this->session->set_userdata($user);
                        redirect('user');
                    }
                }
                else
                {
                    echo 'password salah';
                }

            }
            else
            {
                echo 'user tidak ada';
            }
        }


        public function register()
        {
            $data ['judul'] = 'Register';
            
            $this->form_validation->set_rules('id', 'id', 'required|exact_length[10]');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[identity.email]',['is_unique' => 'This email has already registered']);
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('nickname', 'nickname', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/public/header', $data);
                $this->load->view('auth/register');
                $this->load->view('templates/public/footer');
            }
            else
            {
                $this->Identity_model->register();
                $this->Account_model->register();
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('auth');
            }
        }

        public function logout()
        {
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('password');
            redirect('auth');
        }
    }