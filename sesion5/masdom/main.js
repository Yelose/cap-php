const textSpanElement = document.getElementById("adicional");
const botonSeguirLeyendoElement = document.getElementById("enlace1");
const botonAtrasElement = document.getElementById("enlace2");

function muestra() {
  textSpanElement.classList.remove("oculto");
  botonSeguirLeyendoElement.classList.add("oculto");
  botonAtrasElement.classList.remove("oculto");
}

botonAtrasElement.addEventListener("click", () => {
  textSpanElement.classList.add("oculto");
  botonSeguirLeyendoElement.classList.remove("oculto");
  botonAtrasElement.classList.add("oculto");
});
