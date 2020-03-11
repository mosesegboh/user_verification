<?php
require_once 'controllers/authController.php';
?>

<!DOCTYPE html>
<html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Reset Your Password</title>
</head>
<body>
	<div class= "container">
		<div class = "row">
			<div class = "col-md-4 offset-md-4 form-div login">
				<form action="reset_password.php" method="POST">
					<h3 class ="text-center">Reset Password</h3>
						
						<?php if(count($errors) > 0): ?>
								<div class="alert alert-danger">
									<?php foreach($errors as $errors): ?>
										<li><?php echo $errors; ?></li>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>

						<div class = "form-group">
							<label for="password">Password:</label>
							<input type = "password" name="password" class="form-control form-control-lg">
						</div>


						<div class = "form-group">
							<label for="password">Password:</label>
							<input type = "password" name="passwordConf" class="form-control form-control-lg">
						</div>
						<div class = "form-group">
							<button type="submit" name="reset-password-btn" class="btn btn-primary btn-block btn-lg">Reset Password</button>
						</div>	
						
				</form>		
			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
