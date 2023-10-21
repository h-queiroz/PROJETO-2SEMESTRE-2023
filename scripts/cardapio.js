let body = document.body;
let themeSwitcherDiv = document.querySelector(".theme-switcher");
let themeBall = document.querySelector(".theme-switcher .ball");
let moonIcon = document.querySelector(".theme-switcher .ball img:nth-child(1)");
let sunIcon = document.querySelector(".theme-switcher .ball img:nth-child(2)");
let allLinks = document.querySelectorAll("a");

// console.dir(themeBall.style);
// console.dir(moonIcon);
// console.dir(sunIcon);
themeBall.style.left = "7px";
sunIcon.style.opacity = 0;

themeSwitcherDiv.addEventListener("click", () => {
  if(themeBall.style.left == "7px"){ // Modo Claro
    body.style.backgroundImage = "url('imgs/fundo-amarelo.jpg')";
    themeSwitcherDiv.style.backgroundColor = "#efcc00";
    themeSwitcherDiv.style.borderColor = "black";
    themeBall.style.left = "43px";
    sunIcon.style.opacity = 1;
    moonIcon.style.opacity = 0;
    allLinks.forEach( (individualLink) => {
      individualLink.style.color = "black";
    });
    document.querySelector("hr").style.borderColor = "black";
    // document.querySelector("h1").style.color = "black";
    document.querySelectorAll("span").forEach( (individualSpan) => {
      individualSpan.style.color = "black";
    });
    document.querySelectorAll("h1").forEach( (individualH1) => {
      individualH1.style.color = "black";
    });
    document.querySelectorAll("p").forEach( (individualP) => {
      individualP.style.color = "black";
    });
  }else { // Modo Escuro
    body.style.backgroundImage = "url('imgs/black-bg.jpg')";
    themeSwitcherDiv.style.backgroundColor = "#7269af";
    themeSwitcherDiv.style.borderColor = "white";
    themeBall.style.left = "7px";
    sunIcon.style.opacity = 0;
    moonIcon.style.opacity = 1;
    allLinks.forEach( (individualLink) => {
      individualLink.style.color = "white";
    });
    document.querySelector("hr").style.borderColor = "black";
    // document.querySelector("h1").style.color = "white";
    document.querySelectorAll("span").forEach( (individualSpan) => {
      individualSpan.style.color = "white";
    });
    document.querySelectorAll("h1").forEach( (individualH1) => {
      individualH1.style.color = "white";
    });
    document.querySelectorAll("p").forEach( (individualP) => {
      individualP.style.color = "white";
    });
  }
  // tag p dentro footer sempre permanecer branco independente do tema.
  document.querySelector("footer p").style.color = "white";
});
