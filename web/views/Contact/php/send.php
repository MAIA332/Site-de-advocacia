<?php


class Mailer{
    private $name;
    private $title;
    private $email;
    private $message;
    private $sender = 'josethomaz2003@gmail.com';

    public function __constructor($name, $title, $email, $message){
        $this->setName($name);
        $this->setName($title);
        $this->setName($email);
        $this->setName($message);
    }

    public function sendMail(){
        try{
            mail($this->email, $this->title, "E-mail enviado de: {$this->name},  * * * * * * * *  Mensagem: {$this->message}", "From: {$this->sender}", "-r {$this->sender}" );
            echo "<script>alert('E-mail enviado com sucesso')</script>";
        }
        catch(Exception $e){
            echo "<script>alert('Falha ao enviar o e-mail, tente novamente!')</script>";
        }
        header('Location: ../index.html');
    }

    public function setName($name){
        if(!empty($name)){
            $this->name = $name;
        }
    }

    public function setTitle($title){
        if(!empty($title)){
            $this->title = $title;
        }
    }

    public function setEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            echo "<script>alert('O e-mail digitado é inválido')</script>";
        }
        else{
            $this->email = $email;
        }
    }
}



$name = $_POST['nome'];
$title = $_POST['assunto'];
$email = $_POST['email'];
$message = $_POST['mensagem'];

$mail = new Mailer($name, $title, $email, $message);
$mail->sendMail();

?>