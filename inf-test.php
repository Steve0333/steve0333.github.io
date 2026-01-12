<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>INF Teszt</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: 'Montserrat', 'Inter', 'Roboto';
                background-color: #1E2227;
                margin: 0;
                padding: 0;
                color: whitesmoke;
                height: 100vh;
            }

            header {
                display: flex;
                align-items: center;
                padding: 30px;
                height: 10%;
                box-sizing: border-box;
            }

            h1 {
                margin: 0;
                font-size: 3rem;
                width: 60%;
                text-align: center;
            }

            section {
                display: flex;
                justify-content: center;
                background-color: #23272E;
                height: 90%;
                padding: 20px;
                box-sizing: border-box;
                flex-direction: column;
            }

            footer {
                height: 10%;
                display: flex;
                flex-direction: row;
                align-items: center;
            }

            button {
                font-family: 'Montserrat', 'Inter', 'Roboto';
                cursor: pointer;
                user-select: none;
            }

            img {
                max-width: 100%;
                max-height: 100%;
                width: auto;
                height: auto;
            }

            code {
                font-size: 1.3rem;
                background-color: #3A3F4B;
                font-weight: bold;
                padding: 3px;
            }

            li {
                font-size: 1.3rem;
                line-height: 150%;
                text-align: start;
            }

            .container {
                width: 100%;
                height: 90%;
            }

            .question-container {
                width: 100%;
                height: 15%;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #282C34;
                border-radius: 20px;
            }

            .question {
                font-size: 1.3rem;
                user-select: none;
            }

            .multiple-choice-4-container {
                height: 85%;
                display: grid;
                grid-template-columns: 50% 50%;
                grid-template-rows: 50% 50%;
            }

            .multiple-choice-3-container {
                height: 85%;
                display: grid;
                grid-template-columns: 33% 33% 33%;
                grid-template-rows: 100%;
            }

            .multi-select-3-container {
                height: 85%;
                display: grid;
                grid-template-columns: 33% 33% 33%;
                grid-template-rows: 50% 50%;
            }

            .multi-select-4-container {
                height: 85%;
                display: grid;
                grid-template-rows: 25% 25% 25% 25%;
                grid-template-columns: 50% 50%;
            }

            .choice {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #282C34;
                margin: 20px;
                border-radius: 30px;
                box-shadow: 5px 10px 10px #1E2227;
                border: 1px solid #282C34;
                transition: 0.2s;
                padding: 20px;
                text-align: center;
                cursor: pointer;
            }

            .choice:hover {
                box-shadow: 1px 1px 1px #1E2227;
                border: 1px solid #454951;
            }

            .choice-left {
                justify-content: start;
            }

            .answer {
                font-size: 1.5rem;
                user-select: none;
            }

            .next-button {
                display: flex;
                justify-content: end;
                height: 100%;
                width: 50%;
            }

            .question-num {
                display: flex;
                justify-content: start;
                align-items: center;
                height: 100%;
                width: 50%;
            }

            #back {
                width: 20%;
                font-size: 3rem;
                text-decoration: none;
                color: whitesmoke;
                transition: 0.2s ease;
            }

            #next {
                font-size: 1.8rem;
                margin: 0;
                background-color: whitesmoke;
                color: black;
                padding: 5px 10px;
                border-radius: 15px;
                visibility: hidden;
            }

            #back:hover {
                font-size: 3.5rem;
            }

            #points {
                width: 20%;
                font-size: 1.2rem;
                text-align: end;
            }

            #score-container {
                width: 100%;
                display: none;
                justify-content: center;
            }

            #score {
                font-size: 10vw;
            }

            #q1, #q2, #q3, #q4, #q5, #q6, #q7, #q8, #q9, #q10, #q11, #q12, #q13, #q14, #q15, #q16, #q17, #q18, #q19, #q20,
            #q21, #q22, #q23, #q24, #q25, #q26, #q27, #q28, #q29, #q30, #q31, #q32, #q33, #q34, #q35, #q36, #q37, #q38, #q39, #q40,
            #q41, #q42, #q43, #q44, #q45, #q46, #q47, #q48, #q49, #q50 {
                display: none;
            }

            @media (max-width: 900px) {
                body {
                    height: auto;
                }

                h1 {
                    font-size: 10vw;
                }

                .question-container {
                    padding: 20px;
                    box-sizing: border-box;
                }

                .question, .answer {
                    font-size: 1rem;
                }

                .multi-select-4-container {
                    grid-template-columns: 100%;
                    grid-template-rows: 12.5% 12.5% 12.5% 12.5% 12.5% 12.5% 12.5% 12.5%;
                }

                .multi-select-3-container {
                    grid-template-columns: 100%;
                    grid-template-rows: 16.6% 16.6% 16.6% 16.6% 16.6% 16.6%;
                }

                .multiple-choice-4-container {
                    grid-template-columns: 100%;
                    grid-template-rows: 25% 25% 25% 25%;
                }

                .multiple-choice-3-container {
                    grid-template-columns: 100%;
                    grid-template-rows: 33% 33% 33%;
                }

                #next {
                    font-size: 1.1rem;
                }

                #points {
                    font-size: 3vw;
                }
            }
        </style>
    </head>
    <body>
        <script src="inf-test.js"></script>
        <header>
            <a id="back" href="index.html">&larr;</a>
            <h1>Teszt</h1>
            <p id="points">Pontszám: 0/10</p>
        </header>
        <section>
            <!-- 2. Prednáška -->
            <div class="container" id="q1">
                <div class="question-container">
                    <p class="question">Kedy je algoritmus konečný?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Ak sa po konečnom počte krokov vždy zastaví.", 1],
                            ["Ak vždy skončí s jednoznačným výsledkom.", 0],
                            ["Ak je použiteľný na viacero rôznych vstupov.", 0],
                            ["Ak sa skladá z najzákladnejších, ďalej nedeliteľných krokov.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q2">
                <div class="question-container">
                    <p class="question">Kedy je algoritmus rezultatívny?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Ak sa po konečnom počte krokov vždy zastaví.", 0],
                            ["Ak vždy skončí s jednoznačným výsledkom.", 1],
                            ["Ak je použiteľný na viacero rôznych vstupov.", 0],
                            ["Ak sa skladá z najzákladnejších, ďalej nedeliteľných krokov.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q3">
                <div class="question-container">
                    <p class="question">Kedy je algoritmus hromadný?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Ak sa po konečnom počte krokov vždy zastaví.", 0],
                            ["Ak vždy skončí s jednoznačným výsledkom.", 0],
                            ["Ak je použiteľný na viacero rôznych vstupov.", 1],
                            ["Ak sa skladá z najzákladnejších, ďalej nedeliteľných krokov.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q4">
                <div class="question-container">
                    <p class="question">Kedy je algoritmus elementárny?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Ak sa po konečnom počte krokov vždy zastaví.", 0],
                            ["Ak vždy skončí s jednoznačným výsledkom.", 0],
                            ["Ak je použiteľný na viacero rôznych vstupov.", 0],
                            ["Ak sa skladá z najzákladnejších, ďalej nedeliteľných krokov.", 1],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q5">
                <div class="question-container">
                    <p class="question">Z akých prvkov (hmotné aj nehmotné) pozostáva hypotetický Turingov stroj? Vyber tri.</p>
                </div>
                <div class="multi-select-3-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5];
                        shuffle($order);

                        $answers = [
                            ["Vstupno-výstupná páska (nekonečná pamäť).", 1],
                            ["Čítacia/zapisovacia hlava.", 1],
                            ["Riadiaca jednotka so stavmi.", 1],
                            ["Aritmeticko-logická jednotka.", 0],
                            ["Zásobník na ukladanie návratových adries.", 0],
                            ["Operačný systém riadiaci vykonávanie výpočtu.", 0]
                        ];

                        for ($i = 0; $i < 6; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 3)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q6">
                <div class="question-container">
                    <p class="question">Z akých základných prvkov (tri prvky) pozostáva vývojový diagram, aby sme ho mohli nakresliť?</p>
                </div>
                <div class="multi-select-3-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5];
                        shuffle($order);

                        $answers = [
                            ["Ovál – začiatok/koniec.", 1],
                            ["Obdĺžnik – príkaz/výpočet.", 1],
                            ["Kosoštvorec – rozhodovanie (podmienka).", 1],
                            ["Kruh – spojovací uzol medzi vláknami programu.", 0],
                            ["Paralelogram – databázová tabuľka.", 0],
                            ["Šesťuholník – cyklus typu while alebo for.", 0]
                        ];

                        for ($i = 0; $i < 6; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 3)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q7">
                <div class="question-container">
                    <p class="question">Čo je cieľom Turingovho testu?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Zistiť, či sa počítač dokáže správať nerozoznateľne od človeka.", 1],
                            ["Overiť, či má počítač vedomie a emócie ako človek.", 0],
                            ["Zmerať výpočtový výkon počítača v porovnaní s ľudským mozgom.", 0],
                            ["Zistiť, či je počítač schopný samostatne sa učiť bez zásahu človeka.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q8">
                <div class="question-container">
                    <p class="question">Spomeňte nejakú praktickú realizáciu Turingovho testu.</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["CAPTCHA", 1],
                            ["Voight-Kampff test", 0],
                            ["IQ test", 0],
                            ["TTS (Text-to-Speech test)", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q9">
                <div class="question-container">
                    <p class="question">Ako usporiadate tri algoritmy podľa rastúcej zložitosti označené O(log N), O(N²), O(N)?</p>
                </div>
                <div class="multiple-choice-3-container">
                    <?php 
                        $order = [0, 1, 2];
                        shuffle($order);

                        $answers = [
                            ["O(log N) → O(N) → O(N²).", 1],
                            ["O(N²) → O(N) → O(log N).", 0],
                            ["O(N) → O(log N) → O(N²).", 0],
                        ];

                        for ($i = 0; $i < 3; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q10">
                <div class="question-container">
                    <p class="question">Akými troma prostriedkami zjednodušuje assembler písanie programov v strojovom kóde?</p>
                </div>
                <div class="multi-select-3-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5];
                        shuffle($order);

                        $answers = [
                            ["Používa symbolické názvy namiesto binárneho kódu.", 1],
                            ["Umožňuje pomenovanie premenných a adries.", 1],
                            ["Obsahuje makrá a konštanty.", 1],
                            ["Automaticky optimalizuje program pre maximálny výkon procesora.", 0],
                            ["Poskytuje grafické rozhranie na kreslenie algoritmov.", 0],
                            ["Zabezpečuje automatickú správu pamäte (garbage collection).", 0]
                        ];

                        for ($i = 0; $i < 6; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 3)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q11">
                <div class="question-container">
                    <p class="question">V čom je efektívne ovládanie počítača pomocou textového rozhrania (konzola, shell) namiesto okien a menu?</p>
                </div>
                <div class="multi-select-3-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5];
                        shuffle($order);

                        $answers = [
                            ["Rýchlejšie pre skúsených používateľov.", 1],
                            ["Umožňuje skriptovanie a automatizáciu.", 1],
                            ["Má menšie nároky na výkon než grafické rozhranie.", 1],
                            ["Vždy poskytuje prehľadnejšie a intuitívnejšie ovládanie pre začiatočníkov.", 0],
                            ["Automaticky zabraňuje vzniku používateľských chýb pri zadávaní príkazov.", 0],
                            ["Nahrádza potrebu poznať štruktúru súborového systému a príkazy.", 0]
                        ];

                        for ($i = 0; $i < 6; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 3)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q12">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi programovacím jazykom kompilačným a interpretačným (skriptovacím)?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Kompilačný jazyk sa najprv celý preloží do strojového kódu a až potom sa spúšťa, interpretačný jazyk sa vykonáva postupne počas behu programu.", 1],
                            ["Kompilačné jazyky sa používajú iba na tvorbu operačných systémov, zatiaľ čo interpretačné len na webové stránky.", 0],
                            ["Interpretačné jazyky sa vždy prekladajú rýchlejšie a výsledný program má menšie nároky na pamäť.", 0],
                            ["Rozdiel je len v syntaxi príkazov, spôsob spracovania programu je rovnaký.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q13">
                <div class="question-container">
                    <p class="question">Kedy je programovací jazyk typový?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Ak každému údaju priraďuje typ a kontroluje jeho správnosť počas prekladu alebo behu programu.", 1],
                            ["Ak umožňuje používať premenné bez ich predchádzajúcej deklarácie.", 0],
                            ["Ak podporuje objektovo orientované programovanie.", 0],
                            ["Ak je určený len na nízkoúrovňové programovanie blízke hardvéru.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q14">
                <div class="question-container">
                    <p class="question">Aký je v programovacom jazyku rozdiel medzi príkazom (statement) a výrazom (expression)?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Príkaz vykonáva určitú akciu a môže, ale nemusí vrátiť hodnotu; Výraz vždy vyhodnotí hodnotu.", 1],
                            ["Príkaz sa používa len v špeciálnych funkciách, výraz len v hlavnom programe.", 0],
                            ["Výraz môže obsahovať iba čísla, príkaz iba text.", 0],
                            ["Príkaz sa vykonáva pomalšie než výraz.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q15">
                <div class="question-container">
                    <p class="question">Čo sú to kľúčové slová v programovacom jazyku?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Sú to rezervované slová so špeciálnym významom, ktoré nemožno použiť ako názvy premenných (napr. if, while, return).", 1],
                            ["Slová, ktoré programátor môže používať na pomenovanie premenných alebo funkcií podľa vlastného uváženia.", 0],
                            ["Slová, ktoré sa používajú len na dokumentáciu programu a nemajú vplyv na jeho beh.", 0],
                            ["Názvy knižníc alebo súborov, ktoré program automaticky importuje pri spustení.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q16">
                <div class="question-container">
                    <p class="question">Kedy je chyba syntaktická a kedy sémantická?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Syntaktická chyba vzniká pri porušení pravidiel jazyka, sémantická chyba vzniká, keď je program gramaticky správny, ale jeho správanie nie je podľa očakávania.", 1],
                            ["Syntaktická chyba je vždy spôsobená hardvérovou poruchou, sémantická chybnou inštaláciou softvéru.", 0],
                            ["Syntaktická chyba sa vyskytuje len pri interpretovaných jazykoch, sémantická len pri kompilovaných.", 0],
                            ["Syntaktická chyba sa týka názvov premenných, sémantická chýb pri výpočtových operáciách.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q17">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi imperatívnym a deklaratívnym programovacím jazykom?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Imperatívny jazyk popisuje postupnosť príkazov, ktoré sa majú vykonať, deklaratívny jazyk opisuje výsledok, ktorý chceme dosiahnuť, bez presného postupu.", 1],
                            ["Imperatívny jazyk sa používa len na nízkoúrovňové programovanie, deklaratívny len na webové stránky.", 0],
                            ["Deklaratívny jazyk nevyžaduje žiadnu syntax, imperatívny má prísne pravidlá.", 0],
                            ["Imperatívny jazyk je vždy rýchlejší ako deklaratívny.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <!-- 3. & 4. Prednáška -->
            <div class="container" id="q18">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi skalárnou premennou (scalar variable) a poľom (array)?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Skalárna premenná uchováva jednu hodnotu, zatiaľ čo pole uchováva viac hodnôt rovnakého typu, ku ktorým sa pristupuje pomocou indexov.", 1],
                            ["Skalárne premenné sa používajú len v kompilačných jazykoch, polia len v interpretačných jazykoch.", 0],
                            ["Pole môže obsahovať iba jednu hodnotu, ale vo viacerých premenných.", 0],
                            ["Skalárna premenná je vždy rýchlejšia než pole.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q19">
                <div class="question-container">
                    <p class="question">Kedy je premenná v programe lokálna a kedy globálna?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Premenná je lokálna, ak je definovaná a prístupná len v rámci bloku alebo funkcie, v ktorej vznikla; globálna je dostupná v celom programe.", 1],
                            ["Premenná je lokálna, ak sa ukladá len počas behu programu; globálna sa ukladá natrvalo a je dostupná po jeho ukončení.", 0],
                            ["Premenná je lokálna, ak ju používa len jedna funkcia; globálna, ak sa používa vo viacerých častiach programu súčasne.", 0],
                            ["Premenná je globálna vtedy, keď sa používa často, lokálna keď len zriedka.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q20">
                <div class="question-container">
                    <p class="question">Prečo je premenná obsahujúca adresu v pamäti (smerník, pointer) označovaná aj niektorým typom?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Pretože typ určuje, aký druh údajov sa nachádza na adrese, na ktorú smerník ukazuje, a ako sa má táto adresa správne interpretovať.", 1],
                            ["Pretože typ určuje, v ktorej časti pamäte sa adresa nachádza a aký má smerník maximálny rozsah.", 0],
                            ["Pretože typ určuje, či je adresa v pamäti prístupná len na čítanie alebo aj na zápis.", 0],
                            ["Pretože typ určuje, ako často sa adresa v pamäti mení počas vykonávania programu.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q21">
                <div class="question-container">
                    <p class="question">Aké adresy obsahujú jednotlivé položky zoznamu prvkov, aby to bol obojstranne prepojený zoznam?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Každá položka obsahuje adresu nasledujúceho prvku a adresu predchádzajúceho prvku v zozname.", 1],
                            ["Každá položka obsahuje adresu nasledujúceho prvku a adresu prvého prvku v celom zozname.", 0],
                            ["Každá položka obsahuje len jednu adresu, ktorá určuje poradie prvkov v oboch smeroch.", 0],
                            ["Každá položka obsahuje adresu predchádzajúceho prvku a adresu posledného prvku v zozname.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q22">
                <div class="question-container">
                    <p class="question">Funkcia pre dynamickú alokáciu dát: aký parameter jej dáme a akú hodnotu nám vráti?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["<li>Funkcia <code>malloc()</code></li><li>Parameter: <b>počet bajtov</b>, ktoré treba alokovať</li><li>najčastejšie: <code>N * sizeof(typ)</code></li><li>Vráti: <b>adresu</b> (smerník) na začiatok prideleného priestoru v pamäti alebo <code>NULL</code>, ak sa pamäť nepodarilo alokovať.</li>", 1],
                            ["<li>Funkcia <code>free()</code></li><li>Parameter: <b>počet bajtov</b>, ktoré treba uvoľniť</li><li>najčastejšie: <code>N * sizeof(typ)</code></li><li>Vráti: <b>adresu</b> (smerník) uvoľneného priestoru v pamäti alebo <code>NULL</code> pri chybe.</li>", 0],
                            ["<li>Funkcia <code>calloc()</code></li><li>Parameter: adresa existujúceho bloku pamäti a nový počet bajtov</li><li>najčastejšie: <code>pointer</code>, <code>N * sizeof(typ)</code></li><li>Vráti: <b>adresu</b> (smerník) pôvodného bloku pamäti alebo <code>NULL</code>, ak zmena zlyhá.</li>", 0],
                            ["<li>Funkcia <code>realloc()</code></li><li>Parameter: typ premennej, ktorú chceme dynamicky vytvoriť</li><li>najčastejšie: <code>int</code>, <code>char</code>, <code>struct</code></li><li>Vráti: <b>adresu</b> (smerník) novej premennej vytvorenej v pamäti.</li>", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice choice-left' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><ul>";
                            } else {
                                echo "data-answer='incorrect'><ul>";
                            }
                            echo $answers[$order[$i]][0] . "</ul></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q23">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi deklaráciou a definíciou funkcie alebo premennej?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Deklarácia oznamuje existenciu funkcie alebo premennej a jej typ, definícia prideľuje pamäť alebo obsahuje telo funkcie.", 1],
                            ["Deklarácia určuje spôsob volania funkcie alebo premennej, zatiaľ čo definícia určuje poradie jej vykonávania v programe.", 0],
                            ["Deklarácia sa používa len pri funkciách a definícia len pri premenných, pretože ich úlohy sú v jazyku striktne oddelené.", 0],
                            ["Deklarácia vytvára fyzickú inštanciu funkcie alebo premennej, zatiaľ čo definícia slúži len na ich popis v zdrojovom kóde.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q24">
                <div class="question-container">
                    <p class="question">Dátové štruktúry združujú množinu premenných, čo k nim pribudne keď z nich urobíme objekty?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["K dátovým štruktúram pribudnú metódy (funkcie), ktoré definujú správanie objektu a operácie nad jeho dátami.", 1],
                            ["K dátovým štruktúram pribudne automatická správa pamäte, ktorá odstráni potrebu riešiť alokáciu a uvoľňovanie.", 0],
                            ["K dátovým štruktúram pribudne možnosť ukladať údaje trvalo na disk bez ďalšieho programovania.", 0],
                            ["K dátovým štruktúram pribudne schopnosť paralelného vykonávania operácií bez zásahu programátora.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q25">
                <div class="question-container">
                    <p class="question">Akými prostriedkami rozdelíme veľký program na menšie časti? [4]</p>
                </div>
                <div class="multi-select-4-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5, 6, 7];
                        shuffle($order);

                        $answers = [
                            ["<b>Funkcie</b> &rarr; základné delenie na logické bloky.", 1],
                            ["<b>Modulárna štruktúra</b> programu.", 1],
                            ["<b>Samostatné súbory</b> (<code>.c</code> + <code>.h</code>) pre organizáciu kódu.", 1],
                            ["<b>Rozdelenie zodpovedností</b> &rarr; každý modul rieši jednu úlohu.", 1],
                            ["Používanie <b>globálnych premenných</b> &rarr; zdieľanie dát medzi všetkými časťami programu.", 0],
                            ["Kompilácia celého programu do <b>jedného binárneho súboru</b>.", 0],
                            ["Zvyšovanie úrovne <b>optimalizácie prekladača</b> (-O2, -O3).", 0],
                            ["Používanie jedného hlavného súboru s funkciou <b>main()</b>.", 0]
                        ];

                        for ($i = 0; $i < 8; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 4)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <!-- 5. Prednáška -->
            <div class="container" id="q26">
                <div class="question-container">
                    <p class="question">Aké operácie vykonávame s údajovou štruktúrou front (FIFO, queue)? [5]</p>
                </div>
                <div class="multi-select-4-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5, 6, 7];
                        shuffle($order);

                        $answers = [
                            ["<b>enqueue</b> – vloženie prvku na koniec frontu.", 1],
                            ["<b>dequeue</b> – odobratie prvku z čela frontu.", 1],
                            ["<b>peek/front</b> – nahliadnutie na prvý prvok bez jeho odstránenia.", 1],
                            ["<b>isEmpty</b> – test, či je front prázdny.", 1],
                            ["<b>size</b> – zistenie počtu prvkov.", 1],
                            ["<b>push</b> – vloženie prvku na vrch zásobníka.", 0],
                            ["<b>pop</b> – odobratie prvku z vrchu zásobníka.", 0],
                            ["<b>insert</b> – vloženie prvku na danú pozíciu.", 0]
                        ];

                        for ($i = 0; $i < 8; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 5)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q27">
                <div class="question-container">
                    <p class="question">Aké operácie vykonávame s údajovou štruktúrou zásobník (LIFO, stack)? [5]</p>
                </div>
                <div class="multi-select-4-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5, 6, 7];
                        shuffle($order);

                        $answers = [
                            ["<b>push</b> – vloženie prvku na vrch zásobníka.", 1],
                            ["<b>pop</b> – odobratie prvku z vrchu zásobníka.", 1],
                            ["<b>peek/top</b> – nahliadnutie na vrchný prvok bez odstránenia.", 1],
                            ["<b>isEmpty</b> – test, či je front prázdny.", 1],
                            ["<b>size</b> – zistenie počtu prvkov.", 1],
                            ["<b>insert</b> – vloženie prvku na danú pozíciu.", 0],
                            ["<b>enqueue</b> – vloženie prvku na koniec frontu.", 0],
                            ["<b>append</b> – pripojenie prvku na koniec", 0]
                        ];

                        for ($i = 0; $i < 8; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 5)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q28">
                <div class="question-container">
                    <p class="question">Aké operácie vykonávame s údajovou štruktúrou zoznam (list)? [6]</p>
                </div>
                <div class="multi-select-4-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5, 6, 7];
                        shuffle($order);

                        $answers = [
                            ["<b>insert</b> – vloženie prvku na danú pozíciu.", 1],
                            ["<b>append</b> – pripojenie prvku na koniec", 1],
                            ["<b>delete/remove</b> – odstránenie prvku podľa hodnoty alebo indexu.", 1],
                            ["<b>search/find</b> – vyhľadanie prvku.", 1],
                            ["<b>update</b> – zmena hodnoty na určitej pozícii.", 1],
                            ["<b>traverse</b> – prechod celým zoznamom.", 1],
                            ["<b>pop</b> – odobratie prvku z vrchu zásobníka.", 0],
                            ["<b>peek/front</b> – nahliadnutie na prvý prvok bez jeho odstránenia.", 0]
                        ];

                        for ($i = 0; $i < 8; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 6)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q29">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi údajovou štruktúrou front (FIFO, queue) a údajovou štruktúrou zásobník (LIFO, stack)?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Vo fronte sa prvok, ktorý bol vložený ako prvý, odoberá ako prvý, v zásobníku sa ako prvý odoberá naposledy vložený prvok.", 1],
                            ["Vo fronte sa prvky vždy triedia podľa veľkosti, v zásobníku sa triedia podľa poradia vloženia.", 0],
                            ["Front umožňuje vkladanie prvkov len na začiatok, zásobník umožňuje vkladanie prvkov len na koniec.", 0],
                            ["Front aj zásobník používajú rovnaký princíp ukladania prvkov, líšia sa len názvom operácií.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q30">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi údajovou štruktúrou množina (set) a zoznam (list)?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Množina neobsahuje duplicitné prvky a poradie nie je garantované, zoznam môže obsahovať opakujúce sa prvky a poradie je zachované.", 1],
                            ["Množina ukladá prvky vždy v abecednom alebo číselnom poradí, zoznam uchováva len prvý a posledný prvok.", 0],
                            ["Zoznam neumožňuje meniť obsah prvkov po vložení, množina áno.", 0],
                            ["Množina sa používa len na ukladanie textových reťazcov, zoznam len na číselné hodnoty.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q31">
                <div class="question-container">
                    <p class="question">Z čoho pozostáva matematický objekt graf?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Graf pozostáva z množiny vrcholov a množiny hrán, ktoré spájajú tieto vrcholy.", 1],
                            ["Graf pozostáva len zo súboru bodov bez spojení medzi nimi, pričom hrany sa definujú až pri vizualizácii.", 0],
                            ["Graf pozostáva z množiny čiar a polygonov, ktoré definujú tvar vizualizácie.", 0],
                            ["Graf pozostáva z množiny premenných a funkcií, ktoré určujú správanie prvkov v programe.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q32">
                <div class="question-container">
                    <p class="question">Kedy je matematický graf orientovaný?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Graf je orientovaný, ak každá hrana má smer od jedného vrcholu k druhému a poradie vrcholov je dôležité.", 1],
                            ["Graf je orientovaný, ak každá hrana spája len vrcholy s číselnými označeniami a poradie nie je dôležité.", 0],
                            ["Graf je orientovaný, ak hrany môžu meniť smer dynamicky počas algoritmu bez zmeny vrcholov.", 0],
                            ["Graf je orientovaný, ak neobsahuje žiadne hrany a všetky vrcholy sú izolované.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q33">
                <div class="question-container">
                    <p class="question">Kedy je matematický graf binárny strom?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Graf je binárny strom, ak je to strom, kde každý vrchol má najviac dvoch potomkov a existuje presne jeden koreň.", 1],
                            ["Graf je binárny strom, ak každý vrchol má presne jeden potomok a všetky hrany tvoria kruh.", 0],
                            ["Graf je binárny strom, ak všetky vrcholy majú rovnaký počet hrán a žiadny koreň nie je definovaný.", 0],
                            ["Graf je binárny strom, ak môže obsahovať slučky a každý vrchol môže mať ľubovoľný počet potomkov.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q34">
                <div class="question-container">
                    <p class="question">Čo je to kardinalita vzťahu medzi tabuľkami v relačnej databáze?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Kardinalita určuje, koľko záznamov jednej tabuľky môže byť spojených s koľkými záznamami druhej tabuľky v rámci vzťahu.", 1],
                            ["Kardinalita určuje maximálnu veľkosť databázy a počet stĺpcov, ktoré môže tabuľka obsahovať.", 0],
                            ["Kardinalita určuje, aký typ dát sa môže ukladať do jednotlivých stĺpcov tabuľky.", 0],
                            ["Kardinalita určuje, ako rýchlo sa dá vykonať dotaz na tabuľku a počet indexov potrebných pre optimalizáciu.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q35">
                <div class="question-container">
                    <p class="question">Čo je to ochrana integrity dát v databáze?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Ochrana integrity dát zabezpečuje, aby údaje v databáze boli konzistentné, správne a spĺňali definované pravidlá a vzťahy medzi tabuľkami.", 1],
                            ["Ochrana integrity dát umožňuje ukladať dáta bez kontroly ich konzistencie, aby sa zrýchlilo vykonávanie dotazov.", 0],
                            ["Ochrana integrity dát automaticky zálohuje všetky tabuľky bez ohľadu na ich obsah a vzťahy.", 0],
                            ["Ochrana integrity dát obmedzuje prístup k databáze iba na jednu aplikáciu naraz.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <!-- 6. Prednáška -->
            <div class="container" id="q36">
                <div class="question-container">
                    <p class="question">Čo je najspodnejšia a čo je najvyššia vrstva modelu OSI?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["<li><b>Najspodnejšia vrstva:</b> Fyzická vrstva – káble, signály, prenos bitov</li>
                              <li><b>Najvyššia vrstva:</b> Aplikačná vrstva – služby pre aplikácie, napr. <code>HTTP</code>, <code>FTP</code></li>", 1],
                            ["<li><b>Najspodnejšia vrstva:</b> Sieťová vrstva – smerovanie a adresovanie</li>
                              <li><b>Najvyššia vrstva:</b> Transportačná vrstva – spoľahlivosť prenosu</li>", 0],
                            ["<li><b>Najvyššia vrstva:</b> Aplikačná vrstva – služby pre aplikácie, napr. <code>HTTP</code>, <code>FTP</code></li>
                              <li><b>Najspodnejšia vrstva:</b> Fyzická vrstva – káble, signály, prenos bitov</li>", 0],
                            ["<li><b>Najspodnejšia vrstva:</b> Linková vrstva – rámce a MAC adresy</li>
                              <li><b>Najvyššia vrstva:</b> Prezentačná vrstva – kódovanie a šifrovanie dát.</li>", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice choice-left' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><ul>";
                            } else {
                                echo "data-answer='incorrect'><ul>";
                            }
                            echo $answers[$order[$i]][0] . "</ul></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q37">
                <div class="question-container">
                    <p class="question">Aké sú štyri abstraktné vrstvy zjednodušeného modelu OSI?</p>
                </div>
                <div class="multi-select-4-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5, 6, 7];
                        shuffle($order);

                        $answers = [
                            ["Linková vrstva.", 1],
                            ["Sieťová vrstva – IP.", 1],
                            ["Transportačná vrstva – TCP.", 1],
                            ["Aplikačná vrstva.", 1],
                            ["Fyzická vrstva.", 0],
                            ["Prezentačná vrstva.", 0],
                            ["Relačná vrstva.", 0],
                            ["Informačná vrstva.", 0]
                        ];

                        for ($i = 0; $i < 8; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 4)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q38">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi IP adresou a webovou (www.ab.com) adresou?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["IP adresa je číselný identifikátor zariadenia v sieti, webová adresa je čitateľný názov, ktorý sa pomocou DNS prekladá na IP adresu.", 1],
                            ["IP adresa slúži len na prenos webových stránok, webová adresa identifikuje fyzické sieťové zariadenie.", 0],
                            ["IP adresa je vždy pevná a nemenná, zatiaľ čo webová adresa sa používa len dočasne počas pripojenia.", 0],
                            ["IP adresa určuje typ internetovej služby, zatiaľ čo webová adresa určuje rýchlosť sieťového pripojenia.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q39">
                <div class="question-container">
                    <p class="question">Akú funkciu má DNS (Domain Name Server)?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["DNS zabezpečuje preklad doménových (webových) mien na IP adresy, aby bolo možné nájsť správne zariadenie v sieti.", 1],
                            ["DNS zabezpečuje šifrovanie prenášaných dát medzi klientom a serverom počas komunikácie.", 0],
                            ["DNS určuje rýchlosť internetového pripojenia a prideľuje šírku pásma jednotlivým zariadeniam.", 0],
                            ["DNS ukladá obsah webových stránok a sprístupňuje ho používateľom na požiadanie.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q40">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi TCP a IP protokolom?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["IP protokol sa stará o adresovanie a smerovanie paketov v sieti, TCP zabezpečuje spoľahlivý prenos dát medzi koncovými zariadeniami.", 1],
                            ["TCP protokol slúži na prideľovanie IP adries zariadeniam, IP protokol riadi prenos dátových tokov.", 0],
                            ["IP protokol zabezpečuje šifrovanie komunikácie, TCP protokol určuje formát IP adries.", 0],
                            ["TCP a IP protokoly plnia rovnakú funkciu, líšia sa len názvom a historickým vývojom.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q41">
                <div class="question-container">
                    <p class="question">Kto/čo má pridelenú MAC adresu?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["MAC adresa je pridelená sieťovému rozhraniu (sieťovej karte) zariadenia a slúži na jeho jednoznačnú identifikáciu v lokálnej sieti.", 1],
                            ["MAC adresa je pridelená každému používateľovi siete na základe jeho prihlásenia do systému.", 0],
                            ["MAC adresa je pridelená každej IP adrese a mení sa pri každom sieťovom pripojení.", 0],
                            ["MAC adresa je pridelená každému sieťovému protokolu a určuje spôsob jeho komunikácie.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q42">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi adresovaním IP a IPv6?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["IPv4 používa 32-bitové adresy zapisované v desiatkovom tvare, IPv6 používa 128-bitové adresy zapisované v hexadecimálnom tvare.", 1],
                            ["IPv4 používa textové adresy založené na doménových menách, zatiaľ čo IPv6 používa čisto číselné adresy.", 0],
                            ["IPv4 adresy sú určené len pre lokálne siete, zatiaľ čo IPv6 adresy sa používajú výhradne na internete.", 0],
                            ["IPv4 a IPv6 používajú rovnakú veľkosť adries, líšia sa len spôsobom ich zápisu.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q43">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi HTTP a FTP?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["HTTP slúži na prenos webových stránok a súvisiacich dát, FTP je určený na prenos súborov medzi klientom a serverom.", 1],
                            ["HTTP sa používa len v lokálnych sieťach, FTP funguje výhradne na internete.", 0],
                            ["FTP zabezpečuje šifrovanie komunikácie, HTTP sa používa len na adresovanie serverov.", 0],
                            ["HTTP a FTP majú rovnaký účel, líšia sa len názvom protokolu a číslom portu.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q44">
                <div class="question-container">
                    <p class="question">Čo je to netiketa?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Netiketa je súbor pravidiel slušného správania na internete. Zahŕňa slušnosť, nešírenie spamu a hoaxov, rešpektovanie súkromia, vecnú diskusiu a obmedzenie emócií.", 1],
                            ["Netiketa je súbor technických pravidiel používania internetu. Zahŕňa nastavenie siete, ochranu zariadení, správu hesiel a zabezpečenie dát.", 0],
                            ["Netiketa je právny predpis platný na internete. Zahŕňa zákony o autorských právach, ochrane osobných údajov a trestnú zodpovednosť používateľov.", 0],
                            ["Netiketa je systém automatickej kontroly obsahu na internete. Zahŕňa filtrovanie príspevkov, blokovanie používateľov a odstraňovanie nevhodného obsahu.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q45">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi cloud computing a grid computing?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Cloud computing poskytuje výpočtové zdroje ako službu na požiadanie, grid computing spája viaceré distribuované počítače na riešenie jednej výpočtovej úlohy.", 1],
                            ["Cloud computing slúži len na ukladanie dát, grid computing slúži výhradne na zálohovanie systémov.", 0],
                            ["Grid computing funguje iba v lokálnej sieti, cloud computing je obmedzený na jeden fyzický server.", 0],
                            ["Cloud computing a grid computing označujú rovnaký princíp výpočtov, líšia sa len používanou terminológiou.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q46">
                <div class="question-container">
                    <p class="question">Pred akými troma rôznymi neželanými udalosťami chránime svoje dáta?</p>
                </div>
                <div class="multi-select-3-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5];
                        shuffle($order);

                        $answers = [
                            ["Strata dát.", 1],
                            ["Únik dát.", 1],
                            ["Pozmeňovanie dát.", 1],
                            ["Duplikovanie dát.", 0],
                            ["Zvýšenie veľkosti dát.", 0],
                            ["Zmena formátu dát.", 0]
                        ];

                        for ($i = 0; $i < 6; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 3)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q47">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi kryptografiou a steganografiou?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Kryptografia chráni obsah správy jej zašifrovaním, steganografia skrýva samotnú existenciu správy v inom médiu.", 1],
                            ["Kryptografia slúži na ukladanie dát, steganografia slúži na ich prenos po sieti.", 0],
                            ["Steganografia zabezpečuje šifrovanie správ, kryptografia skrýva dáta do obrázkov alebo zvuku.", 0],
                            ["Kryptografia a steganografia označujú rovnaký spôsob ochrany informácií, líšia sa len názvom techniky.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q48">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi šifrovaním symetrickým a asymetrickým?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Symetrické šifrovanie používa rovnaký kľúč na šifrovanie aj dešifrovanie správy, asymetrické používa verejný kľúč na šifrovanie a súkromný kľúč na dešifrovanie.", 1],
                            ["Symetrické šifrovanie sa používa len pre textové správy, asymetrické len pre súbory a dokumenty.", 0],
                            ["Asymetrické šifrovanie je vždy rýchlejšie než symetrické a nevyžaduje výmenu kľúčov.", 0],
                            ["Symetrické a asymetrické šifrovanie sú rovnaké, líšia sa len použitým algoritmom, nie princípom kľúča.", 0],
                        ];

                        for ($i = 0; $i < 4; $i++) { 
                            echo "<div class='choice' onclick='answer(this)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q49">
                <div class="question-container">
                    <p class="question">Vymenujte aspoň 4 druhy útoku na cudzí počítač/systém.</p>
                </div>
                <div class="multi-select-4-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5, 6, 7];
                        shuffle($order);

                        $answers = [
                            ["Neoprávnený prístup (hacknutie účtu).", 1],
                            ["DoS útok (Denial of Service).", 1],
                            ["Phishing.", 1],
                            ["Červy, vírusy, trójske kone.", 1],
                            ["Zálohovanie dát.", 0],
                            ["Aktualizácia systému.", 0],
                            ["Šifrovanie komunikácie.", 0],
                            ["Používanie antivírusu.", 0]
                        ];

                        for ($i = 0; $i < 8; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 4)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q50">
                <div class="question-container">
                    <p class="question">Vymenujte aspoň tri opatrenia ako zariadiť, aby systém bol odolnejší proti neoprávneným používateľom.</p>
                </div>
                <div class="multi-select-4-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5, 6, 7];
                        shuffle($order);

                        $answers = [
                            ["Používať silné heslá a ich pravidelnú zmenu.", 1],
                            ["Šifrovať dátové prenosy (HTTPS, VPN).", 1],
                            ["Aktualizovať systém a aplikácie (záplaty – patch).", 1],
                            ["Blokovať obrazovku pri nečinnosti (heslo na screen saver).", 1],
                            ["Pravidelne reštartovať počítač po ukončení práce.", 0],
                            ["Používať moderný hardvér s vyšším výkonom.", 0],
                            ["Zvyšovať kapacitu úložiska pre používateľské dáta.", 0],
                            ["Inštalovať doplnkové aplikácie na rozšírenie funkcií systému.", 0]
                        ];

                        for ($i = 0; $i < 8; $i++) { 
                            echo "<div class='choice' onclick='pick(this, 4)' ";
                            if ($answers[$order[$i]][1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $answers[$order[$i]][0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div id="score-container">
                <p id="score">0/10</p>
            </div>
            <footer>
                <div class="question-num">
                    <p id="question-counter">Kérdés: 1/10</p>
                </div>
                <div class="next-button">
                    <button onclick="nextQuestion()" id="next">Következő &rarr;</button>
                </div>
            </footer>
        </section>
    </body>
</html>