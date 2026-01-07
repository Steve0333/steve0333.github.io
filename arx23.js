let questionNum = 1;
let questions = [
    "Do záhlavia písomky napíšte dnešný dátum rímskymi číslicami.",
    "Dané dve čísla vyjadrené v hexadecimálnej číselnej sústave preveďte do binárnej, spočítajte a vyjadrite v osmičkovej číselnej sústave.",
    "Dané číslo vyjadrené v osmičkovej číselnej sústave preveďte do binárnej, vynásobte štyrmi a vyjadrite v hexadecimálnej číselnej sústave.",
    "Spočítajte dve čísla zadané v dvojkovo-desiatkovej (BCD - Binary Coded Decimal) sústave.",
    "Dané číslo v desiatkovej číselnej sústave preveďte na číslo v binárnej sústave.",
    "V binárnej sústave, od daného čísla odpočítajte druhé číslo s použitím doplnkového kódu pre záporné čísla.",
    "Vynásobte dve čísla dané v binárnej sústave.",
    "O koľko je jeden kibibajt väčší než jeden kilobajt?",
    "Spomeňte aspoň dve informácie ktoré obsahuje stavový register (status register) vo výpočtovej jednotke procesora.",
    "Aký je rozdiel medzi semiotikou a lingvistikou?",
    "Vyjadrite daný výraz v poľskej (typu prefix) notácii.",
    "Na ktorom (jedinom) riadku indikuje paritný bit chybu v dátach? (riadky budú dané)",
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