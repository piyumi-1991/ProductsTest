<?php include 'partials/header.php'  ?>

<div class="container">
	<h2>Register Seller</h2>

<?php if($this->session->flashdata('msg')){
	echo "<h3>" . $this->session->flashdata('msg') . "</h3>";
} ?>
<hr>

<?php echo validation_errors(); ?>
<?php echo form_open('Register/RegisterSeller'); ?>

	<!-- <form action="" method="post"> -->
	  <div class="form-group">
	    <label for="">First Name</label>
	    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
	  </div>
	  <div class="form-group">
	    <label for="">Last Name</label>
	    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Confirm Password</label>
	    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	<!-- </form> -->
	<?php echo form_close(); ?>
</div>

<?php include 'partials/footer.php'  ?>