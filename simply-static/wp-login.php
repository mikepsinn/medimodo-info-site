<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en-US">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Medimodo &lsaquo; Log In</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<script type='text/javascript' src='/wp-admin/load-scripts.php?c=0&amp;load%5B%5D=jquery-core,jquery-migrate&amp;ver=4.8.1'></script>
<script type='text/javascript' src='/wp-content/plugins/jetpack/modules/sso/jetpack-sso-login.js?ver=5.2.1'></script>
<link rel='stylesheet' href='/wp-admin/load-styles.php?c=0&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='simple-payments-css'  href='/wp-content/plugins/jetpack/modules/simple-payments/simple-payments.css?ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='genericons-css'  href='/wp-content/plugins/jetpack/_inc/genericons/genericons/genericons.css?ver=3.1' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack-sso-login-css'  href='/wp-content/plugins/jetpack/modules/sso/jetpack-sso-login.css?ver=5.2.1' type='text/css' media='all' />
			<style>
				.jetpack-sso .message {
					margin-top: 20px;
				}

				.jetpack-sso #login .message:first-child,
				.jetpack-sso #login h1 + .message {
					margin-top: 0;
				}
			</style>
		<meta name='robots' content='noindex,follow' />
	<meta name="viewport" content="width=device-width" />
	
<style>.login h1 a { background-image: url("/none");background-size: contain;min-height: 88px;width:auto;}#login {padding: 20px 0 0;}.login #nav a, .login #backtoblog a {color:!important;text-shadow:none;}</style>
<link rel="icon" href="https://i1.wp.com/medimodo.com/wp-content/uploads/2017/02/cropped-medimodo-icon-1024-transparent-vertical.png?fit=32%2C32&#038;ssl=1" sizes="32x32" />
<link rel="icon" href="https://i1.wp.com/medimodo.com/wp-content/uploads/2017/02/cropped-medimodo-icon-1024-transparent-vertical.png?fit=192%2C192&#038;ssl=1" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://i1.wp.com/medimodo.com/wp-content/uploads/2017/02/cropped-medimodo-icon-1024-transparent-vertical.png?fit=180%2C180&#038;ssl=1" />
<meta name="msapplication-TileImage" content="https://i1.wp.com/medimodo.com/wp-content/uploads/2017/02/cropped-medimodo-icon-1024-transparent-vertical.png?fit=270%2C270&#038;ssl=1" />
	</head>
	<body class="login login-action-login wp-core-ui  locale-en-us jetpack-sso jetpack-sso-form-display">
		<div id="login">
		<h1><a href="/" title="Medimodo" tabindex="-1">Medimodo</a></h1>
	
<form name="loginform" id="loginform" action="/wp-login.php" method="post">
	<p>
		<label for="user_login">Username or Email Address<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
			<div id="jetpack-sso-wrap">
			

			<div id="jetpack-sso-wrap__action">
				<a rel="nofollow" href="/wp-login.php?action=jetpack-sso" class="jetpack-sso button button-primary"><span><span class="genericon genericon-wordpress"></span> Log in with WordPress.com</span></a>
									<p>
						You can now save time spent logging in by connecting your WordPress.com account to Medimodo.					</p>
							</div>

							<div class="jetpack-sso-or">
					<span>Or</span>
				</div>

				<a href="/wp-login.php?jetpack-sso-show-default-form=1" class="jetpack-sso-toggle wpcom">
					Log in with username and password				</a>

				<a href="/wp-login.php?jetpack-sso-show-default-form=0" class="jetpack-sso-toggle default">
					Log in with WordPress.com				</a>
					</div>
			<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
		<input type="hidden" name="redirect_to" value="https://medimodo.com/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
	<a href="/wp-login.php?action=lostpassword">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

/**
 * Filters whether to print the call to `wp_attempt_focus()` on the login screen.
 *
 * @since 4.8.0
 *
 * @param bool $print Whether to print the function call. Default true.
 */
wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="/">&larr; Back to Medimodo</a></p>
	
	</div>

	
	<link rel='stylesheet' id='open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='/wp-content/plugins/jetpack/css/jetpack.css?ver=5.2.1' type='text/css' media='all' />
	<div class="clear"></div>
	</body>
	</html>
	