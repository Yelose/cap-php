function comparar() {
  const resultElement = document.getElementById("result-max-number");
  const number1 = parseInt(document.getElementById("number1").value);
  const number2 = parseInt(document.getElementById("number2").value);
  const number3 = parseInt(document.getElementById("number3").value);

  let maxNumber = Math.max(number1, number2, number3);

  resultElement.innerHTML = `El número mayor es: ${maxNumber}`;
}

function contarLetra() {
  const resultLetrasElement = document.getElementById("result-characters");
  const phrase = document.getElementById("frase").value;
  const letter = document.getElementById("letra").value;

  let count = 0;
  for (let i = 0; i < phrase.length; i++) {
    if (phrase[i] === letter) count++;
  }

  resultLetrasElement.innerHTML = `La letra ${letter} aparece ${count} veces`;
}

function sumarORestar() {
  const resultSumarORestarElement = document.getElementById(
    "sumar-o-restar-resultado"
  );
  const number1 = parseInt(document.getElementById("number4").value);
  const number2 = parseInt(document.getElementById("number5").value);
  const sign = document.getElementById("suma-o-resta").value;
  let resultado = 0;
  let operacion = "";

  if (sign === "suma") {
    resultado = number1 + number2;
    operacion = "suma";
  }
  if (sign === "resta") {
    resultado = number1 - number2;
    operacion = "resta";
  }
  resultSumarORestarElement.innerHTML = `El resultado de la ${operacion} es ${resultado}`;
}

const validUsername = "usuario";
const validPassword = "contraseña";

let loginAttempts = 3;

function validarUsuario() {
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  if (username === validUsername && password === validPassword) {
    mostrarMensaje("Inicio de sesión exitoso", "success");
  } else {
    loginAttempts--;

    if (loginAttempts > 0) {
      mostrarMensaje(
        `Inicio de sesión fallido. Te quedan ${loginAttempts} intentos.`,
        "error"
      );
    } else {
      mostrarMensaje(
        "Has agotado los intentos y mi paciencia. ¿Cómo se puede ser tan lerdo? si te he puesto el usuario y la contraseña ahí arriba...",
        "error"
      );
      deshabilitarFormulario();
    }
  }
}

function mostrarMensaje(mensaje, tipo) {
  const messageElement = document.getElementById("message");
  messageElement.textContent = mensaje;
  messageElement.className = tipo;
}

function deshabilitarFormulario() {
  const form = document.getElementById("login-form");
  const inputs = form.getElementsByTagName("input");
  const button = form.getElementsByTagName("button")[0];

  for (let i = 0; i < inputs.length; i++) {
    inputs[i].disabled = true;
  }

  button.disabled = true;
}

function letraRaraResultadoRaro() {
  const letraRaraElement = document.getElementById("letra-rara").value;
  const letrararaResult = document.getElementById("letra-rara-result");
  let resultadoLetraRara = 0;
  if (letraRaraElement === "") {
    return;
  } else if ((letraRaraElement === "a") | "A") {
    resultadoLetraRara = 7;
  } else if ((letraRaraElement === "b") | "B") {
    resultadoLetraRara = 9;
  } else if ((letraRaraElement === "c") | "C") {
    resultadoLetraRara = 101;
  } else {
    resultadoLetraRara =
      "que te has equivocado de letra, pero no te voy a explicar por qué.";
  }

  letrararaResult.innerHTML = `El resultado es ${resultadoLetraRara}`;
}
