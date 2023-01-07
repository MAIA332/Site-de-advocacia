<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php

session_start();
ini_set('display_errors', 0);
ini_set('display_startup_erros', 0);
error_reporting(E_ALL & ~ E_DEPRECATED);
include_once('./database/connection.php');

$loged = '';

if(isset($_SESSION['usuariolog'])){
    $loged = $_SESSION['usuariolog'];
}

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web/styles/GlobalStyles.css">
    <link rel="stylesheet" href="web/components/Footer/styles.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="web/images/favicon.ico">

    <title>Bonifacio Advocacia</title>
</head>
<body>
<script>
        function navigate(){
            window.location.assign('web/views/Contact/index.php');
        }
    </script>
    <header>
<div>
        <div class="logo">
            <img src="web/images/logo.png" alt="" srcset="">
            <p>Bonifacio Advocacia</p>
        </div>
        <div class="header-pages">
            <a href="index.php">Home</a>
        </div>
        <div class="header-pages">
            <a href="web/views/News/index.php">Notícias</a>
        </div>
        <div class="header-pages">
            <a href="web/views/Services/index.php">Serviços</a>  
        </div>
        <div class="header-pages">
            <a href="web/views/Equip/index.php">Equipe</a>
        </div>
        <div class="header-pages">
            <a href="web/views/Contact/index.php">Contato</a>
        </div>
        <div class="header-pages">
            <a href=<?php if($loged != true){echo "web/views/SignIn/index.php"; }else{echo "web/views/Post/index.php";}?>><svg id="bold"  height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="10" r="2"/><path d="m6.67 13.4c-1.01.76-1.67 1.98-1.67 3.35v.25h-4.25c-.41 0-.75-.34-.75-.75v-.5c0-1.52 1.23-2.75 2.75-2.75h2.5c.52 0 1.01.15 1.42.4z"/><circle cx="20" cy="10" r="2"/><path d="m24 15.75v.5c0 .41-.34.75-.75.75h-4.25v-.25c0-1.37-.66-2.59-1.67-3.35.41-.25.9-.4 1.42-.4h2.5c1.52 0 2.75 1.23 2.75 2.75z"/><circle cx="12" cy="9.5" r="3"/><path d="m14.75 14h-5.5c-1.517 0-2.75 1.233-2.75 2.75v1.5c0 .414.336.75.75.75h9.5c.414 0 .75-.336.75-.75v-1.5c0-1.517-1.233-2.75-2.75-2.75z"/></svg></a>
        </div>          <!-- MUDAR CAMINHO DO REDIRECIONAMENTO-->
