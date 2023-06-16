function contarCifras() {
  const cifrasElement = document.getElementById("cifras-entero").value;
  const contarCifrasResultElement = document.getElementById(
    "contar-cifras-result"
  );
  let result = "Resultado aquí";

  const numero = parseInt(cifrasElement);

  if (isNaN(numero)) {
    result = "El valor introducido no es un número válido.";
  } else {
    result = numero.toString().length;
  }

  contarCifrasResultElement.innerHTML = `El número de cifras es: ${result}`;
}

function ponerAsteriscos() {
  const numero = document.getElementById("asteriscos-input").value;
  const asteriscosResultElement = document.getElementById("asteriscos-result");
  let asteriscos = "";

  for (let i = 0; i < numero; i++) {
    asteriscos += "*";
  }

  asteriscosResultElement.innerHTML = asteriscos;
}

function ponerSecuencia() {
  const numero = document.getElementById("asteriscos-input").value;
  const asteriscosResultElement = document.getElementById("asteriscos-result");
  const simbolos = ["*", "+", "_"];
  let secuencia = "";

  for (let i = 0; i < numero; i++) {
    const indice = i % simbolos.length;
    secuencia += simbolos[indice];
  }

  asteriscosResultElement.innerHTML = secuencia;
}

function mostrarTriangulo() {
  const numero = document.getElementById("asteriscos-input").value;
  const asteriscosResultElement = document.getElementById("asteriscos-result");

  let triangulo = "";

  for (let i = 1; i <= numero; i++) {
    for (let j = 1; j <= i; j++) {
      triangulo += "*";
    }
    triangulo += "<br>";
  }

  asteriscosResultElement.innerHTML = triangulo;
}

function calcularDiferencia() {
  const fechaInicioElement = document.getElementById("fecha-inicio");
  const fechaFinElement = document.getElementById("fecha-fin");
  const resultadoElement = document.getElementById("resultado-diferencia");

  const fechaInicio = new Date(fechaInicioElement.value);
  const fechaFin = new Date(fechaFinElement.value);

  const diferencia = diferenciaEnDias(fechaInicio, fechaFin);
  resultadoElement.textContent = `La diferencia en días es: ${diferencia}`;
}

function diferenciaEnDias(fecha1, fecha2) {
  const anioActual = new Date().getFullYear();
  const fechaCompleta1 = new Date(
    anioActual,
    fecha1.getMonth(),
    fecha1.getDate()
  );
  const fechaCompleta2 = new Date(
    anioActual,
    fecha2.getMonth(),
    fecha2.getDate()
  );
  const diferenciaMs = fechaCompleta2 - fechaCompleta1;
  const diferenciaDias = Math.floor(diferenciaMs / 86400000);
  return diferenciaDias;
}
