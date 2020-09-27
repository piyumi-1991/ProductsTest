<?php 

class Model_seller extends CI_Model{

	function insertSellerData(){
		
		$data = array(
			'first_name' => $this->input->post('firstName', TRUE),
			'last_name' => $this->input->post('lastName', TRUE),
			'email' => $this->input->post('email', TRUE),
			'password' => sha1($this->input->post('password', TRUE))
		);
		
		return $this->db->insert('sellers', $data);
		// return false;

	}

	function loginSeller(){
		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$this->db->where('email', $email);
		$this->db->where('password', $password);

		$respond = $this->db->get('sellers');
		// print_r($respond->row(0));
		// die();
		if($respond->num_rows() == 1){
			// print_r($respond->row(0));die();
			return $respond->row(0);
			
		} else {
			// echo "error";die();
			return false;
		
		}
	}

}