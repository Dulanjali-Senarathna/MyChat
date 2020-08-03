<!Doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Create New Account</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div class="signup-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign Up</h2>
				<p>Fill out this form and start chatting with your friends</p>	
            </div>
            <div class="form-group">
				<label>Username</label>
				<input type="text" name="name" class="form-control" placeholder="Example: dulanjali" autocomplete="off" required>
            </div>
            <div class="form-group">
				<label>Password</label>
				<input type="Password" class="form-control" name="user_pass" placeholder="Password" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" name="user_email" class="form-control" placeholder="someone@site.com" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Country</label>
                <select class="form-control" name="user_country" required>
                    <option disabled="">Select a Country</option>
                    <option>Sri Lanka</option>
                    <option>India</option>
                    <option>South Korea</option>
                    <option>China</option>
                    <option>Japan</option>
                    <option>England</option>
                </select>
                    </div>
                    
                    <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="user_gender" required>
                    <option disabled="">Select a Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                    
                </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#" >Terms of use</a> &amp; <a href="#">Privacy Policy</a></label>
                    </div>
			
				<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up
				</button>
            </div>
            <?php include("signup_user.php"); ?>	
		</form>
		<div class="text-center small" style="color: #ffffff;">
			Already have an account? <a href="signup.php" style="color:#ffffff">Sign In</a>
		</div>
	</div>
</body>
</html>