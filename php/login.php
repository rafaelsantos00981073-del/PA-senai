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
            <!-- LINK PARA CADASTRO -->
            <a href="index.php"><button class="bt">Cadastrar</button></a>
          </div>
        </div>
      </div>

      <!-- LADO BRANCO - LOGIN -->
      <div class="q-branco flex just-center h">
        <h1 class="m-texto ji">Login</h1>

        <form id="formLogin" class="form flex h centroo">
          <input type="email" id="emailLogin" placeholder="Email" required>
          <input type="password" id="senhaLogin" placeholder="Senha" required>
          <button type="submit" class="bt-verde">Entrar</button>
        </form>

        <p class="login-texto">Não tem conta? <a href="index.php">Cadastre-se</a></p>
      </div>
    </div>
  </div>

  <!-- <script>
    const formLogin = document.getElementById('formLogin');

    formLogin.addEventListener('submit', function (e) {
      e.preventDefault();

      const emailLogin = document.getElementById('emailLogin').value;
      const senhaLogin = document.getElementById('senhaLogin').value;

      let usuarioSalvo = localStorage.getItem(emailLogin);
      console.log(usuarioSalvo)

      if (!usuarioSalvo) {
        alert('Nenhum usuário cadastrado. Faça o cadastro primeiro.');
        window.location.href = 'index.php';
        return;
      }

      if (emailLogin && senhaLogin === usuarioSalvo) {
        alert(`✅ Bem-vindo, ${usuarioSalvo.nome}!`);
        window.location.href = 'index.php';
      } else {
        alert('❌ Email ou senha incorretos!');
      }
    });
  </script> -->
</body>

</html>