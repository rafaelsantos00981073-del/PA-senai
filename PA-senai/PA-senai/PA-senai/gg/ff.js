function cadastrarUsuario() {
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;

    if (nome && email && senha) {
      alert(`✅ Cadastro realizado com sucesso!\nBem-vindo(a), ${nome}!`);
      window.location.href = "index.html";
      return false;
    } else {
      alert("Por favor, preencha todos os campos!");
      return false;
    }
  }