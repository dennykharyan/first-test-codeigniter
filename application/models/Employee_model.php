<?php

    class Employee_model extends CI_Model{
        
        public function selectall(){
            $this->db->order_by('last_name', 'ASC');
            return $this->db->get('employee')->result_array();
        }


        public function selectbyid($id){
            return $this->db->get_where('employee', ['employee_id' => $id])->row_array();
        }


        public function insert(){
            $data = [
                "first_name" => $this->input->post('txtFirstName', true),
                "last_name" => $this->input->post('txtLastName', true),
                "email" => $this->input->post('txtEmail', true),
                "position" => $this->input->post('txtPosition', true),
                "join_date" => $this->input->post('txtJoinDate', true),
                "phone" => $this->input->post('txtPhone', true)
            ];
            
            $this->db->insert('employee', $data);
        }


        public function delete($id){
            $this->db->where('employee_id', $id);
            $this->db->delete('employee');
        }


        public function update(){
            $data = [
                "first_name" => $this->input->post('txtFirstName', true),
                "last_name" => $this->input->post('txtLastName', true),
                "email" => $this->input->post('txtEmail', true),
                "position" => $this->input->post('txtPosition', true),
                "join_date" => $this->input->post('txtJoinDate', true),
                "phone" => $this->input->post('txtPhone', true)
            ];

            $this->db->where('employee_id', $this->input->post('txtEmployeeId'));
            $this->db->update('employee', $data);
        }


        public function search(){
            $this->db->like('first_name', $this->input->post('txtSearch'));
            $this->db->or_like('last_name', $this->input->post('txtSearch'));
            $this->db->or_like('email', $this->input->post('txtSearch'));
            $this->db->or_like('position', $this->input->post('txtSearch'));
            $this->db->or_like('join_date', $this->input->post('txtSearch'));
            $this->db->or_like('phone', $this->input->post('txtSearch'));

            return $this->db->get('employee')->result_array();
        }
    }