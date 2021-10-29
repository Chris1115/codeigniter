<?php
    class Shop extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('Identity_model');
            $this->load->model('Account_model');
            $this->load->model('Forum_model');
            $this->load->model('Shop_model');
        }


        public function index()
        { 
            $data ['judul']     = 'Study';
            $data ['details']   = $this->Shop_model->getAllShopData();
            $data ['user']      = $this->Identity_model->getAccById($this->session->userdata('id'));

            
            $this->load->view('templates/user/header', $data);
            $this->load->view('shop/index', $data);
            $this->load->view('templates/user/footer');

            $this->form_validation->set_rules('quantity', 'quantity', 'required|numeric');

            if ($this->form_validation->run() == FALSE)
            {
                
            }
            else
            {
                $quantity = $this->input->post('quantity', TRUE);
                $item_id = $this->input->post('item', TRUE);
                $point = $data['user']['point'];
                $price = $this->Shop_model->getProductById($item_id)['price'];

                $this->buy($quantity, $item_id, $point, $price);
                redirect('user');
            }
        }

        private function buy($quantity, $item_id, $points, $price)
        {
            $this->Shop_model->check($item_id, $this->session->userdata('id'), $quantity, $points, $price);
        }
    }