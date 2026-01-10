let questionNum = 1;
let questions = [
    "Aké typy pamäte obsahuje počítač a ako ich usporiadame podľa kapacity, rýchlosti prístupu a ceny za bit?",
    "Na čo je určená pamäť typu cache a čo znamená L1, L2, L3 ?",
    "Čo je to volatilná pamäť a čo je to dynamická pamäť ?",
    "Aké dve základné funkcie (a potom ich rôzne kombinácie) realizuje RAID ?",
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