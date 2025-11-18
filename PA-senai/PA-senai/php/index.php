<?php
require "cadastro.php";

if ($_POST) {
    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "INSERT INTO usuario (nome, email, password)
            VALUES ('$nome', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: login.php");
        exit;
    } else {
        $erro = "Erro ao cadastrar!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar</title>
  <link rel="stylesheet" href="./estilo.css">
</head>
<body>
  <div class="container centro flex">
    <div class="branco flex centro">
      <!-- LADO VERDE -->
      <div class="verde flex">
        <div class="metade flex centro">
          <h3 class="espaco">Bem-vindo ao Site</h3>
        </div>
        <div class="metade flex h">
          <h4 class="flex centroo">Já tem uma conta?</h4>
          <div class="flex centroo">
            <a href="login.php"><button class="bt">Entrar</button></a>
          </div>
        </div>
      </div>

      <!-- LADO BRANCO - CADASTRO -->
      <div class="q-branco flex just-center h">
        <h1 class="m-texto ji">Criar Conta</h1>

        <form action="" method="POST" class="form flex h centroo">
          <input type="text" name="nome" placeholder="Nome completo" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Senha" required>
          <input type="password" name="confirm_password" placeholder="Confirmar Senha" required>
          <button type="submit" class="bt-verde">Cadastrar</button>
        </form>

        <p class="login-texto">Já possui conta? <a href="login.php">Entre aqui</a></p>
      </div>
    </div>
  </div>
</body>
</html>

