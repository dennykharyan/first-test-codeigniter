<?php


    class Address_model extends CI_Model{


        public function select($id){
            return $this->db->get_where('employee_address', ['address_id' => $id])->row_array();
        }

        
        public function selectbyid($id){

            return $this->db->get_where('employee_address', ['employee_id' => $id])->result_array();
        }


        public function insert(){
            $data = [
                "employee_id" => $this->input->post('txtEmployeeId', true),
                "address" => $this->input->post('txtAddress', true),
                "city" => $this->input->post('txtCity', true),
                "province" => $this->input->post('txtProvince', true),
                "zip_code" => $this->input->post('txtZip', true)
            ];

            $this->db->insert('employee_address', $data);
        }


        public function update(){
            $data = [
                "address" => $this->input->post('txtAddress', true),
                "city" => $this->input->post('txtCity', true),
                "province" => $this->input->post('txtProvince', true),
                "zip_code" => $this->input->post('txtZip', true)
            ];

            $this->db->where('address_id', $this->input->post('txtAddressId'));
            $this->db->update('employee_address', $data);
        }


        public function delete($id){
            $this->db->where('address_id', $id);
            $this->db->delete('employee_address');
        }
    }