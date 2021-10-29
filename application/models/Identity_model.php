<?php
    class Identity_model extends CI_model
    {
        public function getAllIdDetails()
        {
            return $this->db->get('identity')->result_array();
        }

        public function register()
        {
            $data = array(
                'id'        => htmlspecialchars($this->input->post('id', TRUE)),
                'nickname'  => htmlspecialchars($this->input->post('nickname', TRUE)),
                'status'    => htmlspecialchars('offline'),
                'role'      => htmlspecialchars('student'),
                'point'     => htmlspecialchars(0),
                'email'     => htmlspecialchars($this->input->post('email', TRUE)),
                'rank'      => htmlspecialchars('beginner'),
                'rate'      => htmlspecialchars(0)
            );
        
            $this->db->insert('identity', $data);
        }

        public function deleteId($id)
        {
            $this->db->delete('account', array('id' => $id));
            $this->db->delete('identity', array('id' => $id));

            // Produces:
            // DELETE FROM mytable
            // WHERE id = $id
        }

        public function getAccById($id)
        {
            return $this->db->get_where('identity', array('id' => $id))->row_array();
        }

        public function updateAcc($id)
        {
            $data = array(
                'id' => $id,
                'email' => $this->input->post('email', TRUE),
                'role' => $this->input->post('role', TRUE),
                'nickname' => $this->input->post('nickname', TRUE),
            );
        
            $this->db->where('id', $id);
            $this->db->update('identity', $data);
        }

        public function getAccByKeyword()
        {
            $keyword = $this->input->post('keyword', TRUE);
            $this->db->like('status', $keyword);
            $this->db->or_like('role', $keyword);
            $this->db->or_like('point', $keyword);
            $this->db->or_like('nickname', $keyword);
            $this->db->or_like('rank', $keyword);
            $this->db->or_like('rate', $keyword);
            return $this->db->get('identity')->result_array();
        }

        public function addPoints($user_id, $current_point)
        {
            $data = array(
                'point' => $current_point
            );
            $this->db->where('id', $user_id);
            $this->db->update('identity', $data);
        }

        public function changeStatus($user_id, $status)
        {
            if ($status == 'offline')
            {
                $this->db->where('id', $user_id);
                $this->db->update('identity', ['status' => 'online']);
            }
            else
            {
                $this->db->where('id', $user_id);
                $this->db->update('identity', ['status' => 'offline']);
            }
        }
    }