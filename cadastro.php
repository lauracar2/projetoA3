<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<nav>
<a href="index.php">voltar></a><br>
</nav>

<body>
<div>
    <h1>Cadastro</h1>
<form id="cadastro" action="cadastrar.php" method="POST">
    Nome:  <input type="text" name="nome" required>
    <br>
    <br>
   Login: <input type="text" name="login" required>
    <br>
    <br>
   Senha <input type="password" name="senha" required>
    <br>
    <br>
    <button>Cadastrar</button>
</form>
</div>    

</body>
</html>