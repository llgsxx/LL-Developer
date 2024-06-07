<?php
$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$celular = addcslashes($_POST['celular']);
$mensgem = addcslashes($_POST['mensagem']);

$para = "leandrolucasgomesdesousa@gmail.com";
$assunto = "contato portifolio";

$corpo = "nome: " . $nome . "\n" . "email: " . $email . "\n" . "celular: " . $celular . "\n" . "mensagem: " . $mensagem . "\n";

$cabeca = "from leandrolucasgomesdesousa@gmail.com"."\n"."reply-to: ". $email. "\n" "X=mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}

?>