<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta value="1" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
	<title>Bonifacio Advocacia</title>
</head>
<body>
    <center>
    <h3>Feedback</h3><img src="https://img.icons8.com/cotton/50/000000/rocket.png" id="img_1"/>
    <form action="../../../models/QueryClasses/feedback.php" method="post">
    <div class="name">
        <label for="name">Seu nome: </label>
        <input type="text" name="name" id="name" placeholder="Digite seu nome" required title="Qual seu nome?">
    </div>
    <br>
    <br>
    <div class="txtA"><textarea name="message" title="Conte-nos mais" placeholder="Deixe-nos uma mensagem..." cols="30" rows="10" required id="msg"></textarea></div>  
    <br>
    <br>
    <div class="checkArea">
        <label>Deixe-nos uma nota: </label>
        <br>
        <br>
        <label for="grade1" title="Muito ruim">1</label>
        <input type="checkbox" name="v1" id="grade1" class="checkgoup">
        <label for="grade1" title="Ruim">2</label>
        <input type="checkbox" name="v2" id="grade2" class="checkgoup">
        <label for="grade1" title="Bom">3</label>
        <input type="checkbox" name="v3" id="grade3" class="checkgoup">
        <label for="grade1" title="Muito bom">4</label>
        <input type="checkbox" name="v4" id="grade4" class="checkgoup">
        <label for="grade1" title="Excelente">5</label>
        <input type="checkbox" name="v5" id="grade5" class="checkgoup">
    </div>
    <br>
    <br>
    <input type="submit" value="Enviar" onclick=" return enviar()">
    </form>
    </center>
</body>
</html>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript" src="script.js"></script>