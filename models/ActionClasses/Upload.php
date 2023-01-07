<?php

include_once('../../database/connection.php');

$titulo = $_POST['titulo'];
$url_img= $_POST['imagem-url'];
$descricao= $_POST['descricao'];

//  ======================================Pasta onde o arquivo vai ser salvo ======================================
$_UP['pasta'] = '../../tmp/uploads/';
 
// ====================================== Tamanho máximo do arquivo (em Bytes) ======================================
$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
 
// ====================================== Array com as extensões permitidas ======================================
$_UP['extensoes'] = array('txt');
 
//  ======================================Renomeia o arquivo? (Se true, o arquivo será salvo como .txt e um nome único) ======================================
$_UP['renomeia'] = false;
 
//  ======================================Array com os tipos de erros de upload do PHP ======================================
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 
// ====================================== Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro ======================================
if ($_FILES['arquivo']['error'] != 0) {
die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
exit; // Para a execução do script
}
 
 
// ======================================Faz a verificação da extensão do arquivo ======================================
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif ou txt";
}
 
// ====================================== Faz a verificação do tamanho do arquivo ======================================
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
}
 
else {
//  ======================================Primeiro verifica se deve trocar o nome do arquivo ======================================
if ($_UP['renomeia'] == true) {
//  ======================================Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .txt ======================================
$nome_final = time().'.txt';
} else {
//  ======================================Mantém o nome original do arquivo ======================================
$nome_final = $_FILES['arquivo']['name'];
}
 


//  ======================================Depois verifica se é possível mover o arquivo para a pasta escolhida ======================================
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
    try{
        $diretorio = $_UP['pasta'] . $nome_final;
        $data = new DateTime();
        $sys_data = $data->format('d-m-Y H:i:s'); 
        $stmt = $con->query("INSERT INTO news (titulo, desc_, caminho_img, caminho_doc, data_up) VALUES ('$titulo', '$descricao', '$url_img', '$diretorio', '$sys_data')"); // chama a funcão do banco para inserir noticias
        echo "Upload efetuado com sucesso!";

        echo '<br /><a href="' . $diretorio . '">Clique aqui para acessar o arquivo</a>';
    }
    catch(PDOException $e){
        echo $e-> getMessage();
    }

} else {
echo "Não foi possível enviar o arquivo, tente novamente";
}
 
}

 
?>


