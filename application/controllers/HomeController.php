
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{


	public function index()
	{

		$table = 'faqs';
		$data['faqs'] = $this->Home_model->getAllRecords($table);

		$this->db->where('id', 1);
		$data['settings'] = $this->db->get('website_settings')->row_array();


		$this->load->view('frontend/index', $data);
	}
	public function about_us()
	{

		$this->db->where('id', 1);
		$data['settings'] = $this->db->get('website_settings')->row_array();


		$this->load->view('frontend/about', $data);
	}
	public function services()
	{
		$this->db->where('id', 1);
		$data['settings'] = $this->db->get('website_settings')->row_array();



		$this->load->view('frontend/services', $data);
	}

	public function technology()
	{
		$this->db->where('id', 1);
		$data['settings'] = $this->db->get('website_settings')->row_array();

		$this->load->view('frontend/technology',$data);
	}

	public function manufacturing()
	{

		$this->db->where('id', 1);
		$data['settings'] = $this->db->get('website_settings')->row_array();

		$this->load->view('frontend/manufacturing',$data);
	}

	public function sales()
	{
		$this->db->where('id', 1);
		$data['settings'] = $this->db->get('website_settings')->row_array();

		$this->load->view('frontend/sales', $data);
	}

	public function enquiries()
	{
		$this->db->where('id', 1);
		$data['settings'] = $this->db->get('website_settings')->row_array();


		$this->load->view('frontend/enquiry', $data);
	}
	public function careers()
	{

		$this->db->where('id', 1);
		$data['settings'] = $this->db->get('website_settings')->row_array();


		$this->load->view('frontend/career', $data);
	}
	public function faqs()
	{
		$this->load->view('frontend/faq');
	}

	public function contact_us()
	{
		$this->db->where('id', 1);
		$data['settings'] = $this->db->get('website_settings')->row_array();

		$this->load->view('frontend/contact', $data);
	}
	
	public function term_condition()
	{
		$this->db->where('id', 1);
		$data['settings'] = $this->db->get('website_settings')->row_array();

		$this->load->view('frontend/terms', $data);
	}
	public function privacy()
	{
		$this->db->where('id', 1);
		$data['settings'] = $this->db->get('website_settings')->row_array();

		$this->load->view('frontend/privacy_policy', $data);
	}



	// save contact form data

	public function save_enquiry()
	{


		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['number'] = $this->input->post('phone');
		$data['subject'] = $this->input->post('subject');
		$data['message'] = $this->input->post('message');

		$response = $this->db->insert('enquires', $data);
		if ($response) {
			$this->session->set_flashdata('success', 'Successfully Submitted Form');
			redirect(base_url('enquiry'));
		} else {
			$this->session->set_flashdata('error', 'Error in Form Submission');
			redirect(base_url('enquiry'));
		}
	}

	public function save_contact()
	{

		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['number'] = $this->input->post('phone');
		$data['subject'] = $this->input->post('subject');
		$data['message'] = $this->input->post('message');
		$indexForm = $this->input->post('indexForm');

		$response = $this->db->insert('contacts', $data);
		if ($response) {
			$this->session->set_flashdata('success', 'Successfully Submitted Form');
			if ($indexForm) {
				redirect(base_url('/'));
			} else {
				redirect(base_url('contact'));
			}
		} else {
			$this->session->set_flashdata('error', 'Error in Form Submission');
			redirect(base_url('contact'));
		}
	}

	public function save_career()
	{

		$config['upload_path'] = './assets/uploads/career/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 10048; // Maximum size in kilobytes
		$config['max_width'] = 1024; // Maximum width in pixels
		$config['max_height'] = 768; // Maximum height in pixels

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('document')) {

			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect(base_url('career'));
		} else {

			$fileData = $this->upload->data();

			$data['resume'] = $fileData['file_name'];
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['phone'] = $this->input->post('phone');
			$data['address'] = $this->input->post('address');
			$data['qualification'] = $this->input->post('qualification');
			$data['dob'] = $this->input->post('dob');

			$response = $this->db->insert('careers', $data);
		}

		if ($response) {
			$this->session->set_flashdata('success', 'Successfully Submitted Form');
			redirect(base_url('career'));
		} else {
			$this->session->set_flashdata('error', 'Error in Form Submission');
			redirect(base_url('career'));
		}
	}
}
