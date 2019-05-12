<?php

	class Address extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('Address_model');
		}

		
		public function tambah($id){
			$data['judul'] = "Tambah alamat";
			$data['id'] = $id;

			$this->form_validation->set_rules('txtAddress', 'Address', 'required|max_length[255]');
			$this->form_validation->set_rules('txtCity', 'City', 'required|max_length[100]');
			$this->form_validation->set_rules('txtProvince', 'Province', 'required|max_length[100]');
			$this->form_validation->set_rules('txtZip', 'Zip Code', 'required|exact_length[5]|integer|numeric');

			if ($this->form_validation->run() == false) {
				# code...
				$this->load->view('templates/header', $data);
				$this->load->view('address/form', $data);
				$this->load->view('templates/footer');
			}
			else{
				$this->Address_model->insert();
				$this->session->set_flashdata('message', 'ditambahkan');
				redirect('employee/detail/' . $id);
			}
		}


		public function edit($employee_id, $address_id){
			$data['judul'] = "Ubah alamat";
			$data['alamat'] = $this->Address_model->select($address_id);

			$this->form_validation->set_rules('txtAddress', 'Address', 'required|max_length[255]');
			$this->form_validation->set_rules('txtCity', 'City', 'required|max_length[100]');
			$this->form_validation->set_rules('txtProvince', 'Province', 'required|max_length[100]');
			$this->form_validation->set_rules('txtZip', 'Zip Code', 'required|exact_length[5]|integer|numeric');

			if ($this->form_validation->run() == false) {
				# code...
				$this->load->view('templates/header', $data);
				$this->load->view('address/form_edit', $data);
				$this->load->view('templates/footer');
			}
			else{
				$this->Address_model->update();
				$this->session->set_flashdata('message', 'diubah');
				redirect('employee/detail/' . $employee_id);
			}
		}


		public function hapus($employee_id, $address_id){
			$this->Address_model->delete($address_id);
			$this->session->set_flashdata('message', 'dihapus');
			redirect('employee/detail/' . $employee_id);
		}
	}