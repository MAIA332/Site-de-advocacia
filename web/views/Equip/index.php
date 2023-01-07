<!DOCTYPE html>
<html lang="pt-br">
<?php session_start();
	ini_set('display_errors', 0);
	ini_set('display_startup_erros', 0);
	error_reporting(E_ALL & ~ E_DEPRECATED);

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
	<title>Bonifacio Advocacia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../../styles/GlobalStyles.css">
    <link rel="stylesheet" href="../../components/Header/styles.css">
    <link rel="stylesheet" href="../../components/Footer/styles.css">
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
                <div class="header-pages">
                    <a href=<?php if($_SESSION['usuariolog'] != true){echo "../SignIn/index.php"; }else{echo "../Post/index.php";}?>><svg id="bold"  height="32" viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="10" r="2"/><path d="m6.67 13.4c-1.01.76-1.67 1.98-1.67 3.35v.25h-4.25c-.41 0-.75-.34-.75-.75v-.5c0-1.52 1.23-2.75 2.75-2.75h2.5c.52 0 1.01.15 1.42.4z"/><circle cx="20" cy="10" r="2"/><path d="m24 15.75v.5c0 .41-.34.75-.75.75h-4.25v-.25c0-1.37-.66-2.59-1.67-3.35.41-.25.9-.4 1.42-.4h2.5c1.52 0 2.75 1.23 2.75 2.75z"/><circle cx="12" cy="9.5" r="3"/><path d="m14.75 14h-5.5c-1.517 0-2.75 1.233-2.75 2.75v1.5c0 .414.336.75.75.75h9.5c.414 0 .75-.336.75-.75v-1.5c0-1.517-1.233-2.75-2.75-2.75z"/></svg></a>
                </div>
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
<br>
<br>
<br>
<center>
    <section class="main-bg" style="margin-bottom: 1px ;">
                <div class="container">
                   
                            <div class="card-box">
                                   <center><img src="../../images/student.png" alt="Estudante" srcset=""></center>
                                   <br>
                                   <p>Junte-se a nós e conte com uma equipe esforçada, profissional e de qualidade.</p>
                                   <br>
                                   <a href="../Services/index.php">
                                   <input type="button" value="Acessar">
                                    </a>
                                </div>
                                <div class="card-box">
                                    <center><img src="../../images/site.png" alt="Websites" srcset=""></center>
                                    <br> 
                                    <p>Entre em contato e faça a sua solicitação, para analisarmos o seu caso.</p>
                                    <br>
                                    <a href="../Contact/index.php">
                                    <input type="button" value="Acessar">
                                    </a>
                                </div>
                                <div class="card-box">
                                    <center><img src="../../images/head.png" style="width: 100px; height: 150px; object-fit: cover;" alt="Linguagem de Programação" srcset=""></center>
                                    <br>
                                    <p>Veja a nossa Home e saiba um pouco mais sobre os nossos valores e ética.</p>
                                    <br>
                                    <a href="../../../index.php">
                                    <input type="button" value="Acessar">
                                    </a>
                                </div>    
                    </div>
                  </section></center>
            <section class="sobre-equipe">
                <div class="container" style="max-width: 1200px;">
                        <div class="equipe-container">
                                <div class="line-text">
                                        <div style="width:70px;">
                                            <h2>Equipe</h2>
                                           
                                        </div>
                                        <div class="avatar-box">
                                                <div id="pess" style="background-size: cover; background-color: #ccc; background-image: url('images/gian.jpg');" class="img-avatar">

                                                </div><div class="descricao-avatar"><h3>Gabrielly Bonifacio</h3><p style="word-break: normal; width: 80%;font-size:smaller;">17 anos, WebDesigner do site, estudante de Informática na Etec de Taboão; focado em banners, animações e tornar a interface mais amigável e fácil para o usuário de nossa plataforma.</p></div>
                                                    
                                                    
                                                
                                                
                                        </div>
                                        <div class="avatar-box">
                                                <div style="background-size: cover; background-color: #ccc; background-image: url('images/jose.jpg');" class="img-avatar">

                                                </div><div class="descricao-avatar"><h3>Aline Bonifacio</h3><p style="word-break: normal; width:80%;font-size:smaller;">16 anos, estudante de Informática na Etec de Taboão, Desenvolvedor FrontEnd do site, responsável pelas interações, animações e funcionamento da página na parte Client-side.</p></div>
                                                    
                                                    
                                                
                                                
                                        </div>
                                        <div class="avatar-box">
                                                <div style="background-size: cover; background-color: #ccc; background-image: url('images/leonardo.jpeg');" class="img-avatar">

                                                </div><div class="descricao-avatar"><h3>Nome de membro</h3><p style="word-break: normal; width: 80%; font-size: smaller;">16 anos, estudante de Informática na Etec de Taboão, Desenvolvedor BackEnd do site, responsável pela conexão ao banco de dados, dando apoio na parte do FrontEnd</p></div>
                                                    
                                                    
                                                
                                                
                                        </div>
                                        <div class="avatar-box">
                                            <div style="background-size: cover; background-color: #ccc; background-image: url('images/luigi.jpeg');" class="img-avatar">

                                            </div><div class="descricao-avatar"><h3>Nome de membro</h3><p style="word-break: normal; width: 80%; font-size: smaller;">16 anos, estudante de Informática na Etec de Taboão, Desenvolvedor BackEnd do site, responsável pela conexão ao banco de dados, dando apoio na parte do FrontEnd</p></div>
                                        
                                        
                                        
                                    
                                    
                            </div>
                                </div>
                        </div>
                        <div class="sobre-container">
                                <div class="line-text">
                                        <div style="width:30px;"></div>
                                            <h2>Sobre</h2>
                                            <p style="font-size:small;">Bonifacio Advocacia é uma empresa que presta serviços de advocacia e direito, criada em mês de 2020 a partir de um projeto complementa aqui, o intuito sempre foi transmitir segurança e um bom serviço aos clientes, através da transparênncia, tecnologia, compromisso e estudo ativo dos casos e necessidades. Com isso a nossa equipe desenvolveu esse site, afim de cumprir os objetivos propostos; entre eles, facilitar a comunicação, agendamento e repasse de informações ao nosso público, e as inovações técnológicas, visto que a área de direito é muito séria, extensa, porém mesmo assim os clientes encontram dificuldades. Portanto, buscamos ser uma opção relevante e qualificada no mercado, para desempenharmos nosso papel de maneira eficiente e prática.            </p>
                                            <p style="font-size: small;">Somos uma equipe pequena, composta por advogados, assistentes, estudantes e ofiicias da área, e contamos com alguns colaboradores para apoiar o projeto, facilitando o desenvolvimento de nossas atividades. O portal Bonifacio Advocacia é um canal da web ativo, de constante produção de conteúdo e atualizações, com isso forma-se uma rede de conhecimento para o usuário. No nosso site, para gerarmos o conteúdo contamos com uma plataforma segura, rápida e prática, possibilitando assim todas que as operações desejadas sejam realizadas.
                                            </p>
                                            <br>
                                            <br>
                                            <img src="../../images/boutus.png" alt="" srcset="" style="max-width: 100%;">
                                        
                                </div>
                        </div>
                </div>

            </section>
            </div>

                          <section class="paralax">
                              <div class="container">
                                  <h2 class="chamada-paralax">Bonifacio Advocacia</h2>
                                  <p>Frase de efeito e slogan colocar aqui bla ahbhd  . Acompanhe as nossas <a href="reviews.html">notícias.</a></p>
                                  
                              </div>
                          </section>

            <section class="sobre__final">
              <div class="container">
                <div class="w50">
                    <div class="line-text">
                        <h2>Planejamento</h2>
                    </div>
                    <div class="card-text">
                        <img src="../../images/objetivos.jpg" alt="" srcset="" id="obj">
                        <h3>Objetivos do projeto</h3>
                    </div>
                </div>
                <div class="w50">
                  
                  <div class="line-text">
                    <h2>Objetivos</h2>
               
              </div>
                <p style="line-height: 25px;">Como empresa temos o objetivo de instruir e transmitir informação, passando para o nosso usuário diversas oportunidades e avaliações de mercado, como cursos, marketing digital, novidades e notícias sobre a área da tecnologia em geral, porém, especificamente sobre o mundo da programação. </p>
                <p style="line-height: 25px;"> Isso tudo, pretendemos fazer através de nosso portal, que é constantemente atualizado, e foi modelado com as técnicas de UX e UI, para uma melhor e mais confortável experiência de navegação do usuário. No mundo globalizado, em que vivemos, é essencial entender o funcionamento e benefício das novas tecnologias, e saber se utilizar delas para benefício próprio e/ou coletivo. </p>
                </div>
                  <div class="clear">
                  </div>
              </div>
            </section>
            <br>
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