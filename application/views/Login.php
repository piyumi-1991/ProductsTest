<?php include 'partials/header.php'  ?>



<div class="container">
	<h2>Login</h2>
	<?php if($this->session->flashdata('errormsg')){
		echo "<h3>" . $this->session->flashdata('errormsg') . "</h3>";
	} ?>
<hr>

	<?php echo validation_errors(); ?>
	<?php echo form_open('Login/LoginSeller'); ?>

	  <div class="form-group">
	    <label for="">Email address</label>
	    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label for="">Password</label>
	    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	<?php echo form_close(); ?>
</div>



<?php include 'partials/footer.php'  ?>