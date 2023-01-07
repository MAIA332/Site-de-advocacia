<!DOCTYPE html>
<html>
<?php session_start();
ini_set('display_errors', 0);
ini_set('display_startup_erros', 0);
error_reporting(E_ALL & ~ E_DEPRECATED);

?>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../../components/Header/styles.css">
		<link rel="stylesheet" href="../../components/Footer/styles.css">
		<link rel="stylesheet" href="../../styles/GlobalStyles.css">
		<link href="css/style.css" rel="stylesheet">
		<link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
		<title>Bonifacio Advocacia</title>
	</head>
	
	<body>
	<header>
        <div>
                <div class="logo">
                    <img src="../../images/logo.png" alt="" srcset="">
                    <p>Bonifacio Advocacia</p>
                </div>
                <div class="header-pages">
                    <a href="../../../index.php">Home</a>
                </div>
                <div class="header-pages">
                    <a href="../../views/News/index.php">Notícias</a>
                </div>
                <div class="header-pages">
                    <a href="../../views/Services/index.php">Serviços</a>  
                </div>
                <div class="header-pages">
                    <a href="../../views/Equip/index.php">Equipe</a>
                </div>
                <div class="header-pages">
                    <a href="../../views/Contact/index.php">Contato</a>
                </div>
                <div class="header-pages" onclick="navigate()">
                    <a href=<?php if($_SESSION['usuariolog'] != true){echo "../SignIn/index.php"; }else{echo "../Post/index.php";}?>><svg id="bold"  height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="10" r="2"/><path d="m6.67 13.4c-1.01.76-1.67 1.98-1.67 3.35v.25h-4.25c-.41 0-.75-.34-.75-.75v-.5c0-1.52 1.23-2.75 2.75-2.75h2.5c.52 0 1.01.15 1.42.4z"/><circle cx="20" cy="10" r="2"/><path d="m24 15.75v.5c0 .41-.34.75-.75.75h-4.25v-.25c0-1.37-.66-2.59-1.67-3.35.41-.25.9-.4 1.42-.4h2.5c1.52 0 2.75 1.23 2.75 2.75z"/><circle cx="12" cy="9.5" r="3"/><path d="m14.75 14h-5.5c-1.517 0-2.75 1.233-2.75 2.75v1.5c0 .414.336.75.75.75h9.5c.414 0 .75-.336.75-.75v-1.5c0-1.517-1.233-2.75-2.75-2.75z"/></svg></a>
                </div>          <!-- MUDAR CAMINHO DO REDIRECIONAMENTO-->
        </div>
    </header>
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
      <li><a href=<?php if($_SESSION['usuariolog'] != true){echo "../Signin/index.php"; }else{echo "../Post/index.php";}?>><svg id="bold"  height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="10" r="2"/><path d="m6.67 13.4c-1.01.76-1.67 1.98-1.67 3.35v.25h-4.25c-.41 0-.75-.34-.75-.75v-.5c0-1.52 1.23-2.75 2.75-2.75h2.5c.52 0 1.01.15 1.42.4z"/><circle cx="20" cy="10" r="2"/><path d="m24 15.75v.5c0 .41-.34.75-.75.75h-4.25v-.25c0-1.37-.66-2.59-1.67-3.35.41-.25.9-.4 1.42-.4h2.5c1.52 0 2.75 1.23 2.75 2.75z"/><circle cx="12" cy="9.5" r="3"/><path d="m14.75 14h-5.5c-1.517 0-2.75 1.233-2.75 2.75v1.5c0 .414.336.75.75.75h9.5c.414 0 .75-.336.75-.75v-1.5c0-1.517-1.233-2.75-2.75-2.75z"/></svg></a></li>
    </ul>
    </div>
    <!-- =====================================================================================================-->
		<div class="wrapper">	
			<div class="banner">
				<div class="container">
					<div class="banner-content">
				
						<p>Conheça nossos serviços<br><p style="margin-left: 5%;">Bonifacio advocacia.</p></p>
					</div>
				</div>
			</div>
			
			
			<div class="feature">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							
							<div class="feature-item">
								
								<i class="fa fa-crosshairs"><img src="https://img.icons8.com/metro/26/000000/scales.png"/></i>
								
								<h4>Direito penal</h4>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do'nt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							
							<div class="feature-item">
								
								<i class="fa fa-sitemap"><img src="https://img.icons8.com/ios/50/000000/tie.png"/></i>
								
								<h4>Direito civil</h4>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do'nt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							
							<div class="feature-item">
								
								<i class="fa fa-terminal"><img src="https://img.icons8.com/ios/50/000000/work.png"/></i>
								
								<h4>Direito trabalhista</h4>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do'nt ut labore et dolore magna aliqua.</p>
							</div>
						</div>

						<div class="col-md-4 col-sm-4">
							
							<div class="feature-item">
								
								<i class="fa fa-crosshairs"><img src="https://img.icons8.com/material-outlined/64/000000/client-company.png"/></i>
								
								<h4>Direito empresarial</h4>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do'nt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							
							<div class="feature-item">
								
								<i class="fa fa-sitemap"><img src="https://img.icons8.com/ios/50/000000/greentech.png"/></i>
								
								<h4>Direito ambiental</h4>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do'nt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							
							<div class="feature-item">
								
								<i class="fa fa-terminal"><img src="https://img.icons8.com/dotty/80/000000/fingerprint.png"/></i>
								
								<h4>Direito digital</h4>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do'nt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="footer">
        <div class="container">
            <center>
                <div class="logo-content" style="color: var(--secondary); width: 100%; padding:12px 0;border-bottom:0.7px solid rgb(200,200,200,0.5);">
                    <img src="../../images/logo.png" style="padding: 15px 0;" alt="" srcset="">
                </div>
            </center>
            <div class="flex-footer">
                
                <div class="wrap-content">
                    <h4>Colaboradores</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tortor enim, adipiscing in semper a, pellentesque quis sem. Vivamus eu odio at tellus sollicitudin </p>
                </div>
                <div class="wrap-content">
                    <h4>Fique por dentro!</h4>
                    
                    <img src="../../images/insta.svg" style="width:20px;cursor:pointer;margin-left:8px;margin-right:8px;" alt="">
                    <img src="../../images/face.svg" style="width:20px;cursor:pointer;margin-left:8px;margin-right:8px;" alt="">
                    <img src="../../images/link.svg" style="width:20px;cursor:pointer;margin-left:8px;margin-right:8px;" alt="">
                </div>
                <div class="wrap-content">
                    <h4>Fale conosco</h4>
                    <a style=" color: var(--secondary);font-weight: lighter">nudlejobs@gmail.com</a>
                    <br>
                    <a style="color: var(--secondary); font-weight: lighter">(11) 94495-2003</a>
                </div>
            </div>
            <br>
            <br>
            <center>
            <p style="color: var(--secondary); font-weight: lighter;font-size:14px">Copyright © 2020 Bonifacio Advocacia. All rights reserved.</p>
            </center>
        </div>
    </section>
	</body>	
</html>