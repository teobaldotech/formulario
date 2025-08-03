document.getElementById("feedbackForm").addEventListener("submit", function(event) {
  const nome = document.getElementById("nome").value.trim();
  const email = document.getElementById("email").value.trim();
  const mensagem = document.getElementById("mensagem").value.trim();

  if (!nome || !email || !mensagem) {
    event.preventDefault();
    document.getElementById("resultado").innerText = "Preencha todos os campos corretamente.";
    document.getElementById("resultado").style.color = "red";
  }
});