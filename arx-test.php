<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>ARX Teszt</title>
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

            form {
                width: 90%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            input {
                width: 90%;
                border-radius: 10px;
                text-align: center;
                padding: 30px;
                background-color: #1E2227;
                border: 2px solid #454951;
                box-sizing: border-box;
                color: whitesmoke;
                font-size: 1.5rem;
                margin-bottom: 30px;
            }

            table {
                border-collapse: collapse;
            }

            td, th {
                border: 2px solid #454951;
                padding: 5px;
                text-align: center;
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

            .question-container-tall {
                width: 100%;
                height: 45%;
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
                background-color: #282C34;
                border-radius: 20px;
            }

            .question {
                font-size: 1.3rem;
                user-select: none;
                text-align: center;
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

            .order-5-container {
                height: 85%;
                display: grid;
                grid-template-rows: 20% 20% 20% 20% 20%;
                grid-template-columns: 100%;
            }

            .form-container {
                height: 85%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .form-container-short {
                height: 55%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
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

            .feedback {
                font-size: 1.2rem;
                padding: 10px;
                text-align: center;
            }

            #answer-button {
                width: 20%;
                padding: 20px;
                box-sizing: border-box;
                background-color: #282C34;
                color: whitesmoke;
                border-radius: 10px;
                box-shadow: 5px 10px 10px #1E2227;
                border: 1px solid #282C34;
                font-size: 1.3rem;
                transition: 0.2s;
            }

            #answer-button:hover {
                box-shadow: 1px 1px 1px #1E2227;
                border: 1px solid #454951;
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
            #q41, #q42, #q43, #q44, #q45, #q46, #q47 {
                display: none;
            }

            @media (max-width: 900px) {
                body {
                    height: auto;
                }

                h1 {
                    font-size: 10vw;
                }

                .question > code {
                    font-size: 1rem;
                }

                .question-container {
                    padding: 20px;
                    box-sizing: border-box;
                }

                .question {
                    line-height: 150%;
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

                .form-container, .form-container-short {
                    margin-top: 30px;
                }

                .question-container-tall > table {
                    margin-bottom: 30px;
                }

                #next {
                    font-size: 1.1rem;
                }

                #points {
                    font-size: 3vw;
                }

                #answer-button {
                    width: 80%;
                }
            }
        </style>
    </head>
    <body>
        <script src="arx-test.js"></script>
        <header>
            <a id="back" href="index.html">&larr;</a>
            <h1>Teszt</h1>
            <p id="points">Pontszám: 0/10</p>
        </header>
        <section>
            <!-- 2. & 3. Prednáška -->
            <div class="container" id="q1">
                <?php
                    $start = strtotime("1900-01-01");
                    $end = strtotime("2030-12-31");

                    $randomTimestamp = rand($start, $end);
                    $randomDate = date("j.n.Y", $randomTimestamp);

                    function toRoman($number) {
                        $map = [
                            'M'  => 1000,
                            'CM' => 900,
                            'D'  => 500,
                            'CD' => 400,
                            'C'  => 100,
                            'XC' => 90,
                            'L'  => 50,
                            'XL' => 40,
                            'X'  => 10,
                            'IX' => 9,
                            'V'  => 5,
                            'IV' => 4,
                            'I'  => 1
                        ];

                        $result = '';
                        foreach ($map as $roman => $value) {
                            while ($number >= $value) {
                                $result .= $roman;
                                $number -= $value;
                            }
                        }
                        return $result;
                    }

                    $day = (int)date("j", $randomTimestamp);
                    $month = (int)date("n", $randomTimestamp);
                    $year = (int)date("Y", $randomTimestamp);

                    $romanDate = toRoman($day) . "." . toRoman($month) . "." . toRoman($year);
                ?>
                <div class="question-container">
                    <p class="question">Napíšte dátum rímskymi číslicami: <code><?= $randomDate ?></code></p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer1">
                    <button id="answer-button" onclick="checkAnswer(1, 'roman')">Beadás</button>
                    <p class="feedback" id="feedback1">&nbsp;</p>
                    <input type="hidden" id="correct-answer1" value="<?= $romanDate ?>">
                </div>
            </div>
            <div class="container" id="q2">
                <?php
                    $hexDigits = '0123456789ABCDEF';

                    $hex = '';
                    for ($i = 0; $i < 3; $i++) {
                        $hex .= $hexDigits[rand(0, 15)];
                    }

                    $binary = '';
                    for ($i = 0; $i < 3; $i++) {
                        $binary .= str_pad(
                            decbin(hexdec($hex[$i])),
                            4,
                            '0',
                            STR_PAD_LEFT
                        );
                    }
                ?>
                <div class="question-container">
                    <p class="question">Preveďte hexadecimálne číslo do binárneho tvaru: <code><?= $hex ?></code></p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer2">
                    <button id="answer-button" onclick="checkAnswer(2, 'num')">Beadás</button>
                    <p class="feedback" id="feedback2">&nbsp;</p>
                    <input type="hidden" id="correct-answer2" value="<?= $binary ?>">
                </div>
            </div>
            <div class="container" id="q3">
                <?php
                    $binary = '';
                    for ($i = 0; $i < 9; $i++) {
                        $binary .= rand(0, 1);
                    }

                    $octal = base_convert($binary, 2, 8);
                ?>
                <div class="question-container">
                    <p class="question">Preveďte binárne číslo do osmičkovej sústavy: <code><?= $binary ?></code></p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer3">
                    <button id="answer-button" onclick="checkAnswer(3, 'num')">Beadás</button>
                    <p class="feedback" id="feedback3">&nbsp;</p>
                    <input type="hidden" id="correct-answer3" value="<?= $octal ?>">
                </div>
            </div>
            <div class="container" id="q4">
                <?php
                    $octal = '';
                    for ($i = 0; $i < 4; $i++) {
                        $octal .= rand(0, 7);
                    }

                    $binary = '';
                    for ($i = 0; $i < 4; $i++) {
                        $binary .= str_pad(
                            decbin(octdec($octal[$i])),
                            3,
                            '0',
                            STR_PAD_LEFT
                        );
                    }
                ?>
                <div class="question-container">
                    <p class="question">Preveďte osmičkové číslo do binárnej sústavy: <code><?= $octal ?></code></p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer4">
                    <button id="answer-button" onclick="checkAnswer(4, 'num')">Beadás</button>
                    <p class="feedback" id="feedback4">&nbsp;</p>
                    <input type="hidden" id="correct-answer4" value="<?= $binary ?>">
                </div>
            </div>
            <div class="container" id="q5">
                <?php
                    $binary = '';
                    for ($i = 0; $i < 12; $i++) {
                        $binary .= rand(0, 1);
                    }

                    $hex = strtoupper(base_convert($binary, 2, 16));
                ?>
                <div class="question-container">
                    <p class="question">Preveďte binárne číslo do hexadecimálnej sústavy: <code><?= $binary ?></code></p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer5">
                    <button id="answer-button" onclick="checkAnswer(5, 'hex')">Beadás</button>
                    <p class="feedback" id="feedback5">&nbsp;</p>
                    <input type="hidden" id="correct-answer5" value="<?= $hex ?>">
                </div>
            </div>
            <div class="container" id="q6">
                <?php
                    $decimal = rand(10, 99);
                    $binary = decbin($decimal);
                ?>
                <div class="question-container">
                    <p class="question">Preveďte desiatkové číslo do binárnej sústavy: <code><?= $decimal ?></code></p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer6">
                    <button id="answer-button" onclick="checkAnswer(6, 'num')">Beadás</button>
                    <p class="feedback" id="feedback6">&nbsp;</p>
                    <input type="hidden" id="correct-answer6" value="<?= $binary ?>">
                </div>
            </div>
            <div class="container" id="q7">
                <?php
                    $length = rand(5, 8);
                    $binary = '';
                    for ($i = 0; $i < $length; $i++) {
                        $binary .= rand(0, 1);
                    }
                    $decimal = bindec($binary);
                ?>
                <div class="question-container">
                    <p class="question">Preveďte binárne číslo do desiatkovej sústavy: <code><?= $binary ?></code></p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer7">
                    <button id="answer-button" onclick="checkAnswer(7, 'num')">Beadás</button>
                    <p class="feedback" id="feedback7">&nbsp;</p>
                    <input type="hidden" id="correct-answer7" value="<?= $decimal ?>">
                </div>
            </div>
            <div class="container" id="q8">
                <div class="question-container">
                    <p class="question">O koľko je jeden kibibajt väčší než jeden kilobajt?</p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer8">
                    <button id="answer-button" onclick="checkAnswer(8, 'num')">Beadás</button>
                    <p class="feedback" id="feedback8">&nbsp;</p>
                    <input type="hidden" id="correct-answer8" value="24">
                </div>
            </div>
            <div class="container" id="q9">
                <div class="question-container">
                    <p class="question">Spomeňte informácie ktoré obsahuje stavový register (status register) vo výpočtovej jednotke procesora. [4]</p>
                </div>
                <div class="multi-select-4-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5, 6, 7];
                        shuffle($order);

                        $answers = [
                            ["<b>Carry bit (C)</b> - pretečenie do vyššieho bitu pri sčítaní.", 1],
                            ["<b>Overflow bit (V / O)</b> - znamená prekročenie rozsahu znamienkového čísla.", 1],
                            ["<b>Zero flag (Z)</b> - výsledok operácie je nula.", 1],
                            ["<b>Negative flag (N)</b> - výsledok je záporný", 1],
                            ["<b>Instruction pointer (IP)</b> – uchováva adresu nasledujúcej inštrukcie.", 0],
                            ["<b>Program counter flag (PCF)</b> – signalizuje dokončenie cyklu programu.", 0],
                            ["<b>Memory access bit (MAB)</b> – označuje platnosť prístupu do pamäti.", 0],
                            ["<b>Execution mode flag (EM)</b> – udáva, či procesor beží v režime užívateľa alebo kernel.", 0]
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
            <div class="container" id="q10">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi semiotikou a lingvistikou?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Semiotika skúma znaky a ich význam všeobecne, lingvistika sa špecificky zaoberá ľudským jazykom a jeho štruktúrou.", 1],
                            ["Semiotika skúma len vizuálne symboly a ich význam, lingvistika sa údajne zaoberá všetkými znakmi a ich použitím.", 0],
                            ["Lingvistika skúma znaky a symboly komunikácie, semiotika sa špecificky zaoberá gramatikou jazyka a jeho pravidlami.", 0],
                            ["Semiotika a lingvistika sú dve odlišné vedy, jedna skúma znaky a symboly, druhá jazyk a jeho základnú štruktúru.", 0],
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
            <div class="container" id="q11">
                <?php
                    $ops = ['+', '-', '*', '/'];

                    $a = rand(1, 9);
                    $b = rand(1, 9);
                    $c = rand(1, 9);

                    $op1 = $ops[array_rand($ops)];
                    $op2 = $ops[array_rand($ops)];

                    $pattern = rand(0, 1);

                    if ($pattern == 0) {
                        $infix = "($a $op1 $b) $op2 $c";
                        $prefix = "$op2 $op1 $a $b $c";
                    } else {
                        $infix = "$a $op1 ($b $op2 $c)";
                        $prefix = "$op1 $a $op2 $b $c";
                    }
                ?>
                <div class="question-container">
                    <p class="question">Vyjadrite daný výraz v poľskej (prefixovej) notácii: <code><?= $infix ?></code></p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer11">
                    <button id="answer-button" onclick="checkAnswer(11, 'prefix')">Beadás</button>
                    <p class="feedback" id="feedback11">&nbsp;</p>
                    <input type="hidden" id="correct-answer11" value="<?= $prefix ?>">
                </div>
            </div>
            <div class="container" id="q12">
                <?php
                    function countOnes($bin) {
                        return substr_count($bin, '1');
                    }

                    $rows = [];
                    $errorIndex = rand(0, 3);

                    for ($i = 0; $i < 4; $i++) {
                        $data = '';
                        for ($j = 0; $j < 6; $j++) {
                            $data .= rand(0, 1);
                        }

                        $ones = countOnes($data);
                        $isEven = ($ones % 2 == 0);

                        $parity = $isEven ? 1 : 0;

                        if ($i == $errorIndex) {
                            $parity = $parity == 1 ? 0 : 1;
                        }

                        $rows[] = [
                            'data' => $data,
                            'ones' => $ones,
                            'parity' => $parity
                        ];
                    }
                ?>
                <div class="question-container-tall">
                    <p class="question">Na ktorom (jedinom) riadku indikuje paritný bit chybu v dátach?</p>
                    <table>
                        <tr>
                            <th>Riadok</th>
                            <th>Dáta</th>
                            <th>Paritný bit</th>
                        </tr>
                        <?php foreach ($rows as $i => $row): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= $row['data'] ?></td>
                            <td><?= $row['parity'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="form-container-short">
                    <input type="text" id="user-answer12" placeholder="Zadajte číslo riadku s chybou:">
                    <button id="answer-button" onclick="checkAnswer(12, 'num')">Beadás</button>
                    <p class="feedback" id="feedback12">&nbsp;</p>
                    <input type="hidden" id="correct-answer12" value="<?= $errorIndex + 1 ?>">
                </div>
            </div>
            <!-- 4. Prednáška -->
            <div class="container" id="q13">
                <div class="question-container">
                    <p class="question">Aký je rozdiel v materiáli medzi polovodičom typu P a typu N?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Polovodič typu P vzniká dopovaním kremíka trojmocným prvkom s dierami ako nosičmi, typ N je dopovaný päťmocným prvkom s voľnými elektrónmi.", 1],
                            ["Polovodič typu P vzniká dopovaním kremíka päťmocným prvkom s voľnými elektrónmi, zatiaľ čo typ N je dopovaný trojmocným prvkom s dierami.", 0],
                            ["Polovodič typu P vzniká dopovaním kremíka špeciálnym izolačným prvkom bez nosičov náboja, typ N využíva rovnaký materiál bez zmeny vlastností.", 0],
                            ["Polovodič typu P vzniká z čistého kremíka bez prímesí s neutrálnymi nosičmi, zatiaľ čo typ N je vytvorený iba zmenou elektrického poľa.", 0],
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
                    <p class="question">Ako vzniká v polovodiči vedenie elektrického prúdu pomocou dier?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Vedenie prúdu pomocou dier vzniká tak, že presun elektrónu zaplní jednu dieru a vytvorí inú, čo sa prejaví ako pohyb kladného náboja opačným smerom.", 1],
                            ["Vedenie prúdu pomocou dier vzniká tak, že sa samotné diery fyzicky presúvajú v kryštálovej mriežke materiálu rovnakým smerom ako elektróny.", 0],
                            ["Vedenie prúdu pomocou dier vzniká vtedy, keď sa kladné ióny pohybujú v polovodiči medzi atómami kremíka a prenášajú elektrický náboj.", 0],
                            ["Vedenie prúdu pomocou dier vzniká zapojením vonkajšieho elektrického napätia, ktoré spôsobí tok kladných častíc bez účasti elektrónov.", 0],
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
                    <p class="question">Aký je rozdiel medzi bipolárnym a unipolárnym tranzistorom?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Bipolárny tranzistor je riadený prúdom a využíva elektróny aj diery ako nosiče, unipolárny tranzistor je riadený elektrickým poľom a používa iba jeden typ nosiča.", 1],
                            ["Bipolárny tranzistor je riadený napätím a používa iba jeden typ nosiča, zatiaľ čo unipolárny tranzistor je riadený prúdom a využíva oba typy nosičov.", 0],
                            ["Bipolárny tranzistor pracuje na princípe elektrického poľa bez vstupného prúdu, zatiaľ čo unipolárny tranzistor vyžaduje bázový prúd na riadenie.", 0],
                            ["Bipolárny tranzistor a unipolárny tranzistor sa líšia len tvarom zapojenia vývodov, pričom spôsob riadenia prúdu je v oboch prípadoch rovnaký.", 0],
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
                    <p class="question">Čo znamená skratka MOS pri tranzistoroch?</p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer16">
                    <button id="answer-button" onclick="checkAnswer(16, 'text')">Beadás</button>
                    <p class="feedback" id="feedback16">&nbsp;</p>
                    <input type="hidden" id="correct-answer16" value="Metal Oxide Semiconductor">
                </div>
            </div>
            <div class="container" id="q17">
                <div class="question-container">
                    <p class="question">Čo znamená skratka CMOS pri tranzistoroch?</p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer17">
                    <button id="answer-button" onclick="checkAnswer(17, 'text')">Beadás</button>
                    <p class="feedback" id="feedback17">&nbsp;</p>
                    <input type="hidden" id="correct-answer17" value="Complementary MOS">
                </div>
            </div>
            <div class="container" id="q18">
                <div class="question-container">
                    <p class="question">Čo znamená skratka FET pri tranzistoroch?</p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer18">
                    <button id="answer-button" onclick="checkAnswer(18, 'text')">Beadás</button>
                    <p class="feedback" id="feedback18">&nbsp;</p>
                    <input type="hidden" id="correct-answer18" value="Field Effect Transistor">
                </div>
            </div>
            <div class="container" id="q19">
                <div class="question-container">
                    <p class="question">Čo znamená skratka SMD pri montáži elektronických zariadení?</p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer19">
                    <button id="answer-button" onclick="checkAnswer(19, 'text')">Beadás</button>
                    <p class="feedback" id="feedback19">&nbsp;</p>
                    <input type="hidden" id="correct-answer19" value="Surface Mounted Device">
                </div>
            </div>
            <div class="container" id="q20">
                <div class="question-container">
                    <p class="question">Čo znamená skratka PCB pri montáži elektronických zariadení?</p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer20">
                    <button id="answer-button" onclick="checkAnswer(20, 'text')">Beadás</button>
                    <p class="feedback" id="feedback20">&nbsp;</p>
                    <input type="hidden" id="correct-answer20" value="Printed Circuit Board">
                </div>
            </div>
            <!-- 5. Prednáška -->
            <div class="container" id="q21">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi kombinačným a sekvenčným logickým obvodom?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Kombinačný obvod má výstupy závislé len od vstupov bez pamäti, sekvenčný obvod závisí od vstupov aj vnútorného stavu.", 1],
                            ["Kombinačný obvod má výstupy závislé od vnútorného stavu a pamäte, sekvenčný obvod má výstupy závislé len od vstupov bez stavových prvkov.", 0],
                            ["Kombinačný obvod sa používa iba na aritmetické a logické operácie, sekvenčný obvod sa používa iba na registre a čítače.", 0],
                            ["Kombinačný obvod a sekvenčný obvod sa líšia len rýchlosťou prepínania a oba môžu obsahovať pamäťové prvky a závislosť na hodinách.", 0],
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
                    <p class="question">Aký je rozdiel medzi logickým obvodom typu D (data latch) a T (trigger)?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Obvod typu D ukladá hodnotu vstupu pri aktivácii hodiniek, obvod typu T mení svoj stav pri každom pulze hodiniek.", 1],
                            ["Obvod typu D mení svoj stav pri každom pulze hodiniek, obvod typu T ukladá hodnotu vstupu iba pri aktivácii hodiniek.", 0],
                            ["Obvod typu D a T sa líšia len rýchlosťou prepínania a oba reagujú nezávisle od hodiniek a vstupov.", 0],
                            ["Obvod typu D ukladá stav pomocou vonkajšieho napätia, obvod typu T pracuje bez akéhokoľvek vstupného signálu.", 0],
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
            <div class="container" id="q23">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi registrom posuvným a paralelným?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Posuvný register prenáša dáta postupne po jednotlivých bitoch, paralelný register umožňuje zápis a čítanie všetkých bitov naraz.", 1],
                            ["Posuvný register zapisuje a číta všetky bity naraz, paralelný register prenáša dáta postupne po jednotlivých bitoch.", 0],
                            ["Posuvný a paralelný register sa líšia len veľkosťou pamäte, pričom oba pracujú rovnakým spôsobom a prenášajú bity naraz.", 0],
                            ["Posuvný register prenáša dáta pomocou vonkajšieho signálu bez ohľadu na poradie bitov, paralelný register ignoruje hodinové pulzy a mení stav náhodne.", 0],
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
                    <p class="question">Uveďte päť prvkov, ktoré definujú štruktúru Moorovho automatu.</p>
                </div>
                <div class="multi-select-4-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5, 6, 7];
                        shuffle($order);

                        $answers = [
                            ["Množina stavov <code>𝑆</code>", 1],
                            ["Vstupná abeceda <code>&Sigma;</code>", 1],
                            ["Výstupná abeceda <code>&Lambda;</code>", 1],
                            ["Prechodová funkcia <code>&delta; : 𝑆 × &Sigma;</code> &rarr; <code>𝑆</code>", 1],
                            ["Výstupná funkcia <code>&omega; : 𝑆</code> &rarr; <code>&Lambda;</code>", 1],
                            ["Výstupná funkcia závislá na vstupe <code>&delta;' : 𝑆 × &Sigma;</code> &rarr; <code>&Lambda;</code>", 0],
                            ["Riadiaca jednotka <code>&Gamma;</code>", 0],
                            ["Pamäťový register <code>R</code>", 0]
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
            <!-- 6. Prednáška -->
            <div class="container" id="q25">
                <div class="question-container">
                    <p class="question">Aké typy pamäte obsahuje počítač?</p>
                </div>
                <div class="multi-select-4-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5, 6, 7];
                        shuffle($order);

                        $answers = [
                            ["Registre procesora", 1],
                            ["Vyrovnávacia pamäť (Cache)", 1],
                            ["Hlavná (operačná) pamäť – RAM", 1],
                            ["Vonkajšie pamäte – SSD, HDD, optické disky", 1],
                            ["Flash pamäť – hybrid RAM", 0],
                            ["Magnetická pamäť", 0],
                            ["Segmentovaná ROM", 0],
                            ["Trvalá cache", 0]
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
            <div class="container" id="q26">
                <div class="question-container">
                    <p class="question">Aký je rozdiel medzi registrom posuvným a paralelným?</p>
                </div>
                <div class="multiple-choice-3-container">
                    <?php 
                        $order = [0, 1, 2];
                        shuffle($order);

                        $answers = [
                            ["Vyrovnávacia pamäť cache slúži na preklenutie rozdielu medzi rýchlosťou procesora a pomalšou hlavnou pamäťou a ukladá často používané dáta a inštrukcie pre rýchly prístup.", 1],
                            ["Vyrovnávacia pamäť cache slúži na uchovávanie všetkých súborov operačného systému a dočasných inštrukcií, aby procesor nemusel priamo pristupovať k hlavnej pamäti RAM.", 0],
                            ["Vyrovnávacia pamäť cache slúži na predbežnú kompresiu a načítanie dát pred odoslaním do hlavnej pamäte, čím sa znižuje objem prenášaných bitov a zvyšuje sa rýchlosť spracovania.", 0],
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
            <div class="container" id="q27">
                <div class="question-container">
                    <p class="question">Čo je to volatilná pamäť a čo je to dynamická pamäť?</p>
                </div>
                <div class="multiple-choice-3-container">
                    <?php 
                        $order = [0, 1, 2];
                        shuffle($order);

                        $answers = [
                            ["Volatilná pamäť stratí svoj obsah po vypnutí napájania a slúži na dočasné uchovávanie dát počas behu programu, dynamická pamäť používa kondenzátory a vyžaduje pravidelné obnovenie obsahu.", 1],
                            ["Volatilná pamäť uchováva svoj obsah aj po vypnutí napájania a slúži na trvalé uchovanie všetkých dát, dynamická pamäť nevyžaduje obnovenie a funguje ako statická operačná pamäť.", 0],
                            ["Volatilná pamäť používa kondenzátory a vyžaduje pravidelné dopĺňanie náboja pre udržanie obsahu, dynamická pamäť stratí svoj obsah po vypnutí napájania a slúži iba na dočasné ukladanie dát.", 0],
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
            <div class="container" id="q28">
                <div class="question-container">
                    <p class="question">Aké dve základné funkcie (a potom ich rôzne kombinácie) realizuje RAID?</p>
                </div>
                <div class="multiple-choice-3-container">
                    <?php 
                        $order = [0, 1, 2];
                        shuffle($order);

                        $answers = [
                            ["Základné funkcie RAID sú ochrana proti strate dát pomocou redundancie a zvýšenie rýchlosti čítania a zápisu rozdeľovaním dát medzi viac diskov pre vyšší výkon.", 1],
                            ["Základné funkcie RAID sú iba ukladanie dát na jeden disk bez redundancie a obmedzenie prístupu používateľov na vybrané súbory pre zníženie rizika straty dát a zlepšenie bezpečnosti.", 0],
                            ["Základné funkcie RAID sú správa diskov bez redundancie a sledovanie teploty a napätia diskov, aby sa predchádzalo poruchám a zlepšovala spoľahlivosť celého systému.", 0],
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
            <!-- 7. Prednáška -->
            <div class="container" id="q29">
                <div class="question-container">
                    <p class="question">Vyber ktoré časti musí obsahovať procesor. [4]</p>
                </div>
                <div class="multi-select-4-container">
                    <?php 
                        $correct = [
                            "Riadiaca jednotka (CU – Control Unit)",
                            "Aritmeticko-logická jednotka (ALU)",
                            "Množina registrov",
                            "Akumulátor",
                            "Register stavového slova (flags register)",
                            "Program Counter (PC)",
                            "Stack Pointer (SP)",
                            "Zbernice"
                        ];

                        $incorrect = [
                            "Grafický procesor (GPU – Graphics Processing Unit)",
                            "Sieťová karta (NIC – Network Interface Card)",
                            "Diskový radič (Disk Controller)",
                            "Zvuková karta (Audio Processing Unit)"
                        ];

                        $correct_keys = array_rand($correct, 4);
                        $chosen_correct = [];
                        foreach($correct_keys as $key) {
                            $chosen_correct[] = [$correct[$key], 1];
                        }

                        $chosen_incorrect = [];
                        foreach($incorrect as $inc) {
                            $chosen_incorrect[] = [$inc, 0];
                        }

                        $answers = array_merge($chosen_correct, $chosen_incorrect);
                        shuffle($answers);

                        foreach($answers as $ans) {
                            echo "<div class='choice' onclick='pick(this, 4)' ";
                            if ($ans[1] == 1) {
                                echo "data-answer='correct'><p class='answer'>";
                            } else {
                                echo "data-answer='incorrect'><p class='answer'>";
                            }
                            echo $ans[0] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q30">
                <div class="question-container">
                    <p class="question">Z akých krokov pozostáva inštrukčný cyklus procesora pre spočítanie obsahu dvoch registrov?</p>
                </div>
                <div class="order-5-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4];
                        shuffle($order);

                        $answers = [
                            "Výber inštrukcie z pamäte <b>(fetch)</b>",
                            "Dekódovanie inštrukcie <b>(decode)</b>",
                            "Výber operandov z registrov",
                            "Vykonanie operácie v ALU <b>(execute)</b>",
                            "Zápis výsledku do registra <b>(write-back)</b>"
                        ];

                        for ($i = 0; $i < 5; $i++) { 
                            echo "<div class='choice orderedChoice' onclick='orderedAnswer(this)' ";
                            echo "data-index='" .$order[$i] . "'><p class='answer'>";
                            echo $answers[$order[$i]] . "</p></div>";
                        }
                    ?>
                </div>
            </div>
            <div class="container" id="q31">
                <div class="question-container">
                    <p class="question">Čo je to register stack pointer v procesore a na čo slúži?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Stack pointer je register, ktorý uchováva adresu vrcholu zásobníka v pamäti a riadi ukladanie a vyberanie návratových adries a dát princípom LIFO.", 1],
                            ["Stack pointer je register, ktorý ukladá aktuálnu adresu vykonávanej inštrukcie a zabezpečuje plynulé pokračovanie programu po skoku alebo prerušení.", 0],
                            ["Stack pointer je register, ktorý riadi presun dát medzi registrami a hlavnou pamäťou pri aritmetických a logických operáciách.", 0],
                            ["Stack pointer je register, ktorý uchováva počiatočnú adresu programu a určuje poradie vykonávania inštrukcií v procesore.", 0],
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
                    <p class="question">Aký je rozdiel medzi CISC a RISC?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["CISC používa veľký a zložitý súbor inštrukcií vykonávaných často na viac taktov, RISC má jednoduché inštrukcie optimalizované na rýchle vykonanie.", 1],
                            ["CISC aj RISC architektúry sa líšia len názvom inštrukcií a spôsobom ich zápisu, pričom samotné vykonávanie inštrukcií a vnútorná organizácia procesora zostávajú rovnaké.", 0],
                            ["CISC architektúra využíva menší počet jednoduchých inštrukcií, RISC pracuje so zložitejšími operáciami, ktoré sú rozdelené do viacerých krokov procesora.", 0],
                            ["CISC procesory sú navrhnuté predovšetkým pre úsporu energie a jednoduché riadenie, RISC procesory kladú dôraz na kompatibilitu so staršími architektúrami.", 0],
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
                    <p class="question">Čo je to špekulatívne vykonávanie inštrukcií?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Špekulatívne vykonávanie je technika zvyšovania výkonu, pri ktorej procesor vykonáva inštrukcie dopredu ešte pred vyhodnotením podmienky a nesprávne vetvy následne zahodí.", 1],
                            ["Špekulatívne vykonávanie je spôsob riadenia programu, pri ktorom procesor čaká na vyhodnotenie podmienky a až potom začne vykonávať príslušnú vetvu.", 0],
                            ["Špekulatívne vykonávanie označuje techniku, kde procesor vykonáva vždy len jednu vetvu programu a výsledok podmienky sa zisťuje až po dokončení inštrukcií.", 0],
                            ["Špekulatívne vykonávanie je mechanizmus, pri ktorom sa inštrukcie vykonávajú postupne bez predbežného spracovania, aby sa zabránilo zbytočnému výpočtu.", 0],
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
                    <p class="question">Čo je to pipelining, ako pracuje trojstupňový?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Pipelining je technika spracovania, pri ktorej sa inštrukcie vykonávajú paralelne v rôznych fázach, pričom trojstupňový pipeline pozostáva z fáz fetch, decode a execute.", 1],
                            ["Pipelining je spôsob vykonávania, kde sa každá inštrukcia spracuje až po úplnom dokončení predchádzajúcej, pričom trojstupňový pipeline obsahuje fázy fetch, decode a execute.", 0],
                            ["Pipelining označuje techniku, pri ktorej sa viac inštrukcií vykonáva súčasne v jednej fáze, pričom trojstupňový pipeline zahŕňa fázy fetch, execute a write-back.", 0],
                            ["Pipelining je metóda riadenia procesora, pri ktorej sa inštrukcie spracúvajú postupne bez prekrývania fáz, pričom trojstupňový pipeline má fázy fetch, decode a execute.", 0],
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
                    <p class="question" style="text-align: center;">Ako spôsobí inštrukcia skoku narušenie prúdového spracovania inštrukcií a ako to vyrieši zavedenie inštrukcie obsahujúcej podmienku vykonania?</p>
                </div>
                <div class="multiple-choice-3-container">
                    <?php 
                        $order = [0, 1, 2];
                        shuffle($order);

                        $answers = [
                            ["Inštrukcia skoku naruší pipeline tým, že prednačítané inštrukcie sú z nesprávnej adresy, čo sa rieši podmieneným vykonávaním, kde sa inštrukcie pri neplatnej podmienke len preskočia bez skoku.", 1],
                            ["Inštrukcia skoku naruší pipeline tým, že procesor musí zastaviť vykonávanie, pričom podmienené inštrukcie riešia problém tým, že sa vykonávajú vždy bez ohľadu na výsledok podmienky.", 0],
                            ["Inštrukcia skoku nemá vplyv na pipeline, pretože procesor vždy načítava správne inštrukcie, a podmienené vykonávanie slúži len na zjednodušenie programu.", 0],
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
            <div class="container" id="q36">
                <div class="question-container">
                    <p class="question" style="text-align: center;">Čo je to vektor-adresa prerušenia, aká je to informácia a kedy sa použije?</p>
                </div>
                <div class="multiple-choice-3-container">
                    <?php 
                        $order = [0, 1, 2];
                        shuffle($order);

                        $answers = [
                            ["Vektor prerušenia je pevne určená pamäťová adresa, na ktorú procesor skočí po vzniku prerušenia, aby vykonal obslužný program a po jeho skončení sa vrátil k pôvodnému programu.", 1],
                            ["Vektor prerušenia predstavuje obsah špeciálneho registra procesora, ktorý určuje prioritu prerušenia, riadi poradie spracovania viacerých úloh a môže ovplyvniť plánovanie vykonávania inštrukcií v celom systéme.", 0],
                            ["Vektor prerušenia je dynamicky prideľovaná pamäťová oblasť, ktorú procesor používa počas vykonávania bežných inštrukcií na dočasné ukladanie výsledkov, stavov a medzivýsledkov výpočtov, aby sa zjednodušila správa dát.", 0],
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
            <div class="container" id="q37">
                <div class="question-container">
                    <p class="question">Kvôli čomu procesor obsahuje aspoň dva rôzne pracovné režimy user mode a kernel mode?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Procesor má user a kernel režim, aby zabezpečil ochranu systému a stabilitu, pričom kernel má plný prístup a user režim umožňuje aplikáciám len obmedzený prístup cez systémové volania.", 1],
                            ["Procesor má user a kernel režim, aby sa rozlišovala práca aplikácií a operačného systému, kde kernel vykonáva všetky riadiace inštrukcie a user len bežné operácie programu.", 0],
                            ["Procesor používa user a kernel režim, aby kontroloval prístup k hardvéru a pamäti, kde kernel môže meniť registre a user môže vykonávať iba bezpečné operácie cez systémové volania.", 0],
                            ["Procesor obsahuje user a kernel režim, aby sa zvýšila stabilita a bezpečnosť systému, kde kernel spravuje kritické úlohy a user pracuje len s obmedzenými operáciami aplikácií.", 0],
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
            <div class="container" id="q38">
                <div class="question-container">
                    <p class="question" style="text-align: center;">Aký je rozdiel medzi Princetonskou a Harvardskou architektúrou počítačov?</p>
                </div>
                <div class="multiple-choice-3-container">
                    <?php 
                        $order = [0, 1, 2];
                        shuffle($order);

                        $answers = [
                            ["Princetonská architektúra používa spoločnú pamäť pre program aj dáta, čo je jednoduchšie a bežne sa používa v počítačoch, Harvardská má oddelenú pamäť pre inštrukcie a dáta pre vyšší výkon v mikrokontroléroch.", 1],
                            ["Princetonská architektúra používa oddelenú pamäť pre program a dáta, čo je zložitejšie a využíva sa hlavne v mikrokontroléroch, Harvardská architektúra spája pamäť pre inštrukcie aj dáta pre zjednodušenie spracovania v počítačoch a notebookoch.", 0],
                            ["Princetonská architektúra vyžaduje viac riadiacich jednotiek a zložitejšiu koordináciu, zatiaľ čo Harvardská architektúra kombinuje program aj dáta v jednej pamäti, čo je efektívnejšie pre bežné počítače, notebooky a jednoduché mikrokontroléry.", 0],
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
            <div class="container" id="q39">
                <div class="question-container">
                    <p class="question">Čo je to Flynnova klasifikácia počítačov a uveďte aspoň dva príklady</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Flynnova klasifikácia rozdeľuje počítače podľa počtu inštrukčných a dátových tokov a ukazuje, ktoré systémy používajú jednojadrové, paralelné alebo grafické procesory.", 1],
                            ["Flynnova klasifikácia rozdeľuje počítače podľa veľkosti pamäte a rýchlosti procesora a ukazuje, ktoré systémy používajú malé, veľké alebo viacjadrové procesory.", 0],
                            ["Flynnova klasifikácia rozdeľuje počítače podľa typu operačného systému a počtu vlákien a ukazuje, ktoré systémy pracujú v multitaskingu, paralelne alebo graficky.", 0],
                            ["Flynnova klasifikácia rozdeľuje počítače podľa architektúry zberníc a inštrukčných jednotiek a ukazuje, ktoré systémy vykonávajú operácie sekvenčne, paralelne alebo kombinovane.", 0],
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
            <!-- 8. Prednáška -->
            <div class="container" id="q40">
                <div class="question-container">
                    <p class="question">Čo znamená skratka SoC?</p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer40">
                    <button id="answer-button" onclick="checkAnswer(40, 'text')">Beadás</button>
                    <p class="feedback" id="feedback40">&nbsp;</p>
                    <input type="hidden" id="correct-answer40" value="System on Chip">
                </div>
            </div>
            <div class="container" id="q41">
                <div class="question-container">
                    <p class="question">Aký systém je vnorený (embedded)?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Vnorený systém je počítač zabudovaný do zariadenia, ktorý ho riadi alebo monitoruje a vyžaduje nízku spotrebu energie, odolnosť, spoľahlivosť a real-time spracovanie pre malosériové aplikácie.", 1],
                            ["Vnorený systém je počítač, ktorý sa používa samostatne pre výpočty alebo servery a vyžaduje vysoký výkon, veľkú pamäť, flexibilitu a podporu viacerých používateľov.", 0],
                            ["Vnorený systém je typ počítača určený na kancelársku prácu alebo herné aplikácie, ktorý kladie dôraz na grafický výkon, multitasking, veľkú kapacitu úložiska a jednoduchú obsluhu.", 0],
                            ["Vnorený systém je počítač implementovaný vo veľkých dátových centrách alebo cloudových službách, ktorý poskytuje vysokú dostupnosť, škálovateľnosť, paralelné spracovanie a správu viacerých úloh.", 0],
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
                    <p class="question">Kvôli čomu majú niektoré procesory možnosť dramaticky znížiť svoju pracovnú frekvenciu?</p>
                </div>
                <div class="multi-select-3-container">
                    <?php 
                        $order = [0, 1, 2, 3, 4, 5];
                        shuffle($order);

                        $answers = [
                            ["Nízkej spotrebe energie.", 1],
                            ["Úspornému režimu, keď zariadenie práve nerobí náročné operácie.", 1],
                            ["Pre šetrenie batérie", 1],
                            ["Aby sa procesor mohol vyhnúť prehriatiu pri náročných výpočtoch", 0],
                            ["Zvýšeniu rýchlosti periférií", 0],
                            ["Súčasnému spracovaniu viacerých vlákien", 0]
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
            <div class="container" id="q43">
                <div class="question-container">
                    <p class="question">Akú prídavnú funkciu má signálový procesor?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["Signálový procesor má A/D a D/A prevodníky a je optimalizovaný na operácie ako filtrácia, FFT, meranie a úprava signálu v reálnom čase.", 1],
                            ["Signálový procesor má špeciálne pamäťové registre a je optimalizovaný na rýchle sčítavanie, zápis do diskov a riadenie periférií.", 0],
                            ["Signálový procesor má aritmetickú jednotku pre vysokovýkonné výpočty a je optimalizovaný na spracovanie bežných aplikačných programov a multitasking.", 0],
                            ["Signálový procesor má paralelné vykonávanie inštrukcií a je optimalizovaný na riadenie operačného systému a správu viacerých vlákien.", 0],
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
                    <p class="question">Čo znamená skratka ASIC pri výrobe elektronických zariadení?</p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer44">
                    <button id="answer-button" onclick="checkAnswer(44, 'text')">Beadás</button>
                    <p class="feedback" id="feedback44">&nbsp;</p>
                    <input type="hidden" id="correct-answer44" value="Application Specific Integrated Circuit">
                </div>
            </div>
            <div class="container" id="q45">
                <div class="question-container">
                    <p class="question">Čo znamená skratka FPGA pri výrobe elektronických zariadení?</p>
                </div>
                <div class="form-container">
                    <input type="text" id="user-answer45">
                    <button id="answer-button" onclick="checkAnswer(45, 'text')">Beadás</button>
                    <p class="feedback" id="feedback45">&nbsp;</p>
                    <input type="hidden" id="correct-answer45" value="Field Programmable Gate Array">
                </div>
            </div>
            <div class="container" id="q46">
                <div class="question-container">
                    <p class="question">Aké vstupy a výstupy má zariadenie označené skratkou PLC?</p>
                </div>
                <div class="multiple-choice-4-container">
                    <?php 
                        $order = [0, 1, 2, 3];
                        shuffle($order);

                        $answers = [
                            ["PLC má binárne aj analógové vstupy zo senzorov a výstupy na ovládače ako motory, svetlá a spínače", 1],
                            ["PLC má digitálne vstupy a výstupy určené pre pripojenie k počítačom a sieťovým zariadeniam a spracováva programové dáta bez priameho ovládania hardvéru.", 0],
                            ["PLC má špeciálne vstupy na meranie teploty a vlhkosti a výstupy určené na ovládanie databáz a serverov bez interakcie s fyzickými aktuátormi.", 0],
                            ["PLC má vstupy a výstupy prispôsobené pre grafické a multimediálne aplikácie a vykonáva cyklus renderovania obrazovky a spracovania používateľských dát.", 0],
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
            <div class="container" id="q47">
                <div class="question-container">
                    <p class="question" style="text-align: center;">Odkiaľ kam prenáša informácie digitálne dvojča?</p>
                </div>
                <div class="multiple-choice-3-container">
                    <?php 
                        $order = [0, 1, 2];
                        shuffle($order);

                        $answers = [
                            ["Digitálne dvojča prenáša informácie obojsmerne medzi reálnym systémom a jeho počítačovým modelom, pričom zmeny v realite sa okamžite prejavia v modeli a zmeny v modeli môžu ovplyvniť reálne zariadenie.", 1],
                            ["Digitálne dvojča prenáša informácie jednosmerne z počítačového modelu na server, aby sa synchronizovali databázy a spracovali analytické výpočty bez spätnej väzby.", 0],
                            ["Digitálne dvojča prenáša informácie medzi viacerými cloudovými aplikáciami a databázami pre analytické účely, bez priamej komunikácie s fyzickým systémom alebo jeho modelom.", 0],
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