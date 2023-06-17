
<?php

include ("conexao.php");

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$update = "UPDATE login SET senha = '$senha' WHERE login = '$login'";
$query = mysqli_query($conexao, $update);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="cor.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Senha atualizada com sucesso</h2>
<nav>
<a href="login.php">Voltar</a>
</nav>

</body>
</html>






