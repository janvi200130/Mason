
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{



	public function __construct()
	{
		parent::__construct();
		$admin = $this->session->userdata('admin');
		if (empty($admin)) {

			$this->session->set_flashdata('msg', 'Your session has been expired');
			redirect(base_url('login'));
		}
	}


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


	public function editAbout($id)
	{

		$table = 'abouts';
		$data['records'] = $this->Admin_model->getRecordById($id, $table);

		$this->load->view('backend/edit_about', $data);
	}

	public function updateAbout()
	{
		$table = 'abouts';
		$id = $this->input->post('id');

		$data = array(
			'intruduction' => $this->input->post('intruduction'),
			'mission' => $this->input->post('mission'),
			'vision' => $this->input->post('vision')
		);

		$response = $this->Admin_model->updateRecord($id, $data, $table);
		if ($response) {

			$this->session->set_flashdata('success', 'About Updated successfully');
			redirect(base_url('admin/about'));
		} else {

			$this->session->set_flashdata('error', 'Error in About Update');
			redirect(base_url('admin/about'));
		}
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


	public function saveSlider()
	{

		$config['upload_path'] = './assets/uploads/slider/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = 10048; // Maximum size in kilobytes


		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('sliderimage')) {

			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect(base_url('admin/add-slider'));
		} else {

			$fileData = $this->upload->data();

			$data['slider_img'] = $fileData['file_name'];
			$data['title'] = $this->input->post('title_text');
			$data['sub_title'] = $this->input->post('subtitle_text');
			$data['btn_text'] = $this->input->post('btn_text');
			$data['btn_link'] = $this->input->post('btn_link');


			$response = $this->db->insert('sliders', $data);
		}

		if ($response) {
			$this->session->set_flashdata('success', 'Slider Added Successfully');
			redirect(base_url('admin/slider'));
		} else {
			$this->session->set_flashdata('error', 'Error in slider add');
			redirect(base_url('admin/slider'));
		}
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


	public function update_setting()
	{


		$table = 'website_settings';
		$id = $this->input->post('id');


		$config['upload_path'] = './assets/img/logos/';
		$config['allowed_types'] = 'png|jpg|jpeg';
		$config['max_size'] = 10048; // Maximum size in kilobytes


		$this->load->library('upload', $config);

		if ($this->upload->do_upload('newLogo')) {

			$fileData = $this->upload->data();
			$image = $fileData['file_name'];
		} else {
			$image = $this->input->post('oldLogo');
		}
		$data = array(
			'logo' => $image,
			'name' => $this->input->post('name'),
			'phone_number1' => $this->input->post('phone_number1'),
			'phone_number2' => $this->input->post('phone_number2'),
			'email1' => $this->input->post('email1'),
			'email2' => $this->input->post('email2'),
			'address' => $this->input->post('address'),
			'google_map' => $this->input->post('google_map'),
			'youtube_link' => $this->input->post('youtube_link'),
			'instagram_link' => $this->input->post('instagram_link'),
			'facebook_link' => $this->input->post('facebook_link'),
			'twitter_link' => $this->input->post('twitter_link'),
		);

		$response = $this->Admin_model->updateRecord($id, $data, $table);

		if ($response) {

			$this->session->set_flashdata('success', 'Website Settigns Updated successfully');
			redirect(base_url('admin/settings'));
		} else {

			$this->session->set_flashdata('error', 'Error in Website Settings Update');
			redirect(base_url('admin/settings'));
		}
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
		} else {
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


	public function addService()
	{
		$this->load->view('backend/add_service');
	}


	public function services()
	{
		$table = 'services';
		$data['records'] = $this->Admin_model->getAllRecords($table);

		$this->load->view('backend/services', $data);
	}


	public function editService($id)
	{

		$this->load->view('backend/edit_service');

	}
}
