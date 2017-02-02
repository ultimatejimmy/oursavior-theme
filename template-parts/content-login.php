<?php $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
	if ( $login === "failed" ) {
	  echo '<p class="login-msg"><strong>ERROR:</strong> Invalid username and/or password.</p>';
	} elseif ( $login === "empty" ) {
	  echo '<p class="login-msg"><strong>ERROR:</strong> Username and/or Password is empty.</p>';
	} elseif ( $login === "false" ) {
	  echo '<p class="login-msg"><strong>ERROR:</strong> You are logged out.</p>';
	} 
?>
	<div id="login-register-password">
		<?php global $user_ID, $user_identity; get_currentuserinfo(); 
		if (!$user_ID) { ?>
			<ul class="tabs_login">
				<li class="active_login"><a id="tab1_login">Login</a></li>
				<li><a id="tab2_login">Register</a></li>
				<li><a id="tab3_login">Forgot?</a></li>
			</ul>
			<div class="tab_container_login">
				<div id="tab1_login" class="tab_content_login">
					<?php $register = $_GET['register']; $reset = $_GET['reset']; if ($register == true) { ?>
						<h3>Success!</h3>
						<p>Your registration is waiting to be approved by the administrator. You will receive an email with further instructions upon approval.</p>
						<?php } elseif ($reset == true) { ?>
							<h3>Success!</h3>
							<p>Check your email to reset your password.</p>
							<?php } else { ?>
								<h3>Have an account?</h3>
								<p>Log in or sign up! It&rsquo;s fast &amp; <em>free!</em></p>
								<?php } ?>
									<?php wp_login_form(); ?>
				</div>
				<div id="tab2_login" class="tab_content_login" style="display:none;">
					<h3>Register for this site!</h3>
					<p>Sign up now for the good stuff.</p>
					<p>Your registration will sent to the site administrator for approval.</p>
					<p></p>
					<form method="post" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" class="wp-user-form">
						<div class="username login_row">
							<label for="user_login">
								<?php _e('Username'); ?>: </label>
							<br>
							<input type="text" name="user_login" value="<?php echo esc_attr(stripslashes($user_login)); ?>" id="user_login" tabindex="101" required /> </div>
						<div class="email login_row">
							<label for="user_email">
								<?php _e('Your Email'); ?>: </label>
							<br>
							<input type="text" name="user_email" value="<?php echo esc_attr(stripslashes($user_email)); ?>" id="user_email" tabindex="102" required /> </div>
						<div class="login_fields login_row">
							<?php do_action('register_form'); ?>
								<input type="submit" name="user-submit" value="<?php _e('Sign up!'); ?>" class="user-submit" tabindex="103" />
								<?php $register = $_GET['register']; if($register == true) { echo '<p>Check your email for the password!</p>'; } ?>
									<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?register=true" />
									<input type="hidden" name="user-cookie" value="1" /> </div>
					</form>
				</div>
				<div id="tab3_login" class="tab_content_login" style="display:none;">
					<h3>Lose something?</h3>
					<p>Enter your username or email to reset your password.</p>
					<form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" class="wp-user-form">
						<div class="username login_row">
							<label for="user_login" class="hide">
								<?php _e('Username or Email'); ?>: </label>
							<input type="text" name="user_login" value="" size="20" id="user_login" tabindex="1001" /> </div>
						<div class="login_fields login_row">
							<?php do_action('login_form', 'resetpass'); ?>
								<input type="submit" name="user-submit" value="<?php _e('Reset my password'); ?>" class="user-submit" tabindex="1002" />
								<?php $reset = $_GET['reset']; if($reset == true) { echo '<p>A message will be sent to your email address.</p>'; } ?>
									<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?reset=true" />
									<input type="hidden" name="user-cookie" value="1" /> </div>
					</form>
				</div>
			</div>
			<?php } else { // is logged in ?>
				<div class="sidebox">
					<h3>Welcome, <?php echo $user_identity; ?></h3>
					<div class="usericon">
						<?php global $userdata; get_currentuserinfo(); echo get_avatar($userdata->ID, 60); ?>
					</div>
					<div class="userinfo">
						<p>You&rsquo;re logged in as <strong><?php echo $user_identity; ?></strong></p>
						<p> <a href="<?php echo wp_logout_url('index.php'); ?>">Log out</a> |
							<?php if (current_user_can('manage_options')) { 
					echo '<a href="' . admin_url() . '">' . __('Admin') . '</a>'; } else { 
					echo '<a href="' . admin_url() . 'profile.php">' . __('Profile') . '</a>'; } ?> </p>
					</div>
				</div>
				<?php } 	?>
	</div>