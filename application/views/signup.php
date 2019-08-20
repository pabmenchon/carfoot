<body class="p-front p-signup-helper">

	<div class="p-front__content">	  
		<div class="p-signup">
			<form class="p-signup__form" method="post" action="<?php echo site_url('signup/new_user_registration'); ?>">
				<h2 class="p-signup__form-heading">SignUp</h2>
				<h3 class="p-signup__form-heading">
					<?php 
					echo validation_errors();
					if (isset($message_display)) {					
						echo $message_display;
					}?>
				</h3>
				<div class="p-signup__form-content">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="p-signup-name">User Name</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="User Name">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label for="p-signup-email">Email</label>
							<input type="email" class="form-control" id="useremail" name="useremail" placeholder="you@yourcompany.com">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label for="p-signup-set-password">Set Password</label>
							<input type="password" class="form-control" id="userpwd" name="userpwd" placeholder="Password (min 5 characters)">
						</div>
					</div>
					<div>
						<input type="submit" class="btn btn-info btn-block btn-lg p-signup__form-submit" value="Get Started!">
					</div>

					<div class="p-signup__form-links">
						<div class="p-signup__form-link">
							Already have an account? <a href="<?php echo base_url(); ?>signin" class="link-info">Sign In</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>