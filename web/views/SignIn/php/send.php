<?php

$email_ = $_POST['email'];
$senha_ = $_POST['pass'];

session_start();
$senha_ = $_POST['senha'];


    function Login($email, $password)
    {
        include('../../../../database/connection.php');

        $enc_pass = generate_hash($password);

        $pdo=$con;
        $stmt = $pdo->prepare("SELECT * FROM user_ WHERE email = ? AND senha = ?");
        $stmt->bindparam(1, $email, PDO::PARAM_STR);
        $stmt->bindparam(2, $enc_pass, PDO::PARAM_STR);

        // Executando statement
        $stmt->execute();

        // Obter linha consultada
        $obj = $stmt->fetchObject();

        // Se a linha existe: verificar se a session existe e encaminhar
        if ($obj) {
        $_SESSION['usuariolog'] = true;
        $nome= $obj->nome;
        $_SESSION['user'] = $nome;
        header('Location: ../../Post/index.php'); // mudar o local de redirecionamento
        }

        
    }

    function generate_hash($password){
        $crypt_pass = hash("sha256", $password);
        return $crypt_pass;
    }

    function Logout(){
        session_start();

        $_SESSION['usuariolog'] = false;
        $_SESSION['user'] = "";


        header('Location: ../../../../../index.php'); // mudar local do redirecionamento

    }
    

    Login($email_,$senha_);


?>