
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{


	public function index()
	{

		$table = 'faqs';
		$data['faqs'] = $this->Home_model->getAllRecords($table);

		$this->load->view('frontend/index', $data);
	}
	public function about_us()
	{
		$this->load->view('frontend/about');
	}
	public function services()
	{
		$this->load->view('frontend/services');
	}

	public function technology()
	{
		$this->load->view('frontend/technology');
	}

	public function manufacturing()
	{
		$this->load->view('frontend/manufacturing');
	}

	public function sales()
	{
		$this->load->view('frontend/sales');
	}

	public function enquiries()
	{
		$this->load->view('frontend/enquiry');
	}
	public function careers()
	{
		$this->load->view('frontend/career');
	}
	public function faqs()
	{
		$this->load->view('frontend/faq');
	}
	public function contact_us()
	{
		$this->load->view('frontend/contact');
	}
	public function term_condition()
	{
		$this->load->view('frontend/terms');
	}
	public function privacy()
	{
		$this->load->view('frontend/privacy_policy');
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
}