</div>

    </header>
    <!-- MENU PARA TELAS PEQUENAS-->
    <div class="header">
    <a href="index.php" class="logo"><img src="web/images/logo.png"></a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
      <li><a href="web/views/News/index.php">Noticias</a></li>
      <li><a href="web/views/Services/index.php">Serviços</a></li>
      <li><a href="web/views/Equip/index.php">Equipe</a></li>
      <li><a href="web/views/Contact/index.php">Contato</a></li>
      <li><a href=<?php if($_SESSION['usuariolog'] != true){echo "web/views/SignIn/index.php"; }else{echo "web/views/Post/index.php";}?>><svg id="bold"  height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="10" r="2"/><path d="m6.67 13.4c-1.01.76-1.67 1.98-1.67 3.35v.25h-4.25c-.41 0-.75-.34-.75-.75v-.5c0-1.52 1.23-2.75 2.75-2.75h2.5c.52 0 1.01.15 1.42.4z"/><circle cx="20" cy="10" r="2"/><path d="m24 15.75v.5c0 .41-.34.75-.75.75h-4.25v-.25c0-1.37-.66-2.59-1.67-3.35.41-.25.9-.4 1.42-.4h2.5c1.52 0 2.75 1.23 2.75 2.75z"/><circle cx="12" cy="9.5" r="3"/><path d="m14.75 14h-5.5c-1.517 0-2.75 1.233-2.75 2.75v1.5c0 .414.336.75.75.75h9.5c.414 0 .75-.336.75-.75v-1.5c0-1.517-1.233-2.75-2.75-2.75z"/></svg></a></li>
    </ul>
    </div>
    <!-- =====================================================================================================-->
    <br><br><br>
        <section class="banner">
            <div class="cover">
                <div class="banner-text">
                    <p id="title">
                        Slogan/ Lema/ Frase de Efeito aqui
                    </p>
                    <p id="desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tortor enim, adipiscing in semper a, pellentesque quis sem. Vivamus eu odio at tellus sollicitudin viverra. Sed dignissim molestie imperdiet. Nulla sit amet tortor eu nisl vestibulum dignissim. Donec scelerisque vulputate tortor, non dapibus massa molestie at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                    </p>
                </div>
            </div>
        </section>
        <br>
        <br>
        <center>
        <div class="container-2">
            <h2 align=center style="font-weight: 500">Áreas de atuação</h2>
            <section class="show">
                <div class="group">
                    <h4 style="font-weight: 500">Direito Penal</h4>
                </div>
                <div class="group">
                    <h4 style="font-weight: 500">Direito Civil</h4>
                </div>
            </section>
            <section class="show">
                <div class="group">
                    <h4 style="font-weight: 500">Direito Trabalhista</h4>
                </div>
                <div class="group">
                    <h4 style="font-weight: 500">Direito Empresarial</h4>
                </div>
            </section>
        </div>
        </section>
        <section class="body-imi">
        <div class="container">
            <div class="flex-card">
                <div class="card">
                    <h3 align=center>
                        Conheça nossos serviços.
                    </h3>
                    <div id="S" align=center>
                        <img src= "web/images/headphones.png">
                    </div>
                    <br>
                    <button class="redirect" ><a href="web/views/Services/index.php">Serviços</a></button>
                </div>
                <div class="card">
                    <h3 align=center>
                        Acompanhe as notícias.
                    </h3>
                    <div id="N" align=center>
                        <img src= "web/images/interview.png" >
                    </div>
                    <br>
                    <button class="redirect" ><a href="web/views/News/index.php">Notícias</a></button>
                </div>
                <div class="card">
                    <h3 align=center>
                        Veja a nossa equipe.
                    </h3>
                    <div id="E" align=center>
                        <img src= "web/images/group.png">
                    </div>
                    <br>
                    <button class="redirect" ><a href="web/views/Equip/index.php">Equipe</a></button>
                </div>
            </div>
        </div>  <!--undraw.co-->
        </section>
        <div class="container">
            <section class="descricao-danki3">
            <div class="container">
                <div class="box-depoimento">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tortor enim, adipiscing in semper a, pellentesque quis sem. Vivamus eu odio at tellus sollicitudin viverra. Sed dignissim molestie imperdiet. Nulla sit amet tortor eu nisl vestibulum dignissim.                    
                    </p>
                    <br>
                    <a style="font-size:18px;text-decoration:none;" href="web/views/Contact/index.php">Entre em contato</a>
                    
                </div>
            </div>
        </section>
    </div>
    <br>
    <a href="./web/views/Feedback/index.php" align="center" style="font-weight:bold; font-size: 17px">Faça também a sua avaliação!</a>
    <div class="flex-grades">
    <?php

        $raw = "SELECT name, grade, message FROM feedback WHERE grade>=4";
        $get_data = $con->query($raw);
        while($line = $get_data->fetch()){
            $name = $line['name'];
            $grade = $line['grade'];
            $message = $line['message'];
            
            if($grade==5){
                echo 
                "
                    <div class='grades'>
                        <h5>$name</h5>
                        <img src='https://www.prosthodontics.org/assets/1/7/5-Star.png' alt='5 estrelas' srcset=''>
                        <div class='nowrap'>
                            <p>
                                $message
                            </p>
                        </div>
                    </div>
                ";
            }
            else{
                echo 
                "
                    <div class='grades'>
                        <h5>$name</h5>
                        <img src='https://www.prosthodontics.org/assets/1/7/4-Star.png' alt='5 estrelas' srcset=''>
                        <div class='nowrap'>
                            <p>
                                $message
                            </p>
                        </div>
                    </div>
                ";
            }
        }


    ?>
        
    </div>
    <br>
    <section class="footer">
        <div class="container">
            <center>
                <div class="logo-content" style="color: var(--secondary); width: 100%; padding:12px 0;border-bottom:0.7px solid rgb(200,200,200,0.5);">
                    <img src="web/images/logo.png" style="padding: 15px 0;" alt="" srcset="">
                </div>
            </center>
            <div class="flex-footer">
                
                <div class="wrap-content">
                    <h4>Colaboradores</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tortor enim, adipiscing in semper a, pellentesque quis sem. Vivamus eu odio at tellus sollicitudin </p>
                </div>
                <div class="wrap-content">
                    <h4>Fique por dentro!</h4>
                    
                    <img src="web/images/insta.svg" style="width:20px;cursor:pointer;margin-left:8px;margin-right:8px;" alt="">
                    <img src="web/images/face.svg" style="width:20px;cursor:pointer;margin-left:8px;margin-right:8px;" alt="">
                    <img src="web/images/link.svg" style="width:20px;cursor:pointer;margin-left:8px;margin-right:8px;" alt="">
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