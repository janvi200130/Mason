
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('frontend/index');
	}
	public function about_us()
	{
		$this->load->view('frontend/about');
		
	}
    public function services()
	{
		$this->load->view('frontend/services');
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
	
}
