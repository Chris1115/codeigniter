<?php
    class Forum_model extends CI_Model
    {
        public function getAllForum()
        {
            return $this->db->get('forum')->result_array();
        }

        public function getForumDetails($id)
        {
            $this->db->select('*');
            $this->db->from('forum_chat');
            $this->db->join('identity', 'identity.id = forum_chat.user_id');
            $this->db->where('forum_id', $id);
            return $this->db->get()->result_array();
        }

        public function getForumInfo($id)
        {
            return $this->db->get_where('forum', array('forum_id' => $id))->row_array();
        }

        public function addComments($info)
        {
            $data = array(
                'forum_id'  => $info['forum_id'],
                'user_id'   => $info['user_id'],
                'comments'  => htmlspecialchars($info['comments'])
            );
        
            $this->db->insert('forum_chat', $data);
        }
    }