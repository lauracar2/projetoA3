<?php

include("conexao.php");

$query = "SELECT * FROM login";
$result = mysqli_query($conexao, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="usuarios.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
 
<h2>Lista de Usuários:</h2>
<a href="index.php">Voltar</a>


<div>
<table>
    <tr>
        <div>
        <h1> Usuários </h1>
        
        
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['nome']; ?></td>
           
          
        </tr>
    <?php } ?>
</table>  
</div> 
</body>
</html>