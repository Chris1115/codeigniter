<?php
    class Admin extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Identity_model');
            $this->load->model('Account_model');
            $this->load->library('form_validation');
            $this->secure();
        }

        public function index()
        {
            $data ['judul'] = 'Admin';  
            $data ['akun'] = $this->Identity_model->getAllIdDetails();
            $data ['akunAkses'] = $this->Account_model->getAllAccount();

            if ( $this->input->post('keyword') )
            {
                $data ['akun'] = $this->Identity_model->getAccByKeyword();
            }

            $this->load->view('templates/user/header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/user/footer');
        }

        public function hapus($id)
        {
            $this->Identity_model->deleteId($id);
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin');
        }

        public function detail($id)
        {
            $data ['judul'] = 'Details';  
            $data ['akun'] = $this->Identity_model->getAccById($id);

            $this->load->view('templates/user/header', $data);
            $this->load->view('admin/detail', $data);
            $this->load->view('templates/user/footer');
        }

        public function ubah($id)
        {
            $data ['judul'] = 'Ubah';
            $data ['akun'] = $this->Identity_model->getAccById($id);
            
            $this->form_validation->set_rules('id', 'id', 'required|exact_length[10]');
            $this->form_validation->set_rules('nickname', 'nickname', 'required');
            $this->form_validation->set_rules('role', 'role', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/user/header', $data);
                $this->load->view('admin/ubah');
                $this->load->view('templates/user/footer');
            }
            else
            {
                $this->Identity_model->updateAcc();
                $this->session->set_flashdata('flash', 'diubah');
                redirect('admin');

                echo "berhasil";
            }
        }

        private function secure()
        {
            if(empty($this->session->userdata('id')))
            {
                redirect('auth');
            }
            else
            {
                $data = $this->Identity_model->getAccById($this->session->userdata('id'));

                if ($data['role'] == 'student')
                {
                    redirect('user');
                }
            }
        }
    }