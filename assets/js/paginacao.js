const games = [].slice.call(document.querySelectorAll(".jogo"));
const pagination = [].filter.call(
  document.querySelectorAll(".item-page"),
  (item) => (item ? true : false)
);
let paginaAtual = 0;
games.map((jogo) => (jogo.style.display = "none"));
const teste = games.slice(0, 8);

teste.map((jogo) => (jogo.style.display = "flex"));
pagination.map((pagina) => pagina.id == "1" && pagina.classList.add("active"));

pagination.map((pagina) => {
  pagina.addEventListener("click", () => {
    if (pagina.id == "1") {
      games.map((jogo) => (jogo.style.display = "none"));
      const teste = games.slice(0, 8);
      teste.map((jogo) => (jogo.style.display = "flex"));
      pagination.map((pagina) => pagina.classList.remove("active"));
      pagina.classList.add("active");
    }
    if (pagina.id == "2") {
      games.map((jogo) => (jogo.style.display = "none"));
      const teste = games.slice(8, 16);
      teste.map((jogo) => (jogo.style.display = "flex"));
      pagination.map((pagina) => pagina.classList.remove("active"));
      pagina.classList.add("active");
    }
    if (pagina.id == "3") {
      games.map((jogo) => (jogo.style.display = "none"));
      const teste = games.slice(16, 24);
      teste.map((jogo) => (jogo.style.display = "flex"));
      pagination.map((pagina) => pagina.classList.remove("active"));
      pagina.classList.add("active");
    }
  });
});
