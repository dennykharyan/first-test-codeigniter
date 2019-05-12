<?php


	class Employee extends CI_Controller{

		public function __construct(){
			parent::__construct();

			$this->load->model('Employee_model');
			$this->load->model('Address_model');
		}
		

		public function index(){
			$data['judul'] = 'Daftar Karyawan';
			
			if ($this->input->post('txtSearch')) {
				# code...
				$data['karyawan'] = $this->Employee_model->search();
			}
			else{
				$data['karyawan'] = $this->Employee_model->selectall();
			}

			$this->load->view('templates/header', $data);
			$this->load->view('employee/index');
			$this->load->view('templates/footer');
		}


		public function tambah(){
			$data['judul'] = 'Data Karyawan';

			$this->form_validation->set_rules(
												'txtFirstName',
												'First Name',
												'required|max_length[25]|trim|alpha'
											);
			$this->form_validation->set_rules(
												'txtLastName',
												'Last Name',
												'required|max_length[25]|trim|alpha_dash'
											);
			$this->form_validation->set_rules(
												'txtEmail',
												'Email',
												'required|is_unique[employee.email]|max_length[100]|valid_email'
											);
			$this->form_validation->set_rules('txtPosition', 'Position', 'required');
			$this->form_validation->set_rules('txtJoinDate', 'Join Date', 'required');
			$this->form_validation->set_rules('txtPhone', 'Phone', 'required|is_natural');

			if ($this->form_validation->run() == FALSE) {
				# code...
				$this->load->view('templates/header', $data);
				$this->load->view('employee/form');
				$this->load->view('templates/footer');
			} else {
				# code...
				$this->Employee_model->insert();
				$this->session->set_flashdata('message', 'ditambahkan');
				redirect('employee/index');
			}
		}
		
		
		public function hapus($id){
			$this->Employee_model->delete($id);
			$this->session->set_flashdata('message', 'dihapus');
			redirect('employee');
		}


		public function detail($id){
			$data['judul'] = 'Data Karyawan';
			$data['karyawan'] = $this->Employee_model->selectbyid($id);
			$data['alamat'] = $this->Address_model->selectbyid($id);

			$this->load->view('templates/header', $data);
			$this->load->view('employee/detail', $data);
			$this->load->view('templates/footer');
		}


		public function edit($id){
			$data['judul'] = 'Data Karyawan';
			$data['karyawan'] = $this->Employee_model->selectbyid($id);

			$this->form_validation->set_rules(
												'txtFirstName',
												'First Name',
												'required|max_length[25]|trim|alpha'
											);
			$this->form_validation->set_rules(
												'txtLastName',
												'Last Name',
												'required|max_length[25]|trim|alpha_dash'
											);
			$this->form_validation->set_rules(
												'txtEmail',
												'Email',
												'required|max_length[100]|valid_email'
											);
			$this->form_validation->set_rules('txtPosition', 'Position', 'required');
			$this->form_validation->set_rules('txtJoinDate', 'Join Date', 'required');
			$this->form_validation->set_rules('txtPhone', 'Phone', 'required|is_natural');

			if ($this->form_validation->run() == FALSE) {
				# code...
				$this->load->view('templates/header', $data);
				$this->load->view('employee/form_edit', $data);
				$this->load->view('templates/footer');
			} else {
				# code...
				$this->Employee_model->update();
				$this->session->set_flashdata('message', 'diubah');
				redirect('employee/index');
			}
		}
	}