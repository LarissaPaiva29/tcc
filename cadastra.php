<?php
require_once'classe/usuarios.php';
$u = new usuario;

?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>cadastro
        </title>
        <link rel="stylesheet"  href="css/estilo.css">
    </head>

        <body>
            <div id="corpo-form-cad">
            <h1> Cadastrar </h1>
            <form method="post">
            <input type="nome" name="nome" placeholder="Digite seu nome" maxlength="30">
                <input type="email" name="email" placeholder="Digite seu email"maxlength="40">
                <input type="telefone" name="telefone" placeholder="Seu telefone"maxlength="11">
                <input type="passaword" name="senha" placeholder="Digite uma senha"maxlength="32">
                <input type="passaword" name="confirma_senha" placeholder="Confirma senha"maxlength="32">
                <input type="submit" value="Cadastrar">
               
            </div>
            <?php
            //verificar se o usuario cliclou no botao 
            isset ($_POST['nome'])
            {
                $nome addcslashes($_POST['nome']);
                $telefone addcslashes($_POST['telefone']);
                $email addcslashes($_POST['email']);
                $senha addcslashes($_POST['senha ']);
                $confirma_senha addcslashes($_POST['confirma_senha']);
                //verificar se o campo ficou fazio 
            if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirma_senha))
            {
                $u->conectar("login","localhost","root");
            }
            else
            {
            echo"preencha todos os campos!";
            }
            }
            ?>
        </body>
    
</html>