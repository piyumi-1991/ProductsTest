	<?php 
	if($this->session->flashdata('welcome')){
		echo "<h3>" . $this->session->flashdata('welcome') . "</h3>";
	}

	echo $this->session->userdata('first_name') . " " .  $this->session->userdata('last_name'); ?>