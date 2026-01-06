let questionNum = 1;
let questions = [
    "Kedy je algoritmus konečný a kedy rezultatívny?",
    "Kedy je algoritmus hromadný a kedy elementárny?",
    "Z akých prvkov (hmotné aj nehmotné) pozostáva hypotetický Turingov stroj? Vymenujte aspoň tri.",
    "Z akých základných prvkov (minimálne tri prvky) pozostáva vývojový diagram, aby sme ho mohli nakresliť?",
    "Čo je cieľom Turingovho testu? Spomeňte nejakú jeho praktickú realizáciu.",
    "Ako usporiadate tri algoritmy označené O(log N), O(N²), O(N) ?",
    "Akými troma prostriedkami zjednodušuje assembler písanie programov v strojovom kóde?",
    "Aký je rozdiel medzi programovacím jazykom kompilačným a interpretačným (skriptovacím) ?",
    "V čom je efektívne ovládanie počítača pomocou textového rozhrania (konzola, shell) namiesto okien a menu?",
    "Kedy je programovací jazyk typový?",
    "Aký je v programovacom jazyku rozdiel medzi príkazom (statement) a výrazom (expression) ?",
    "Čo sú to kľúčové slová v programovacom jazyku?",
    "Kedy je chyba syntaktická a kedy sémantická?",
    "Aký je rozdiel medzi imperatívnym a deklaratívnym programovacím jazykom?",
    "Akú množinu slov predstavuje daný regulárny výraz? (bude daný jednoduchší výraz) ?",
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