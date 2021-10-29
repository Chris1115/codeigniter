<?php
    class Admin extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Identity_model');
            $this->load->model('Account_model');
            $this->load->model('Forum_model');
            $this->load->model('Class_model');
            $this->load->library('form_validation');
            // $this->secure();
        }

        public function index()
        {
            $data ['judul'] = 'Admin';  
            $data ['akun'] = $this->Identity_model->getAllIdDetails();
            $data ['akunAkses'] = $this->Account_model->getAllAccount();
            $data ['forum'] = $this->Forum_model->getAllForum();
            $data ['course'] = $this->Class_model->getAllCourse();

            if ( $this->input->post('keyword') )
            {
                $data ['akun'] = $this->Identity_model->getAccByKeyword();
            }

            $this->load->view('templates/user/header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/user/footer');
        }


        // Settingan akun

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
                $this->Identity_model->updateAcc($id);
                $this->session->set_flashdata('flash', 'diubah');
                redirect('admin');

                echo "berhasil";
            }
        }




        // Settingan Forum

        public function newForum()
        {
            $data ['judul'] = 'Add New Forum'; 

            $this->form_validation->set_rules('forum_id', 'Forum ID', 'required|exact_length[8]|is_unique[forum.forum_id]');
            $this->form_validation->set_rules('headline', 'Headline', 'required');
            $this->form_validation->set_rules('question', 'Question', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/public/header', $data);
                $this->load->view('admin/addForum');
                $this->load->view('templates/public/footer');
            }
            else
            {
                $this->Forum_model->addNewForum();
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('admin');
            }
        }

        public function gantiForum($id)
        {
            $data ['judul'] = 'Chane forum details';
            $data ['detail'] = $this->Forum_model->getForumInfo($id);

            $this->form_validation->set_rules('headline', 'Headline', 'required');
            $this->form_validation->set_rules('question', 'Question', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/public/header', $data);
                $this->load->view('admin/changeForum', $data);
                $this->load->view('templates/public/footer');
            }
            else
            {
                $this->Forum_model->updateForum($id);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('admin');
            }
        }

        public function hapusForum($forum_id)
        {
            $this->Forum_model->deleteForumId($forum_id);
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin');
        }

        // Settingan Forum

        public function newCourse()
        {
            $data ['judul'] = 'Add New Forum'; 

            $this->form_validation->set_rules('id', ' Course ID', 'required|exact_length[5]|is_unique[course.id]');
            $this->form_validation->set_rules('course_name', 'Course Name', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/public/header', $data);
                $this->load->view('admin/addCourse');
                $this->load->view('templates/public/footer');
            }
            else
            {
                $this->Class_model->addNewCourse();
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('admin');
            }
        }

        public function gantiCourse($id)
        {
            $data ['judul'] = 'Change Course details';
            $data ['detail'] = $this->Class_model->getCourseByID($id);

            $this->form_validation->set_rules('course_name', 'Course Name', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/public/header', $data);
                $this->load->view('admin/changeCourse', $data);
                $this->load->view('templates/public/footer');
            }
            else
            {
                $this->Class_model->updateCourse($id);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('admin');
            }
        }

        public function hapusCourse($id)
        {
            $this->Class_model->deleteCourseId($id);
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin');
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