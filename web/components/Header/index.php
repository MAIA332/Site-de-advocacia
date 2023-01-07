<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php session_start();
    ini_set('display_errors', 0);
    ini_set('display_startup_erros', 0);
    error_reporting(E_ALL & ~ E_DEPRECATED);
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/GlobalStyles.css">
    <link rel="stylesheet" href="web/components/Header/styles.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div>
                <div class="logo">
                    <img src="web/images/logo.png" alt="" srcset="">
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
                    <a href=<?php if($_SESSION['usuariolog'] != true){echo "../../Signin/index.php"; }else{echo "../../Post/index.php";}?>><svg id="bold"  height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="10" r="2"/><path d="m6.67 13.4c-1.01.76-1.67 1.98-1.67 3.35v.25h-4.25c-.41 0-.75-.34-.75-.75v-.5c0-1.52 1.23-2.75 2.75-2.75h2.5c.52 0 1.01.15 1.42.4z"/><circle cx="20" cy="10" r="2"/><path d="m24 15.75v.5c0 .41-.34.75-.75.75h-4.25v-.25c0-1.37-.66-2.59-1.67-3.35.41-.25.9-.4 1.42-.4h2.5c1.52 0 2.75 1.23 2.75 2.75z"/><circle cx="12" cy="9.5" r="3"/><path d="m14.75 14h-5.5c-1.517 0-2.75 1.233-2.75 2.75v1.5c0 .414.336.75.75.75h9.5c.414 0 .75-.336.75-.75v-1.5c0-1.517-1.233-2.75-2.75-2.75z"/></svg></a>
                </div>          <!-- MUDAR CAMINHO DO REDIRECIONAMENTO-->
        </div>
    </header>
</body>
</html>