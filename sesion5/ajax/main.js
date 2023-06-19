const divConPreguntasYRespuestas = document.getElementById("preguntas");

fetch("https://opentdb.com/api.php?amount=10")
  .then((res) => res.json())
  .then((json) => {
    console.log(json);
    let contents = json["results"];
    contents.forEach((elem) => {
      let question = elem["question"];
      let answers = getAnswers(
        elem["correct_answer"],
        elem["incorrect_answers"]
      );
      pintarDOM(question, answers);
    });
  });

function getAnswers(correct, incorrects) {
  const formattedCorrect = `<b>${correct}</b>`;
  incorrects.push(formattedCorrect);
  return incorrects.sort(() => Math.random() - 0.5);
}

function pintarDOM(question, answers) {
  const formattedAnswers = answers.map((answer) => {
    return `<p>${answer}</p>`;
  });

  divConPreguntasYRespuestas.innerHTML += `<section><h2>${question}</h2>${formattedAnswers.join(
    ""
  )}</section>`;
}
