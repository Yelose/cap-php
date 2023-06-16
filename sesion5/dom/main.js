const enlaces = document.getElementsByTagName("a");
console.log("Número de enlaces de la página:", enlaces.length);

if (enlaces.length >= 2) {
  const penultimoEnlace = enlaces[enlaces.length - 2];
  console.log(
    "Dirección a la que enlaza el penúltimo enlace:",
    penultimoEnlace.href
  );
}

let contadorEnlacesPrueba = 0;
for (let i = 0; i < enlaces.length; i++) {
  if (enlaces[i].getAttribute("href") === "http://prueba") {
    contadorEnlacesPrueba++;
  }
}
console.log(
  "Número de enlaces que enlazan a http://prueba:",
  contadorEnlacesPrueba
);

const tercerParrafo = document.getElementsByTagName("p")[2];
const enlacesTercerParrafo = tercerParrafo.getElementsByTagName("a");
console.log(
  "Número de enlaces del tercer párrafo:",
  enlacesTercerParrafo.length
);
