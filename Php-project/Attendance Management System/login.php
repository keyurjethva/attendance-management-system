<div class="about-header">
	<nav class="navbar navbar-expand-lg navbar-light fixed-top p-1">
		<div class="container text-uppercase">
			<a class="navbar-brand text-white fs-3" href="index.php">Attendance Management System</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-3 mb-lg-1">
					<li class="nav-item">
						<a class="nav-link active " aria-current="page" href="#">
							<i class="fas fa-sign-in-alt" style="color: green;">HI;</i></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>



<?php

if (isset($_POST['login'])) {
	//start of try block

	try {

		//checking empty fields
		if (empty($_POST['username'])) {
			throw new Exception("Username is required!");
		}
		if (empty($_POST['password'])) {
			throw new Exception("Password is required!");
		}
		//establishing connection with db and things
		include('connect.php');

		//checking login info into database
		$row = 0;
		$result = mysqli_query($conn, "select * from admininfo where username='$_POST[username]' and password='$_POST[password]' and type='$_POST[type]'");

		$row = mysqli_num_rows($result);

		if ($row > 0 && $_POST["type"] == 'teacher') {
			session_start();
			$_SESSION['name'] = "oasis";
			header('location: teacher/index.php');
		} else if ($row > 0 &&  $_POST["type"] == 'student') {
			session_start();
			$_SESSION['name'] = "oasis";
			header('location: student/index.php');
		} else if ($row > 0 && $_POST["type"] == 'admin') {
			session_start();
			$_SESSION['name'] = "oasis";
			header('location: admin/index.php');
		} else {
			throw new Exception("Username,Password or Role is wrong, try again!");

			header('location: login.php');
		}
	}

	//end of try block
	catch (Exception $e) {
		$error_msg = $e->getMessage();
	}
	//end of try-catch
}

?>
<!DOCTYPE html>
<html>

<head>

	<title>Attendance Management System</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="styles.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
	<center>


		<div class="px-5 py-5 my-5 text-center">
			<img class="d-block mx-auto mb-1" src="img/draw2.webp" alt="" width="200" height="150">
			<h1 class="display-4 fw-bold">Attendance Management System</h1>
			<br>
			<h2>Login Panel</h2>
		</div>
		</div>

		<?php
		//printing error message
		if (isset($error_msg)) {
			echo $error_msg;
		}
		?>
		<div class="content">

			<div class="row">

				<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
					<div class="form-group">
						<label for="input1" class="col-sm-3 control-label fs-4">Username :</label>
						<div class="col-sm-7">
							<input type="text" name="username" class="form-control" id="input1" placeholder="Your Username" />
						</div>
					</div>

					<div class="form-group">
						<label for="input1" class="col-sm-3 control-label fs-4">Password :</label>
						<div class="col-sm-7">
							<input type="password" name="password" class="form-control" id="input1" placeholder="Your Password" />
						</div>
					</div>

					<div class="form-group" class="radio">
						<label for="input1" class="col-sm-3 control-label fs-4 ">Login As :</label>
						<div class="col-sm-6 fs-5 p-2">
							<label>
								<input type="radio" name="type" id="optionsRadios1" value="student" checked> Student
							</label>
							<label>
								<input type="radio" name="type" id="optionsRadios1" value="teacher"> Teacher
							</label>
							<label>
								<input type="radio" name="type" id="optionsRadios1" value="admin"> Admin
							</label>
						</div>
					</div>


					<input type="submit" class="btn btn-primary col-md-3 col-md-offset-7 fs-4" style="border-radius:0%" value="Login" name="login" /><br><br><br>
					<p class="col-md-3 col-md-offset-7 text-end fs-6"><strong><a href="reset.php" style="text-decoration:none;">Reset Password</a></strong></p>
					<p class="col-md-3 col-md-offset-7 text-end fs-6" ><strong><a href="signup.php" style="text-decoration:none;">Create New Account</a></strong></p>

				</form>
			</div>
		</div>
	</center>
</body>

</html>