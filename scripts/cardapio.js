let divAdd = document.querySelector(".adicionar"); // Div que está na lista de pizzas para abrir a box
let divBox = document.querySelector(".box"); // Box é a caixa que abre com o formulário
let divSpan = document.querySelector(".box span"); // X para fechar a box

// Adicionando evento de clique a divAdd
divAdd.addEventListener("click", () => {
  divBox.style.display = "block"; // colocar display:block ao box para que ele exista
  setTimeout(() => {
    divBox.style.opacity = 1; // colocar opacity:1 para fazer ele aparecer ao poucos, pois está com transition no css
  }, 50);
})

// Adicionando evento de clique a divSpan
divSpan.addEventListener("click", () => {
  divBox.style.opacity = 0; // colocar opacity:0 ao box para que ele suma aos poucos, pois está com transition no css
  setTimeout(() => {
    divBox.style.display = "none"; // colocar display:none ao box para que deixe de existir
  }, 300);
})

// Ignora o setTimeout, ele mais uma gambiarra pra funcionar do que algo que vai ser preciso.
