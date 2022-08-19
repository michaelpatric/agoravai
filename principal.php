<?php 

if (($_GET['nome'] = true) && ($_GET['sobrenome']) && ($_GET['email_usuario']) ) {
    $nome = $_GET['nome'];
    $nome .= $_GET['sobrenome'];
    $email = $_GET['email_usuario'];

    echo "Meu nome é ".$nome." e meu e-mail é <strong>".$email."</strong>";
};
?>


