// function cadastrarUsuario() {
//     const nome = document.getElementById('nome').value;
//     const email = document.getElementById('email').value;
//     const senha = document.getElementById('senha').value;

//     if (nome && email && senha) {
//       alert(`✅ Cadastro realizado com sucesso!\nBem-vindo(a), ${nome}!`);
//       window.location.href = "index.html";
//       return false;
//     } else {
//       alert("Por favor, preencha todos os campos!");
//       return false;
//     }
//   }
// function validarLogin(event) {
//   event.preventDefault();

//   const email = document.querySelector("input[name='emailLogin']").value.trim();
//   const senha = document.querySelector("input[name='senhaLogin']").value;

//   if (!email || !senha) {
//       alert("⚠ Preencha todos os campos!");
//       return false;
//   }

//   event.target.submit();
// }