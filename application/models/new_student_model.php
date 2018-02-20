<?php
class new_student_model extends CI_Model
{

    public function add()
    {
        $new_student_data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'nic' => $this->input->post('nic'),
            'contactno' => $this->input->post('contactno'),
            'address' => $this->input->post('address'),


        );
        $insert = $this->db->insert('student', $new_student_data);
        return $insert;
    }


}