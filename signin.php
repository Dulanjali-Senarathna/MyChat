<!Doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Login to your account</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
	<div class="signin-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign In</h2>
				<p>Login to MyChat</p>	
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="someone@site.com" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="Password" class="form-control" name="pass" placeholder="Password" autocomplete="off" required>
			</div>
			<div class="small">Forgot password? <a href="forgot_pass.php">Click Here</a></div><br>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign in	
				</button>
			</div>	
		</form>
		<div class="text-center small" style="color: #ffffff;">
			Don't have an account? <a href="signup.php" style="color:#ffffff">Create one</a>
		</div>
	</div>
</body>
</html>