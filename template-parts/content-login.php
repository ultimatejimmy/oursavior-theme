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
					<h3>Have an account?</h3>
					<p>Log in or sign up! It’s fast &amp; free!</p>
					<?php echo do_shortcode( '[profilepress-login id="1"]' ); ?>
				</div>
				<div id="tab2_login" class="tab_content_login" style="display:none;">
					<h3>Register for this site!</h3>
					<p>Sign up now for the good stuff.</p>
					<?php echo do_shortcode( '[profilepress-registration id="1"]' ); ?>
				</div>
				<div id="tab3_login" class="tab_content_login" style="display:none;">
					<h3>Lose something?</h3>
					<?php echo do_shortcode( '[profilepress-password-reset id="1"]' ); ?>
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