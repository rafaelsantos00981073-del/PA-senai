<?php
session_start();
require "cadastro.php";

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' LIMIT 1";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        $user = mysqli_fetch_assoc($res);

        if ($senha == $user['password']) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            header("Location: painel.php");
            exit;
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "Usuário não encontrado!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./estilo.css">
</head>
<body>
  <div class="container flex centro">
    <div class="branco flex">
      <!-- LADO VERDE -->
      <div class="verde flex">
        <div class="metade flex centro">
          <h3 class="espaco">Bem-vindo de volta!</h3>
        </div>
        <div class="metade flex h">
          <h4 class="flex centroo">Não tem conta ainda?</h4>
          <div class="flex centroo">
            <a href="index.php"><button class="bt">Cadastrar</button></a>
          </div>
        </div>
      </div>

      <!-- LADO BRANCO - LOGIN -->
      <div class="q-branco flex just-center h">
        <h1 class="m-texto ji">Login</h1>

        <form action="" method="post" class="form flex h centroo">
          <input type="email" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Senha" required>
          <button type="submit" class="bt-verde">Entrar</button>
        </form>

        <p class="login-texto">Não tem conta? <a href="index.php">Cadastre-se</a></p>
      </div>
    </div>
  </div>
</body>
</html>

