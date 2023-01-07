<?php
ini_set('display_errors', 0);
ini_set('display_startup_erros', 0);
error_reporting(E_ALL & ~ E_DEPRECATED);
include_once('../../../database/connection.php');

$post_id_url = $_SERVER['QUERY_STRING'];
$id = explode('=', $post_id_url)[1];

$query_row = "SELECT * FROM news WHERE id=$id LIMIT 1 ";
$execute = $con->query($query_row); 

$id; 
$title; 
$desc; 
$date; 
$img; 
$doc;

while ($line = $execute->fetch()){
    $id = $line['id'];
    $title = $line['titulo'];
    $desc = $line['desc_'];
    $date = $line['data_up'];
    $img = $line['caminho_img'];
    $doc = '../' . $line['caminho_doc'];
}

$content = file_get_contents($doc);

?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Notícias</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="main.css" />
		<link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
	</head>
	<body>
        <h1 style="margin-left:45%;">Noticia</h1>

			<section id="main">
				<div class="inner">
					<div class="image fit">
                        <?php echo "<img src='$img' alt='' srcset=''>";  ?>
					</div>
					<header>
						<h1><?php echo $title ?></h1>
						<p class="info"><?php echo $date; ?> <a href="#">Voltar</a></p>
					</header>
					<p><b><?php  echo $desc  ?></b> </p>
						<p>
                            <?php echo $content ?>
                        </p>
				</div>
			</section>

	
			<footer id="footer">
			
			</footer>

	

	</body>
</html>
