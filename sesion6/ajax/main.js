const userInputElement = document.getElementById("user-input");
const userAvatarElement = document.getElementById("user-avatar");
const gitHubUserElement = document.getElementById("user-name");
const buscarUsuarioElement = document.getElementById("buscar-usuario");
const repositoriosElement = document.getElementById("repositorios");
const errorElement = document.getElementById("error");

buscarUsuarioElement.addEventListener("click", getUser);
userInputElement.addEventListener("keydown", (event) => {
  if (event.key === "Enter") {
    getUser();
    event.preventDefault(); // Evitar el comportamiento predeterminado del Enter (enviar formulario)
  }
});

function getUser() {
  const gitHubUsername = userInputElement.value;

  fetch(`https://api.github.com/users/${gitHubUsername}`)
    .then((res) => {
      if (!res.ok) {
        throw new Error("Usuario no encontrado");
      }
      return res.json();
    })
    .then((json) => {
      const user = json;
      console.log(user);
      userAvatarElement.src = user.avatar_url;
      userAvatarElement.alt = `imagen de perfil de GitHub de ${user.login}`;
      gitHubUserElement.innerHTML = `${user.login}`;
      repositoriosElement.innerHTML = `Repositorios públicos: ${user.public_repos}`;
    })
    .catch((error) => {
      userAvatarElement.src =
        "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png";
      userAvatarElement.alt = `icono de persona sin género`;
      errorElement.textContent = error;
      console.log(error);
    });
}
