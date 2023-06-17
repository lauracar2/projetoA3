<?php

include('conexao.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "SELECT nome, login, senha FROM login 
 WHERE login = '$login' AND senha = '$senha'";
$query = mysqli_query($conexao, $select);
$dados = mysqli_fetch_row($query);

if ($login == $dados[1] && $senha == $dados[2]) {
  session_start();

$_SESSION['nome'] = $dados[0];
 header('Location: index.php');
} else {
 header('Location: login.php');
}

?>

