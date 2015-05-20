<!DOCTYPE html>

<html>
	<head>
		<title>Codeigniter</title>
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/bootstrapValidator.min.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrapValidator.min.js"></script>
		
		<script>
			$(document).ready(function() {
				$('#loginform').bootstrapValidator({
					
					fields: {
						name: {
							validators: {
								notEmpty: {
									message: 'The Name is required'
								}
							}
						},
						email: {
							validators: {
								notEmpty: {
									message: 'The Email is required'
								},
								emailAddress: {
									message: 'The value is not a valid email address'
								}
							}
						},
						password: {
							validators: {
								notEmpty: {
									message: 'The Password is required'
								}
							}
						},
						mobile: {
							validators: {
								notEmpty: {
									message: 'The Phone is required'
								}
							}
						}
					}
				});
			});
			</script>
	</head>
	<body>
	<nav class="navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>web">BACK BENCHERS CODING</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>web">HOME</a></li>
		<li><a href="<?php echo base_url(); ?>web/about">ABOUT</a></li>
		<li><a href="<?php echo base_url(); ?>web/login">LOGIN</a></li>
		<li><a href="<?php echo base_url(); ?>web/signup">SIGN UP</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>