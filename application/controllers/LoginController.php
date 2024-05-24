
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{


	public function index()
	{
	// 	 echo password_hash('admin',PASSWORD_DEFAULT);

		$this->load->view('backend/login');
	}


	public function auth()
	{

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
					$this->load->view('backend/login');
				}
			} else {
				$this->session->set_flashdata('msg', 'Enter correct username');
				$this->load->view('backend/login');
			}
		} else {
			// form errors
			$this->load->view('backend/login');
			// redirect(base_url('/login'));
		}
	}

	// public function logout(){
	// 	$this->session->unset_userdata('admin');
	// 	redirect(base_url() . 'admin/Login/index','refresh');
	// }


}
