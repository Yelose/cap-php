const pokemonCardsElement = document.getElementById("pokemon-cards");
pokemonCardsElement.innerHTML = "";

fetch(`https://pokeapi.co/api/v2/pokemon?limit=50`)
  .then((res) => {
    if (!res.ok) {
      throw new Error("Pokemons no encontrados");
    }
    return res.json();
  })
  .then((json) => {
    const pokemons = json.results; // Obtener la lista de pokemons
    console.log(pokemons);

    // Recorrer cada pokemon y hacer una solicitud adicional para obtener información detallada porque el primer fetch devuelve un nombre y otra API
    const pokemonPromises = pokemons.map((pokemon) => {
      return fetch(pokemon.url)
        .then((res) => {
          if (!res.ok) {
            throw new Error("Información del Pokemon no encontrada");
          }
          return res.json();
        })
        .then((pokemonData) => {
          console.log(pokemonData);
          const types = pokemonData.types.map((type) => type.type.name);
          const stats = pokemonData.stats.reduce((acc, stat) => {
            acc[stat.stat.name] = stat.base_stat;
            return acc;
          }, {});
          return `
            <div class="card">
              <section class="main-info">
                <h3>${pokemonData.name}</h3>
                <p>Altura: ${pokemonData.height}</p>
                <p>Peso: ${pokemonData.weight}</p>
                <p>Tipo: ${types.join(", ")}</p>
              </section>
              <section>
                <div class="stats">
                  <aside>
                    <p>HP: </p> 
                    <div class="hp">
                        <span style="width: ${stats.hp}%"></span>
                    </div>
                  </aside>
                  <aside>
                    <p>Attack: </p>
                    <div class="attack">
                        <span style="width: ${stats.attack}%"></span>
                    </div>
                  </aside>
                  <aside>
                    <p>Defense: </p>
                    <div class="defense">
                        <span style="width: ${stats.defense}%"></span>
                    </div>
                  </aside>
                  <aside>
                    <p>Speed: </p>
                    <div class="speed">
                        <span style="width: ${stats.speed}%"></span>
                    </div>
                  </aside>
                </div>
              </section>
            </div>
          `;
        })
        .catch((error) => {
          console.log(error);
          return ""; // Retorna una cadena vacía en caso de error para no interrumpir el flujo
        });
    });

    Promise.all(pokemonPromises)
      .then((pokemonCards) => {
        const cardsHTML = pokemonCards.join(""); // Concatena todas las tarjetas en una sola cadena
        pokemonCardsElement.innerHTML = cardsHTML; // Asigna el contenido al elemento pokemonCardsElement
      })
      .catch((error) => {
        console.log(error);
      });
  })
  .catch((error) => {
    console.log(error);
  });
