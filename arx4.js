let questionNum = 1;
let questions = [
    "Aký je rozdiel v materiáli medzi polovodičom typu P a typu N?",
    "Ako vzniká v polovodiči vedenie elektrického prúdu pomocou dier?",
    "Tri samostatné tlačidlá s označením 1, 2 a 3 zapínajú elektrické napätie do dvoch vodičov cez usmerňovacie diódy tak, že na tých dvoch vodičoch sa zjavuje napätie zodpovedajúce binárnemu kódu čísiel 1, 2 alebo 3. Nakreslite schému. (parametre tejto otázky sa môžu meniť, tlačidiel ale nebude väčší počet)",
    "Nakreslite schému prevodníka zo štyroch vodičov s binárnym 4-bitovým signálom na signál analógový",
    "Aký je rozdiel medzi bipolárnym a unipolárnym tranzistorom?",
    "Čo znamená skratka MOS, CMOS a FET pri tranzistoroch?",
    "Akými spôsobmi sa snažia technológie prekonať hranicu platnosti Moorovho zákona? Uveďte aspoň dve.",
    "Čo znamenajú skratky SMD a PCB pri montáži elektronických zariadení?",
    "Elektronický čip má stratový tepelný výkon 5 Wattov, jeho chladiaci kryt má tepelný odpor 20 K/W, okolie má izbovú teplotu 20 stupňov a limitná teplota čipu je 100 stupňov. O koľko treba znížiť výkon čipu aby neprekročil svoju limitnú teplotu?",
    "Nakreslite logickú schému binárnej sčítačky, aj s prenosovými bitmi na vstupe a výstupe",
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