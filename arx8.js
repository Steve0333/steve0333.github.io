let questionNum = 1;
let questions = [
    "Čo znamená skratka SoC?",
    "Aký systém je vnorený (embedded)?",
    "Kvôli čomu majú niektoré procesory možnosť dramaticky znížiť svoju pracovnú frekvenciu?",
    "Akú prídavnú funkciu má signálový procesor?",
    "Čo znamená skratka ASIC a FPGA pri výrobe elektronických zariadení?",
    "Aké vstupy a výstupy má zariadenie označené skratkou PLC?",
    "Odkiaľ kam prenáša informácie digitálne dvojča?",
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