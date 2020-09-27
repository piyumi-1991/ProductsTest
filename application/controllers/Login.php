<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function LoginSeller()
	{

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		
		if ($this->form_validation->run() == FALSE) {
            $this->load->view('Login');
        } else {
        	$this->load->model('Model_seller');
        	$result = $this->Model_seller->loginSeller();

        	if($result != false){
        		$user_data = array(
        			'id' => $result->id,
        			'first_name' => $result->first_name,
        			'last_name' => $result->last_name,
        			'email' => $result->email,
        			'loggedIn' => TRUE
        		);

        		$this->session->set_userdata($user_data);

        		$this->session->set_flashdata('welcome', 'Welcome back');
            	redirect('Admin/index');

        	} else {
        		$this->session->set_flashdata('errormsg', 'Wrong email and password');
            	redirect('Home/Login');
        	}
        }



	}

}