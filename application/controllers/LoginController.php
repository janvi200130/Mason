
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{


	public function index()
	{
	// 	 echo password_hash('admin',PASSWORD_DEFAULT);

		// Load the CAPTCHA helper
		$this->load->helper('captcha');

		$word = rand(1000, 9999);

		// CAPTCHA configuration
		$vals = array(
			'word'          => $word,
			'img_path'      => 'captcha_img/',
			'img_url'       => base_url() . 'captcha_img',
			'img_width'     => '100',
			'img_height'    => '50',
			'expiration'    => '7200',

		);

		$cap = create_captcha($vals);
		$this->session->set_userdata('captcha', $cap['word']);
	

		$this->load->view('backend/login',$cap);
	}


	public function auth()
	{

			// Load the CAPTCHA helper
			$this->load->helper('captcha');

			$word = rand(1000, 9999);
	
			// CAPTCHA configuration
			$vals = array(
				'word'          => $word,
				'img_path'      => 'captcha_img/',
				'img_url'       => base_url() . 'captcha_img',
				'img_width'     => '100',
				'img_height'    => '50',
				'expiration'    => '7200',
	
			);
	
			$cap = create_captcha($vals);
			$this->session->set_userdata('captcha', $cap['word']);



		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == true) {
			// success
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$admin = $this->Admin_model->getByUsername($username,'admins');

			// check admin crendtials
			if (!empty($admin)) {

				if (password_verify($password, $admin['password']) == true) {
			
					// stores admin data
					$adminArray['admin_id'] = $admin['id'];
					$adminArray['username'] = $admin['username'];
					$this->session->set_userdata('admin', $adminArray);
					redirect(base_url() . 'admin/dashboard');

				} else {
					// incorrect password
					$this->session->set_flashdata('msg', 'Enter correct password ');
					$this->load->view('backend/login',$cap);
				}
			} else {
				$this->session->set_flashdata('msg', 'Enter correct username');
				$this->load->view('backend/login',$cap);
			}
		} else {
			// form errors
			$this->load->view('backend/login',$cap);
			// redirect(base_url('/login'));
		}
	}

	// public function logout(){
	// 	$this->session->unset_userdata('admin');
	// 	redirect(base_url() . 'admin/Login/index','refresh');
	// }


}
