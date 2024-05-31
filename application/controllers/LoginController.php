
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


		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == true) {

			// check captcha is same or not
			if($this->session->userdata('captcha') == $this->input->post('captcha')){

	
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
						redirect(base_url('login'));
				}
			} else {
				$this->session->set_flashdata('msg', 'Enter correct username');
				redirect(base_url('login'));
			}
		}else{
		
			$this->session->set_flashdata('msg', 'Enter correct captcha');
			redirect(base_url('login'));
		}
		} else {

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
	}

	public function logout(){
		$this->session->unset_userdata('admin');
		redirect(base_url('login'),'refresh');
	}


}
