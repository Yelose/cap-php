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
  const formattedCorrect = `<correct>${correct}</correct>`;
  incorrects.push(formattedCorrect);
  return incorrects.sort(() => Math.random() - 0.5);
}

function pintarDOM(question, answers) {
  const correctAnswer = answers.find((answer) => answer.includes("<correct>"));
  const formattedAnswers = answers.map((answer) => {
    if (answer === correctAnswer) {
      return `<p><b>${answer.replace("<correct>", "")}</b></p>`;
    }
    return `<p>${answer.replace("<correct>", "")}</p>`;
  });

  divConPreguntasYRespuestas.innerHTML += `<section><h2>${question}</h2>${formattedAnswers.join(
    ""
  )}</section>`;
}
