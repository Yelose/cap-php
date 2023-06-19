const bodyElement = document.querySelector("body");
const mainElement = document.createElement("main");
mainElement.setAttribute("id", "main-content");
bodyElement.appendChild(mainElement);

mainElement.innerHTML = `
<header>
    <h1> Api perritos </h1>
</header>
<section>
    <figure>
        <img src="" alt="Imagen perrito"/>
    </figure>
    <article>
        <h2>Instrucciones:</h2>
        <ul>
            <li>Pulsa el botón Mostrar imagen para ver una imagen aleatoria de un perrito </li>
            <li>Pulsa el botón Eliminar imagen, para eliminar la imagen del DOM</li>
            <li>Sólo puede aparecer una imagen a la vez </li>
        </ul>
    </article>
    <div class="buttons">
        <button id="mostrar-imagen">Mostrar imagen</button>
        <button id="eliminar-imagen">Eliminar imagen</button>
    </div>
    <div class="estilos-imagen">
        <h3>Estilos de la imagen</h3>
        <section>
            <span class="material-symbols-outlined">
            border_color
            </span>
            <div class="colors">
                <div class="blue"></div>
                <div class="green"></div>
                <div class="gold"></div>
                <div class="black"></div>
            </div>
        </section>
        <section>
            <span class="material-symbols-outlined">
                border_style
            </span>
            <div class="border-style">
                <div class="round-border"></div>
                <div class="square-border"></div>
                <div class="medium-round-border"></div>
            </div>
        </section>
    </div>
</section>
`;

const mostrarImagenBtn = document.getElementById("mostrar-imagen");
const eliminarImagenBtn = document.getElementById("eliminar-imagen");
const imgContainer = document.querySelector("figure");
const colorsContainer = document.querySelector(".colors");
const borderStyleContainer = document.querySelector(".border-style");

mostrarImagenBtn.addEventListener("click", mostrarImagen);
eliminarImagenBtn.addEventListener("click", eliminarImagen);

function mostrarImagen() {
  fetch("https://dog.ceo/api/breeds/image/random")
    .then((response) => response.json())
    .then((data) => {
      const imgUrl = data.message;

      // Crea un nuevo elemento <img> y se da valor a sus atributos src y alt
      const imgElement = document.createElement("img");
      imgElement.src = imgUrl;
      imgElement.alt = "Imagen perrito";

      // elimina todo el contenido de la etiqueta madre <figure> y añade la nueva <img>
      imgContainer.innerHTML = "";
      imgContainer.appendChild(imgElement);
    })
    .catch((error) => {
      console.log(error);
    });
}

function eliminarImagen() {
  imgContainer.innerHTML = "";
}

colorsContainer.addEventListener("click", (event) => {
  const colorDiv = event.target;
  const imgElement = document.querySelector("figure img");

  // Eliminar todas las clases de borde
  imgElement.classList.remove("blue-border");
  imgElement.classList.remove("green-border");
  imgElement.classList.remove("gold-border");
  imgElement.classList.remove("black-border");

  if (colorDiv.classList.contains("blue")) {
    imgElement.classList.add("blue-border");
  } else if (colorDiv.classList.contains("green")) {
    imgElement.classList.add("green-border");
  } else if (colorDiv.classList.contains("gold")) {
    imgElement.classList.add("gold-border");
  } else if (colorDiv.classList.contains("black")) {
    imgElement.classList.add("black-border");
  }
});

borderStyleContainer.addEventListener("click", (event) => {
  const styleDiv = event.target;
  const imgElement = document.querySelector("figure img");

  // Eliminar todas las clases de estilo de borde
  imgElement.classList.remove("round-border");
  imgElement.classList.remove("square-border");
  imgElement.classList.remove("medium-round-border");

  if (styleDiv.classList.contains("round-border")) {
    imgElement.classList.add("round-border");
  } else if (styleDiv.classList.contains("square-border")) {
    imgElement.classList.add("square-border");
  } else if (styleDiv.classList.contains("medium-round-border")) {
    imgElement.classList.add("medium-round-border");
  }
});
