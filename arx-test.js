let answered = false;
let pickCount = 0;
let allCorrect = false;
let points = 0;
let questionIndex = 0;
let userSequence = [];
const correctOrder = [0, 1, 2, 3, 4];

let questionIDs = [randInt(1, 47)];
for (let i = 0; i < 9; i++) {
    let newID = randInt(1, 47);
    while (questionIDs.includes(newID)) {
        newID = randInt(1, 47);
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

function orderedAnswer(answer) {
    if (answered) return;

    const index = parseInt(answer.getAttribute("data-index"));

    if(userSequence.includes(index)) return;

    answer.style.backgroundColor = "#454951";
    userSequence.push(index);

    if(userSequence.length == correctOrder.length) {
        let allCorrect = userSequence.every((val, i) => val == correctOrder[i]);
        let choices = document.getElementsByClassName("orderedChoice");

        if(allCorrect) {
            for (let i = 0; i < choices.length; i++) {
                choices[i].style.background = "#60b057";
            }
            points++;
            document.getElementById("points").innerHTML = "Pontszám: " + points + "/10"; 
        } else {
            for (let i = 0; i < choices.length; i++) {
                choices[i].style.background = "#a73525";
            }
        }

        for (let i = 0; i < choices.length; i++) {
            choices[i].innerHTML = "<p class='answer'>" + (parseInt(choices[i].getAttribute("data-index")) + 1) + ".&nbsp;</p>" + choices[i].innerHTML;
        }

        document.getElementById("next").style.visibility = "visible";
        answered = true;
    }
}

function checkAnswer(index, normalizer) {
    if (answered) return;

    let user, correct, userNorm, correctNorm;
    user = document.getElementById("user-answer" + index).value;
    correct = document.getElementById("correct-answer" + index).value;
    switch (normalizer) {
        case "roman":
            userNorm = normalizeRoman(user);
            correctNorm = normalizeRoman(correct);
            break;
        case "num":
            userNorm = normalizeNum(user);
            correctNorm = normalizeNum(correct);  
            break;
        case "hex":
            userNorm = normalizeHex(user);
            correctNorm = normalizeHex(correct);  
            break;
        case "prefix":
            userNorm = normalizePrefix(user);
            correctNorm = normalizePrefix(correct);  
            break;
        case "text":
            userNorm = normalizeText(user);
            correctNorm = normalizeText(correct);  
            break;
    }
    let feedback = document.getElementById("feedback" + index);

    if (userNorm == correctNorm) {
        feedback.textContent = "Helyes ✅";
        feedback.style.color = "#60b057";
        points++;
    } else {
        feedback.textContent = "Helytelen ❌ A helyes válasz: " + correct;
        feedback.style.color = "#a73525";
    }

    answered = true;
    document.getElementById("next").style.visibility = "visible";
    document.getElementById("points").innerHTML = "Pontszám: " + points + "/10"; 
}

function nextQuestion() {
    answered = false;
    pickCount = 0;
    allCorrect = false;
    userSequence = [];

    let answers = document.getElementsByClassName("choice");
    for (let i = 0; i < answers.length; i++) {
        answers[i].style.background = "#282C34";
    }

    document.getElementById("next").style.visibility = "hidden";

    for (let i = 1; i <= 47; i++) {
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

function normalizeRoman(input) {
    return input
        .toUpperCase()
        .replace(/\s+/g, '')
        .replace(/\.+/g, '.');
}

function normalizeNum(input) {
    return input.replace(/\s+/g, '');
}

function normalizeHex(input) {
    return input
        .toUpperCase()
        .replace(/\s+/g, '');
}

function normalizePrefix(input) {
    return input.trim().replace(/\s+/g, ' ');
}

function normalizeText(input) {
    return input.toLowerCase();
}