<div class="container" style="margin-top:20px;">
	<div class="row">
		<div class="col-md-4">
		
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						Login Form
					</div>
				</div>
				<div class="panel-body">
					<?php 
						echo form_open("user/login",'id="loginform"');
					?>
						<div class="form-group">
							<?php echo form_input('email','','placeholder="Email" class="form-control"'); ?>
						</div>
						<div class="form-group">
							<?php echo form_password('password','','placeholder="Password" class="form-control"') ?>
						</div>
						<div class="form-group">
							<?php echo form_submit('loginbutton','Login','class="btn btn-info"') ?>
						</div>
					<?php 
						echo form_close();
					?>
				</div>
				<div class="panel-footer">
					New Users Sign Up <a href="<?php echo base_url();?>web/signup">Here</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		
		</div>
	</div>
</div>