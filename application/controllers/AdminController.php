
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{


	public function index()
	{
		$this->load->view('backend/index');
	}


	public function about()
	{
		$this->load->view('backend/about');
	}

	public function contact()
	{

		$table = 'contacts';
		$data['records'] = $this->Admin_model->getAllRecords($table);

		$this->load->view('backend/contact', $data);
	}

	public function deleteContact()
	{

		$id = $this->input->get('id');

		$table = 'contacts';
		$this->Admin_model->deleteRecord($id, $table);


		$this->session->set_flashdata('success', 'Contact deleted successfully');
		redirect(base_url('admin/contact'));
	}

	public function career()
	{

		$table = 'careers';
		$data['records'] = $this->Admin_model->getAllRecords($table);

		$this->load->view('backend/career', $data);
	}

	public function deleteCareer()
	{

		$id = $this->input->get('id');

		$table = 'careers';
		$this->Admin_model->deleteRecord($id, $table);


		$this->session->set_flashdata('success', 'Career deleted successfully');
		redirect(base_url('admin/career'));
	}


	public function enquiry()
	{

		$table = 'enquires';
		$data['records'] = $this->Admin_model->getAllRecords($table);

		$this->load->view('backend/enquiry', $data);
	}

	public function deleteEnquiry()
	{

		$id = $this->input->get('id');

		$table = 'enquires';
		$this->Admin_model->deleteRecord($id, $table);


		$this->session->set_flashdata('success', 'Enquiry deleted successfully');
		redirect(base_url('admin/enquiry'));
	}


	public function add_service()
	{
		$this->load->view('backend/index');
	}


	public function service_list()
	{
		$this->load->view('backend/index');
	}

	public function settings()
	{

		$id = 1;
		$table = 'website_settings';
		$data['records'] = $this->Admin_model->getRecordById($id, $table);
		$this->load->view('backend/website_settings',$data);
	}
}
