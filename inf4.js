let questionNum = 1;
let questions = [
    "Aký je rozdiel medzi skalárnou premennou (scalar variable) a poľom (array)?",
    "Kedy je premenná v programe lokálna a kedy globálna?",
    "Prečo je premenná obsahujúca adresu v pamäti (smerník, pointer) označovaná aj niektorým typom?",
    "Aké adresy obsahujú jednotlivé položky zoznamu prvkov, aby to bol obojstranne prepojený zoznam?",
    "Funkcia pre dynamickú alokáciu dát: aký parameter jej dáme a akú hodnotu nám vráti?",
    "Aký je rozdiel medzi deklaráciou a definíciou funkcie alebo premennej ?",
    "Dátové štruktúry združujú množinu premenných, čo k nim pribudne keď z nich urobíme objekty?",
    "Akými prostriedkami rozdelíme veľký program na menšie časti?",
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