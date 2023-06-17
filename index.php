<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="inicios.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
       <center>
        <h1>
            Olá,
        <?php
        if(isset($_SESSION['nome'])==null){
        ?>
          
          visitante</h1>
          <br><br>
         
          <h3>
          <a href="login.php">login</a><br>
            <a href="cadastro.php">Cadastro</a><br>
             <a href="senha.php">Recuperar senha</a><br>
          <h3>
      
        
        
        <?php } else {
            echo $_SESSION['nome']; ?>
        
        </h1>
        <a href="lista.php">Lista de usuários</a><br>
        <a href="senha.php">Alterar senha de usuário</a><br>
        <a href="logout.php">Sair</a><br>
        <?php } ?>
        <center>
</body>
</html>