
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{


	public function index()
	{

		$data['contact'] = $this->db->count_all('contacts');
		$data['services'] = $this->db->count_all('services');
		$data['career'] = $this->db->count_all('careers');
		$data['enquiry'] = $this->db->count_all('enquires');

		$this->load->view('backend/index', $data);
	}


	public function about()
	{
		$table = 'abouts';
		$data['records'] = $this->Admin_model->getAllRecords($table);
		$this->load->view('backend/about', $data);
	}


	public function editAbout()
	{
		$table = 'abouts';
		$id = $this->input->post('id');
		$data = null;
		$reponse =  $this->Admin_model->updateRecord($id, $data, $table);
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

	public function addSlider()
	{

		$this->load->view('backend/add_slider');
	}


	public function slider()
	{

		$table = 'sliders';
		$data['records'] = $this->Admin_model->getAllRecords($table);

		$this->load->view('backend/slider', $data);
	}


	public function deleteSlider()
	{


		$id = $this->input->get('id');

		$table = 'sliders';
		$this->Admin_model->deleteRecord($id, $table);


		$this->session->set_flashdata('success', 'Slider deleted successfully');
		redirect(base_url('admin/slider'));
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
		$this->load->view('backend/website_settings', $data);
	}


	public function edit_setting()
	{
		$id = 1;
		$table = 'website_settings';
		$data['records'] = $this->Admin_model->getRecordById($id, $table);
		$this->load->view('backend/edit_settings', $data);
	}


	public function add_faq()
	{
		$this->load->view('backend/add_faq');
	}

	public function saveFaq()
	{
		$data['question'] = $this->input->post('question');
		$data['answer'] = $this->input->post('answer');

		$response = $this->db->insert('faqs', $data);
		if ($response) {
			$this->session->set_flashdata('success', 'Faq Added successfully');
			redirect(base_url('admin/faq'));
		}else{
			$this->session->set_flashdata('success', 'Faq Added successfully');
			redirect(base_url('admin/faq'));
		}
	}

	public function faq()
	{
		$table = 'faqs';
		$data['records'] = $this->Admin_model->getAllRecords($table);

		$this->load->view('backend/faq', $data);
	}


	public function profile()
	{
		$this->load->view('backend/profile');
	}


	public function deleteFaq()
	{

		$id = $this->input->get('id');

		$table = 'faqs';
		$this->Admin_model->deleteRecord($id, $table);


		$this->session->set_flashdata('success', 'Faq deleted successfully');
		redirect(base_url('admin/faq'));
	}
}
