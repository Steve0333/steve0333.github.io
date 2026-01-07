let questionNum = 1;
let questions = [
    "Napíšte pravdivostnú tabuľku pre danú boolovskú logickú funkciu s troma vstupnými parametrami (funkcia bude stanovená).",
    "Napíšte pravdivostnú tabuľku pre danú logickú schému s troma vstupmi a jedným výstupom (schéma bude stanovená).",
    "Aký je rozdiel medzi kombinačným a sekvenčným logickým obvodom?",
    "Nakreslite celkom jednoduchú logickú schému obvodu typu SET-RESET a napíšte jeho pravdivostnú logickú tabuľku.",
    "Aký je rozdiel medzi logickým obvodom typu D (data latch) a T (trigger)?",
    "Aký je rozdiel medzi registrom posuvným a paralelným?",
    "Uveďte päť prvkov, ktoré definujú štruktúru Moorovho automatu.",
];

let numQuestions = questions.length;

function previous() {
    if (questionNum > 1) {
        questionNum -= 1;
        document.getElementById("count").innerHTML = questionNum + "/" + numQuestions;
        let width = (questionNum / numQuestions) * 100;
        document.getElementById("progress").style.width = width + "%";
        document.getElementById("question").innerHTML = questions[questionNum - 1];
        for (let i = 1; i < numQuestions + 1; i++) {
            document.getElementById("q" + i).style.display = "none";
        }
        document.getElementById("q" + questionNum).style.display = "block";
    }
}

function next() {
    if (questionNum < numQuestions) {
        questionNum += 1;
        document.getElementById("count").innerHTML = questionNum + "/" + numQuestions;
        let width = (questionNum / numQuestions) * 100;
        document.getElementById("progress").style.width = width + "%";
        document.getElementById("question").innerHTML = questions[questionNum - 1];
        for (let i = 1; i < numQuestions + 1; i++) {
            document.getElementById("q" + i).style.display = "none";
        }
        document.getElementById("q" + questionNum).style.display = "block";
    }
}