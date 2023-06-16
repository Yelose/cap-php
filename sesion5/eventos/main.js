function ocultarContenido(num) {
  const parrafoElement = document.getElementById("contenidos_" + num);
  const enlaceElement = document.getElementById("enlace_" + num);

  if (parrafoElement.classList.contains("oculto")) {
    parrafoElement.classList.remove("oculto");
    enlaceElement.textContent = "Ocultar contenidos";
  } else {
    parrafoElement.classList.add("oculto");
    enlaceElement.textContent = "Mostrar contenidos";
  }
}
