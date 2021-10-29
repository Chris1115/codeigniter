<?php
    class Class_model extends CI_Model
    {
        public function getAllCourse()
        {
            return $this->db->get('course')->result_array();
        }

        public function getAllClass()
        {
            $this->db->select('*');
            $this->db->from('class');
            $this->db->join('course', 'class.course_id = course.id');
            return $this->db->get()->result_array();
        }

        public function getClassById($class_id)
        {
            $this->db->select('*');
            $this->db->from('class');
            $this->db->join('course', 'class.course_id = course.id');
            $this->db->where('course_id', $class_id);
            return $this->db->get()->row_array();
        }

        public function registerClass($user_id, $course_id)
        {
            $data = array(
                'course_id' => $course_id,
                'participant_id' => $user_id,
                'class_id' => 'CLS01'
            );

            $this->db->insert('class', $data);
        }

        public function getRegisteredById($id)
        {
            return $this->db->get_where('class', ['participant_id' => $id])->result_array();
        }

        public function addNewCourse()
        {
            $data = array(
                'id' => $this->input->post('id', TRUE),
                'course_name' => $this->input->post('course_name', TRUE),
                'status' => $this->input->post('status', TRUE)
            );

            $this->db->insert('course', $data);
        }

        public function getCourseByID($id)
        {
            return $this->db->get_where('course', array('id' => $id))->row_array();
        }

        public function updateCourse($id)
        {
            $data = array(
                'id' => $id,
                'course_name' => $this->input->post('course_name', TRUE),
                'status' => $this->input->post('status', TRUE)
            );
        
            $this->db->where('id', $id);
            $this->db->update('course', $data);
        }

        public function deleteCourseId($id)
        {
            $this->db->where('course_id', $id);
            $this->db->delete('class');

            $this->db->delete('course', array('id' => $id));

            // Produces:
            // DELETE FROM mytable
            // WHERE id = $id
        }
    }