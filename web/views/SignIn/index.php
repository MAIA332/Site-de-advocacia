<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../styles/GlobalStyles.css">
	<link rel="stylesheet" href="../../components/Header/styles.css">
	<link rel="stylesheet" href="../../components/Footer/styles.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<<<<<<< HEAD
	<link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
	<title>Bonifacio Advocacia</title>
=======
>>>>>>> 1521dedae6163d939644937d8568264920533ba2
</head>
  <!-- MENU PARA TELAS PEQUENAS-->
  <div class="header">
    <a href="index.php" class="logo"><img src="web/images/logo.png"></a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
	<li><a href="../News/index.php">Noticias</a></li>
      <li><a href="../Services/index.php">Serviços</a></li>
      <li><a href="../Equip/index.php">Equipe</a></li>
      <li><a href="../Contact/index.php">Contato</a></li>
<<<<<<< HEAD
      <li><a href=<?php if($_SESSION['usuariolog'] != true){echo "../SignIn/index.php"; }else{echo "../Post/index.php";}?>><svg id="bold"  height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="10" r="2"/><path d="m6.67 13.4c-1.01.76-1.67 1.98-1.67 3.35v.25h-4.25c-.41 0-.75-.34-.75-.75v-.5c0-1.52 1.23-2.75 2.75-2.75h2.5c.52 0 1.01.15 1.42.4z"/><circle cx="20" cy="10" r="2"/><path d="m24 15.75v.5c0 .41-.34.75-.75.75h-4.25v-.25c0-1.37-.66-2.59-1.67-3.35.41-.25.9-.4 1.42-.4h2.5c1.52 0 2.75 1.23 2.75 2.75z"/><circle cx="12" cy="9.5" r="3"/><path d="m14.75 14h-5.5c-1.517 0-2.75 1.233-2.75 2.75v1.5c0 .414.336.75.75.75h9.5c.414 0 .75-.336.75-.75v-1.5c0-1.517-1.233-2.75-2.75-2.75z"/></svg></a></li>
=======
      <li><a href=<?php if($_SESSION['usuariolog'] != true){echo "../Signin/index.php"; }else{echo "../Post/index.php";}?>><svg id="bold"  height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="10" r="2"/><path d="m6.67 13.4c-1.01.76-1.67 1.98-1.67 3.35v.25h-4.25c-.41 0-.75-.34-.75-.75v-.5c0-1.52 1.23-2.75 2.75-2.75h2.5c.52 0 1.01.15 1.42.4z"/><circle cx="20" cy="10" r="2"/><path d="m24 15.75v.5c0 .41-.34.75-.75.75h-4.25v-.25c0-1.37-.66-2.59-1.67-3.35.41-.25.9-.4 1.42-.4h2.5c1.52 0 2.75 1.23 2.75 2.75z"/><circle cx="12" cy="9.5" r="3"/><path d="m14.75 14h-5.5c-1.517 0-2.75 1.233-2.75 2.75v1.5c0 .414.336.75.75.75h9.5c.414 0 .75-.336.75-.75v-1.5c0-1.517-1.233-2.75-2.75-2.75z"/></svg></a></li>
>>>>>>> 1521dedae6163d939644937d8568264920533ba2
    </ul>
    </div>
    <!-- =====================================================================================================-->
<body>
		<form action="php/send.php" method="post">
				<div class="limiter">
					<div class="container-login100">
						<div class="wrap-login100">
							<form class="login100-form validate-form">
								<span class="login100-form-title p-b-26">
									Login
								</span>
								<span class="login100-form-title p-b-48">
									<i class="zmdi zmdi-font"></i>
								</span>

								<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
									<input required class="input100" type="email" name="email">
									<span class="focus-input100" data-placeholder="Email"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Enter password">
									<span class="btn-show-pass">
										<i class="zmdi zmdi-eye"></i>
									</span>
									<input required class="input100" type="password" name="pass">
									<span class="focus-input100" data-placeholder="Password"></span>
								</div>

								<div class="container-login100-form-btn">
									<div class="wrap-login100-form-btn">
										<div class="login100-form-bgbtn"></div>
										<button class="login100-form-btn">
											Login
										</button>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
		</form>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>