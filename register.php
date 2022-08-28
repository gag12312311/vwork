<?php
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
    session_start();
    if ($_SESSION['user']) {
        header('Location: ../profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Գրանցում</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="position: relative;">
				<a href="authorization.php" style="position: absolute;top: 50px;left: 50px;" title="Վերադառնալ մուտքի էջ">
					<img style="float: left;" src="../images/curve-arrow.png" alt="Վերադառնալ մուտքի էջ">
					<pre style="float: left;">  Վերադառնալ մուտքի էջ</pre>
				</a>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="components/signup.php" method="post">
					<span class="login100-form-title">
						Գրանցում
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name" placeholder="Անուն">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="psw" placeholder="Գաղտնաբառ մին. - 8 նիշ" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,40}" title="Գաղտնաբառը պետք է պարունակի ամեանապակասը 1-մեծատառ, 1-փոքրատառ եւ 1 թիվ">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="psw_check" placeholder="Կրկնել գաղտնաբառ" pattern=".{8,40}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="form_radio_group">
						<div class="form_radio_group-item">
							<input id="radio-1" type="radio" name="type" value="1" checked>
							<label for="radio-1">Աշխատատու</label>
						</div>
						<div class="form_radio_group-item">
							<input id="radio-2" type="radio" name="type" value="2">
							<label for="radio-2">Աշխատող</label>
						</div>
					</div>
					<?php
			            if ($_SESSION['message']) {
			                echo '<p>' . $_SESSION['message'] . ' </p>';
			            }
			            unset($_SESSION['message']);
			        ?>
					
					<div>
						<input type="submit" class="login100-form-btn submit" value="Գրանցվել">
					</div>

					

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>