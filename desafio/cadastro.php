<?php
require "connection.php";

if ($_POST) {
    $titulo  = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $genero = $_POST['genero'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO livros (titulo, autor, ano, genero, quantidade)
            VALUES ('$titulo', '$autor', '$ano', '$genero' ,'$quantidade')";

    if (mysqli_query($conn, $sql)) {
        header("Location: livros.php");
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
  <div class="container centro flex bd">
    <div class="branco flex centro">
      <!-- LADO VERDE -->
      <div class="verde flex">
        <div class="metade flex centro">
          <h1 class="espaco principal">Bem-vindo ao Site da Biblioteca</h1>
        </div>
        <div class="metade flex h">
          <div class="flex centroo">
          </div>
        </div>
      </div>

      <!-- LADO BRANCO - CADASTRO -->
      <div class="q-branco flex just-center h">
        <h1 class="m-texto ji principal">Qual livro quer adicionar?</h1>
        <h3 class="m-texto ji">Insira as informações</h3>

        <form action="" method="POST" class="form flex h centroo">
          <input type="text" name="titulo" placeholder="Título" required>
          <input type="text" name="autor" placeholder="Autor" required>
          <input type="number" name="ano" placeholder="Ano de laçamento" required>
            <select name="genero">
                <option value="">Selecione o gênero</option>
                <option value="romance">Romance</option>
                <option value="ficcao">Ficção</option>
                <option value="poesia">Poesia</option>
                <option value="drama">Drama</option>
                <option value="conto">Conto</option>
                <option value="outros">Outros</option>
            </select>
          <input type="number" name="quantidade" placeholder="Quantidade diponível" required>
          <button type="submit" class="bt-verde">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>