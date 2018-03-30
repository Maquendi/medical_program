
 <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css")?>"/>
 <script src="<?php echo base_url("assets/js/jquery-3.3.1.js")?>"></script>
 <script src="<?php echo base_url("assets/js/bootstrap.js")?>"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/estilo/style.css")?>"/>

<style type="text/css">

  body{

  	
  }

</style>


<div class="container-fluid bg">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			
			<!-- form starts here -->

   <form class="form-conatiner" action="<?php echo base_url("index.php/Controlador/validate_form")?>" method="post">  

<!-- <?php// echo form_open_multipart("Controlador/validate_form");?> -->

  <div class="form-group">
    <label for="exampleInputEmail1"><h4>Email</h4></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <span class="text-danger">
    	<?php echo form_error('email')  ?>
    </span>


  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4>Password</h4></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    <span class="text-danger">
    	<?php echo form_error('password')  ?>
    </span>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"><h5>Remember me</h5></label>
  </div>
  <button type="submit" class="btn btn-success btn-block">Entrar</button>
  
  <h5 style="color: red">
  <?php
   echo $this->session->flashdata('error');
  ?>
  </h5>

</form>

<!-- <?php // echo form_close()?> -->



<!-- form Ends here -->

		</div>
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
</div>