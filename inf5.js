let questionNum = 1;
let questions = [
    "Aké operácie vykonávame s údajovou štruktúrou front (FIFO, queue)?",
    "Aké operácie vykonávame s údajovou štruktúrou zásobník (LIFO, stack)?",
    "Aké operácie vykonávame s údajovou štruktúrou zoznam (list)?",
    "Aký je rozdiel medzi údajovou štruktúrou front (FIFO, queue) a údajovou štruktúrou zásobník (LIFO, stack)?",
    "Aký je rozdiel medzi údajovou štruktúrou množina (set) a zoznam (list)?",
    "Nakreslite malý príklad zoznamu (list) obsahujúceho záznamy (records).",
    "Z čoho pozostáva matematický objekt graf, kedy je orientovaný a kedy je to binárny strom?",
    "Predveďte postup bublinkového triedenia (bubble sort) v danom zozname položiek",
    "Popíšte postup algoritmu binárneho prehľadávania v slovníku cudzích slov",
    "Čo je to kardinalita vzťahu medzi tabuľkami v relačnej databáze?",
    "Čo je to ochrana integrity dát v databáze?",
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