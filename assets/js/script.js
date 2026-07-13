const botao = document.getElementById("botao");
const menu = document.getElementById("menu");
botao.addEventListener("click", () => {
  menu.classList.toggle("ativo");
});