<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function RegisterSeller()
	{
		
		$this->form_validation->set_rules('firstName', 'First Name', 'required');
		$this->form_validation->set_rules('lastName', 'lastName', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[sellers.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]');
		
		if ($this->form_validation->run() == FALSE) {
            $this->load->view('Register');
        } else {
        	
            $this->load->model('Model_seller');
            $response = $this->Model_seller->insertSellerData();

            if($response){
            	$this->session->set_flashdata('msg', 'Registered Successfully, Please Login');
            	redirect('Home/Register');
            } else {
            	$this->session->set_flashdata('msg', 'Something went wrong..');
            	redirect('Home/Register');
            }
        }

		
	}

	
}