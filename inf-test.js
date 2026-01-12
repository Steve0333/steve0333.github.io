let answered = false;
let pickCount = 0;
let allCorrect = false;
let points = 0;
let questionIndex = 0;

let questionIDs = [randInt(1, 50)];
for (let i = 0; i < 9; i++) {
    let newID = randInt(1, 50);
    while (questionIDs.includes(newID)) {
        newID = randInt(1, 50);
    }
    questionIDs.push(newID);
}

waitForElementToDisplay("#q" + questionIDs[0], function() {
    document.getElementById("q" + questionIDs[0]).style.display = "block";
}, 1000, 9000);

function answer(answer) {
    if (answered) return;

    let isCorrect = answer.getAttribute("data-answer");
    if (isCorrect == "correct") {
        points++;
    }

    let answers = document.getElementsByClassName("choice");
    for (let i = 0; i < answers.length; i++) {
        if (answers[i].getAttribute("data-answer") == "correct") {
            answers[i].style.background = "#60b057";
        } else {
            answers[i].style.background = "#a73525";
        }
    }

    answered = true;
    document.getElementById("next").style.visibility = "visible";
    document.getElementById("points").innerHTML = "Pontszám: " + points + "/10"; 
}

function pick(answer, requiredPicks) {
    if (answered) return;

    answer.style.background = "#454951";

    let isCorrect = answer.getAttribute("data-answer");
    if (isCorrect == "correct") {
        pickCount++;
    } 

    if (pickCount == requiredPicks) {
        allCorrect = true;
    }

    if (allCorrect || isCorrect == "incorrect") {
        let answers = document.getElementsByClassName("choice");
        for (let i = 0; i < answers.length; i++) {
            if (answers[i].getAttribute("data-answer") == "correct") {
                answers[i].style.background = "#60b057";
            } else {
                answers[i].style.background = "#a73525";
            }
        }

        if (allCorrect) {
            points += 1;
            document.getElementById("points").innerHTML = "Pontszám: " + points + "/10"; 
        }

        document.getElementById("next").style.visibility = "visible";
        answered = true;
    }
}

function nextQuestion() {
    answered = false;
    pickCount = 0;
    allCorrect = false;

    let answers = document.getElementsByClassName("choice");
    for (let i = 0; i < answers.length; i++) {
        answers[i].style.background = "#282C34";
    }

    document.getElementById("next").style.visibility = "hidden";

    for (let i = 1; i <= 50; i++) {
        document.getElementById("q" + i).style.display = "none";
    }
    questionIndex++;
    document.getElementById("question-counter").innerHTML = "Kérdés: " + (questionIndex + 1) + "/10";
    if (questionIndex < questionIDs.length) {
        document.getElementById("q" + questionIDs[questionIndex]).style.display = "block";
    } else {
        document.getElementById("question-counter").style.visibility = "hidden";
        document.getElementById("score-container").style.display = "flex";
        document.getElementById("score").innerHTML = points + "/10";
    }
}

function randInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function waitForElementToDisplay(selector, callback, checkFrequencyInMs, timeoutInMs) {
    var startTimeInMs = Date.now();
    (function loopSearch() {
        if (document.querySelector(selector) != null) {
            callback();
            return;
        } else {
            setTimeout(function () {
                if (timeoutInMs && Date.now() - startTimeInMs > timeoutInMs) return;
                loopSearch();
            }, checkFrequencyInMs);
        }
    })();
}