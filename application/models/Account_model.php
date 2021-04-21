<?php
    class Account_model extends CI_model
    {
        public function getAllAccount()
        {
            return $this->db->get('account')->result_array();
        }

        public function register()
        {
            $data = array(
                'id'        => htmlspecialchars($this->input->post('id', TRUE)),
                'username'  => htmlspecialchars($this->input->post('username', TRUE)),
                'password'  => htmlspecialchars($this->input->post('password', TRUE))
            );
        
            $this->db->insert('account', $data);
        }
    }