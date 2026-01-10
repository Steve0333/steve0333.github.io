let questionNum = 1;
let questions = [
    "Vymenujte ktoré časti musí obsahovať procesor, aby mohol čítať z pamäte inštrukcie a prenášať dáta, robiť výpočty a uchovávať medzivýsledky.",
    "Z akých krokov pozostáva inštrukčný cyklus procesora pre spočítanie obsahu dvoch registrov?",
    "Čo je to register stack pointer v procesore a na čo slúži?",
    "Aký je rozdiel medzi CISC a RISC?",
    "Čo je to špekulatívne vykonávanie inštrukcií?",
    "Čo je to pipelining, ako pracuje trojstupňový?",
    "Ako spôsobí inštrukcia skoku narušenie prúdového spracovania inštrukcií a ako to vyrieši zavedenie inštrukcie obsahujúcej podmienku vykonania?",
    "Čo je to vektor-adresa prerušenia, aká je to informácia a kedy sa použije?",
    "Kvôli čomu procesor obsahuje aspoň dva rôzne pracovné režimy user mode a kernel mode?",
    "Aký je rozdiel medzi Princetonskou a Harvardskou architektúrou počítačov?",
    "Čo je to Flynnova klasifikácia počítačov a uveďte aspoň dva príklady?",
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