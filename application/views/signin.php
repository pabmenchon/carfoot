<body class="p-front">

	<div class="p-front__content">	  
		<div class="p-signin">
			<form class="p-signin__form" method="post" action="<?php echo site_url('signin/user_login_process'); ?>">
				<h2 class="p-signin__form-heading">Login</h2>
				<h3 class="p-signin__form-heading">
					<?php
						if (isset($error_message)) {
							echo $error_message;
						}
						echo validation_errors();
					?>
				</h3>
				<div class="p-signin__form-content">
					<div class="row">
						<div class="form-group col-md-12">
							<label for="p-signin-work-email">Work Email</label>
							<input type="email" class="form-control" id="useremail" name="useremail" placeholder="you@yourcompany.com">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label for="p-signin-set-password">Password</label>
							<input type="password" class="form-control" id="userpwd" name="userpwd" placeholder="Password">
						</div>
					</div>
					<div>
						<button type="submit" class="btn btn-info btn-block btn-lg p-signin__form-submit">Get Started!</button>
					</div>
					<div class="p-signin__form-links">
						<div class="p-signin__form-link">
							Don't have an account? <a href="<?php echo base_url(); ?>signup" class="link-info">Sign Up</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>