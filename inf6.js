let questionNum = 1;
let questions = [
    "Čo je najspodnejšia a čo je najvyššia vrstva modelu OSI?",
    "Aké sú štyri abstraktné vrstvy zjednodušeného modelu OSI?",
    "Aký je rozdiel medzi IP adresou a webovou (www.ab.com) adresou?",
    "Akú funkciu má DNS (Domain Name Server)?",
    "Aký je rozdiel medzi TCP a IP protokolom?",
    "Kto/čo má pridelenú MAC adresu?",
    "Aký je rozdiel medzi adresovaním IP a IPv6?",
    "Aký je rozdiel medzi HTTP a FTP?",
    "Čo je to netiketa?",
    "Aký je rozdiel medzi cloud computing a grid computing?",
    "Pred akými troma rôznymi neželanými udalosťami chránime svoje dáta?",
    "Aký je rozdiel medzi kryptografiou a steganografiou?",
    "Aký je rozdiel medzi šifrovaním symetrickým a asymetrickým?",
    "Vymenujte aspoň tri druhy útoku na cudzí počítač/systém.",
    "Vymenujte aspoň tri opatrenia ako zariadiť, aby systém bol odolnejší proti neoprávneným používateľom.",
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