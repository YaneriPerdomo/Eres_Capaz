<?php

include './../../../../../php/validations/authorizedChild.php';
include './../../../../../php/connectionBD.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lección 1 | Eres capaz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://pie-meister.github.io/PieMeister-with-Progress.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../../../../css/reset.css">
    <link rel="stylesheet" href="../../../../../css/components/offcanvas.css">
    <link rel="stylesheet" href="../../../../../css/components/header.css">
    <link rel="stylesheet" href="../../../../../css/components/semanticTag.css">
    <link rel="stylesheet" href="../../../../../css/admin/addAndModifyChild.css">
    <link rel="stylesheet" href="../../../../../css/admin/dashboard.css">
    <link rel="stylesheet" href="../../../../../css/components/row.css">


    <style>
        .activityContainer {
            display: flex;
            align-items: center;
            margin: 0.5rem 1rem;
            gap: 3rem;
        }

        .progress {
            flex-grow: 2;
        }

        .gem,
        .time,
        .porcentage,
        .timeResult,
        .porcentageResult,
        .gemsResult {
            display: flex;
            flex-direction: row-reverse;
            gap: 0.5rem;
            align-items: center;
            background: rgb(47, 47, 47);
            border-radius: 0.5rem;
            color: white;

        }



        .modalWindowBack {
            background: none;
            border: none;
            color: #6f6f6f;

        }

        .Back>button {
            background: none;
        }

        .bi-gem {
            background: rgb(23 154 215);
            background: var(--colorHF);
            padding: 0.5rem;
            border-radius: 0.5rem;
            color: white;
        }

        .bi-bar-chart {
            background: rgb(23 154 215);
            background: #ff7d45;
            padding: 0.5rem;
            border-radius: 0.5rem;
            color: white;
        }

        .bi-stopwatch-fill {
            background: rgb(23 154 215);
            background: var(--colorHF);
            background: #3f8ddf;
            padding: 0.5rem;
            border-radius: 0.5rem;
            color: white;
        }

        .gem>div>span,
        .time>div>span,
        .porcentage>div>span,
        .porcentageResult>div>span,
        .gemsResult>div>span,
        .timeResult>div>span {
            padding-right: 1rem;
        }

        .progress {
            width: 1rem;
            height: 80%;
            background: #9571f9;

            position: relative;
        }


        .row {
            padding: 0rem 1rem;
        }

        body {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100vh;

            background-size: contain;
            background-repeat: repeat;
            font-family: "Roboto", sans-serif;
            font-weight: 100;
            font-style: normal;
            font-weight: 400;
        }

        main {
            flex-grow: 2;
        }

        main>div {
            max-width: 1000px;
            min-width: 100px;
            max-height: 700px;
            min-height: 600px;
        }

        .col-11 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .containerBack,
        .containerGuide,
        .containerResultsLesson {
            width: 100%;
            height: 100%;
            top: 0;
            position: absolute;
            display: flex;
            justify-content: center;
            background: green;
            align-items: center;
            background: rgb(0, 0, 0, 0.5);
            border: solid 1px #e8d8ff;
            border-radius: 1rem;
        }


        .content {
            max-width: 500px;
            background: white;
            min-width: 200px;
            border-radius: 1rem !important;
        }

        .modalTitleBack {
            background-color: #ff4b4b;
            margin: 0rem;
            padding: 1rem;
            color: white;
        }


        .modalTitleGuide {
            background-color: #ff7d45;
            margin: 0rem;
            padding: 1rem;
            color: white;
        }

        .openModal {
            animation: openModal 1s;
        }

        @keyframes openModal {
            0% {
                transform: translateY(-15%);
                opacity: 0;
                transition: opacity 0.5s ease-in-out;

            }

            100% {
                transform: translateY(0%);
                opacity: 1;
            }
        }

        .Back>button {
            border: none;
        }

        .imgEresCapaz {
            max-width: 90px;
        }

        .objetivo {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .YesBack {
            background: #ff4b4b;
            color: white;
            border: 0rem;
        }

        .containerBack>div>div>div>p {
            padding: 0.5rem;
            margin: 0rem;
        }


        .modal-footer {
            padding: 1rem;
        }

        .CancelBack {
            border: 0rem;
            color: white;
            background-color: #3f8ddf !important;
        }

        .CancelBack:hover {
            transition: all 0.5s;
            background: #1d5c9f !important;
            color: white !important;

        }

        .detalls {
            background: rgb(47, 47, 47);
            color: white;
            border-radius: 0.5rem;
            width: clamp(20px, 100%, 1000px);
        }

        .begin {
            position: absolute;
            height: 100%;
            top: 0;
            width: 100%;
            background: white;
            border-radius: 1rem;
            border: solid 1px #e8d8ff;
        }

        .begin {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url(../../../../../img/background-main.png);
            background-size: contain;
            background-repeat: repeat;
        }

        .flexComun {
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .imgWelcome {
            width: 40px;
        }

        .guide {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: rgb(47, 47, 47);
            padding: 0.3rem;
            border-radius: 100%;
            border-radius: 0.5rem;
            outline-color: rgb(47, 47, 47);
            outline-offset: 0.2rem;
            outline-style: solid;
            outline-width: 5px;
            color: white;
        }

        .guide>button {
            background: none;
            border: none;
            color: white;
        }

        h1 {
            color: white;
            font-weight: bold;
        }

        .btnPlay {
            cursor: pointer;
            background: white;
        }

        .clouds {
            position: absolute;
            bottom: 0;
        }

        .linkBack {
            text-decoration: none;
            cursor: pointer;
        }


        .animationDeleteLabel {
            transition: animation 0.5s;
            animation: deleleLabel 1.5s;
        }

        @keyframes deleleLabel {
            0% {
                opacity: 1;
                transform: scale(1);
            }

            100% {
                opacity: 0;
                transform: scale(0);
            }
        }

        @keyframes backInLeft {
            0% {
                opacity: 0;
            }

            5% {
                transform: scale(0.1);

            }

            50% {
                opacity: 1;
                transform: translateX(0);
            }

            100% {
                transform: scale(1);
            }
        }

        .backInLeft {
            animation: backInLeft 1s ease-in-out;
        }

        /*Juego */

        .ButtonsNum>button {
            background: var(--colorHF);
            padding: 0.3rem;
            border-radius: 100%;
            border-radius: 0.5rem;
            outline-color: var(--colorHF);
            outline-offset: 0.2rem;
            outline-style: solid;
            outline-width: 5px;
            color: white;
            border: 0rem;
            min-width: 40px !important;
            min-height: 40px;

        }

        .ButtonsNum>button:hover {
            background: #815ee1;
            padding: 0.3rem;
            border-radius: 100%;
            border-radius: 0.5rem;
            outline-color: #815ee1;
            outline-offset: 0.2rem;
            outline-style: solid;
            outline-width: 5px;
            color: white;
            border: 0rem;
            min-width: 40px !important;
            min-height: 40px;
            transition: background 0.5s, outline-color 0.5s;
        }

        .ButtonsNum {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .containerPlay {
            position: relative;
            border-radius: 1rem;
            border: solid 1px #e8d8ff;
            border-radius: 1rem;
            border: solid 1px #e8d8ff;
        }

        .ButtonsNum>div {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .play {
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .loading {
            width: 100%;
            height: 100%;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgb(47, 47, 47);
            flex-direction: column;
            border-radius: 1rem;
            border: solid 1px #e8d8ff;
        }

        .containerPlay {
            background-image: url(../../../../../img/number.png);
            background-size: cover;
            background-repeat: repeat;
        }

        main {
            background: none
        }

        .progressBar {
            height: 100%;
            background: rgb(47, 47, 47);
            width: 100%;
            border: 0rem;
        }


        .userImgLesson {
            margin-bottom: 1rem;
        }

        .flexG {
            display: flex;
            gap: 1rem;
        }

        .content {
            border: 0rem;
            padding: 0;
        }





        /*Modales  */

        .purpleModalTitle {
            background-color: #936ff4;
            margin: 0rem;
            padding: 1rem;
            color: white;
        }

        .redModalTitle {
            background: #ff4b4b;
            padding: 1rem;
            color: white;
        }

        .blackModalTitle {
            background-color: rgb(47, 47, 47);
            margin: 0rem;
            padding: 1rem;
            color: white;
        }

        .exitButtonB {
            background: rgb(47, 47, 47);
            color: white;
            border: 0rem;
        }

        .exitButtonBlue {
            background: #2e7bcc;
            color: white;
            border: 0rem;
        }

        .exitButtonBlue:hover {
            transition: all 0.5s;
            background: #1d5c9f !important;
            color: white !important;
        }

        .exitButtonB:hover {
            transition: all 0.5s;
            color: white;
            background: rgb(32, 32, 32);
        }


        .modal-body>p {
            padding: 0.5rem;
            margin: 0rem;
        }

        .containerResultsLesson {
            transform: all 2s;
            background: rgba(0, 0, 0, 0.97);
        }

        .messageResult {
            padding: 0.5rem;
            margin: 0rem;
        }




        .FromOneToThree {
            position: absolute;
            height: 100%;
            top: 0;
            width: 100%;
            background: rgb(0, 0, 0, 0.5);
            background-repeat: repeat;
            background-image: none;
            background-size: auto;
            background-repeat: repeat;
            background-image: none;
            background-size: auto;
            border-radius: 1rem;
            border: solid 1px #e8d8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .FromOneToThree>strong {
            background: #7a5bd2;
            padding: 2rem;
            border-radius: 100%;
            border-radius: 100%;
            outline-color: #7a5bd2;
            outline-offset: 0.2rem;
            outline-style: solid;
            outline-width: 5px;
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100px;
        }
    </style>
</head>

<body>

    <?php
    include '../../../../include/user/lesson/header.php'
        ?>

    <main>
        <div class="containerPlay">
            <section>
                <div class="activityContainer">
                    <div class="Back">
                        <button class=" ">
                            <i class="modalWindowBack bi bi-arrow-left-square-fill fs-1"></i>
                        </button>
                    </div>
                    <div class="aim" style="flex-grow:2">
                        <div class="d-flex justify-content-center">
                            <div class="d-flex detalls">
                                <figure class="m-0">
                                    <img src="../../../../../img/childs/boy.png" class="img-fluid imgEresCapaz" alt="">
                                </figure>
                                <div class="objetivo">
                                    <p class="m-0">Escucha y selecciona el número correspondiente</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gem">
                        <div>
                            <span class="fs-2">0</span>
                        </div>
                        <i class="bi bi-gem fs-2"></i>
                    </div>
                    <div class="time">
                        <div>
                            <span class="fs-2" id="time">00:00:00</span>
                        </div>
                        <i class="bi bi-stopwatch-fill fs-2"></i>
                    </div>
                </div>
                </script>
            </section>
            <main class="play">
                <div class="row w-100 h-100">
                    <div class="col-1 ">
                        <div class="progress">
                            <div class="progressBar" data-progress="100"></div>
                        </div>
                    </div>
                    <div class="col-11">
                        <div class="containerPlayer align-items-center justify-content-center" data-num="3">
                            <div class="ButtonsNum">
                                <button>6</button>
                                <button>9</button>
                                <button>9</button>
                                <button>6</button>
                                <button>3</button>
                            </div>
                        </div><br>
                    </div>
                </div>
            </main>


            <div class="begin welcome">
                <section class="logo">
                    <img src="../../../../../img/for/teaching.png" class="img-fluid" alt="">
                </section>
                <div class="progressA mb-4">
                    <div class="detallsProgressA">
                        <h1 class="text-center">Progreso Actual</h1>
                        <?php
                        include '../../../../../php/user/auxiliar.php';
                        echo getLessonData($_SESSION["id_user"], 1);
                        ?>
                    </div>
                </div>
                <button class="btnPlay">COMENZAR</button><br>
                <a href="../../read.php" class="linkBack">Regresar</a>
                <div class="guide OpenModalGuide" title="Guia">
                    <button class=""><i class="bi bi-journal-bookmark-fill fs-3 OpenModalGuide"></i></button>
                </div>
                <div class="clouds">
                    <img src="../../../../../img/nube.png" class="img-fluid" alt="">
                </div>
                <div class="loading">
                    <progress></progress>
                    <strong class="text-white">Cargando...</strong>
                </div>
            </div>

            <div class="FromOneToThree" style="display:none">
                <strong>
                    <h2 class="m-0 fs-2">4</h2>
                </strong>
            </div>
            <?php
            include '../../../../include/user/modalWindow/back.php';
            include '../../../../include/user/modalWindow/guide.php';
            ?>

            <div class="containerResultsLesson" style="display:none">
                <div class="modal-content content ">
                    <div class="modal-header">
                        <div class="text-center w-100">
                            <h2 class="modal-title purpleModalTitle fs-5" id="exampleModalLabel"><b>
                                    ¡Has completado la lección! </b>
                            </h2>
                            <p class="m-0 messageResult"> ¡De manera existosa!
                            </p>
                            <img src="<?php $_SESSION["gender"] == "1" ?
                                $gender = '../../../../../img/childs/boy.png' : $gender = '../../../../../img/childs/girl.png';
                            echo $gender ?>
                                " class="img-fluid userImgLesson" alt="">
                            <div>
                                <div class="flexComun gap-3">
                                    <div class="gemsResult">
                                        <div>
                                            <span class="fs-3"></span>
                                        </div>
                                        <i class="bi bi-gem fs-1"></i>
                                    </div>
                                    <div class="timeResult">
                                        <div>
                                            <span class="fs-3"></span>
                                        </div>
                                        <i class="bi-stopwatch-fill fs-1"></i>
                                    </div>
                                    <div class="porcentageResult">
                                        <div>
                                            <span class="fs-3"></span>
                                        </div>
                                        <i class="bi-bar-chart fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center gap-4 align-items-center m-0">

                        <div class="flexG">
                            <button onclick="recargarPagina()">Jugar de nuevo</button>
                            <button><a href="../../read.php">Salir</a></button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>
    <script>
        // Obtener parámetros de la URL
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get('statu');


    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <?php

    include '../../../../include/footer.php';
    include '../../../../include/user/lesson/offcanvasAplication.php';
    include '../../../../include/user/lesson/offcanvasUser.php';

    ?>


    <script>
        //Variables
        //Gamaficacion 
        let $gem = document.querySelector(".gem > div > span"),
            $time = document.querySelector(".time > div > span");
        let $wrongSelection = 0;
        let $containerPlayer = document.querySelector(".containerPlayer");
        let $progressBar = document.querySelector(".progressBar")
        let $containerResultsLesson = document.querySelector(".containerResultsLesson")
        let $contentResultsLesson = document.querySelector(".containerResultsLesson > .content")
        let $ButtonsNum = document.querySelectorAll(".ButtonsNum > button");
        let acceptedPoints = 1;
        const searchParams = new URLSearchParams(window.location.search);
        let failed = 0;
        let $strongFromOneToThree = document.querySelector(".FromOneToThree > strong > h2");
        let $FromOneToThree = document.querySelector(".FromOneToThree")

        function FromOneToThree() {
            $FromOneToThree.removeAttribute("style")
            let count = 3;
            $strongFromOneToThree.innerHTML = 3;
            voiceExercise(3);
            let countdown = setInterval(() => {
                count--;
                $strongFromOneToThree.textContent = count;
                if (count === 0) {
                    clearInterval(countdown);
                } setTimeout(() => {
                    $FromOneToThree.style.display = "none";
                }, 3000);
            }, 1000);
        }

        //Ventana modal resultado 
        let $gemsResult = document.querySelector(".gemsResult > div > span");
        let $porcentageResult = document.querySelector(".porcentageResult > div > span");
        let $timeResult = document.querySelector(".timeResult > div > span");
        let $messageResult = document.querySelector(".messageResult")

        function voiceExercise(number) {
            let text = `Escuche y seleccione el número, ${number}.`;
            const speak = (text) =>
                speechSynthesis.speak(new SpeechSynthesisUtterance(text));
            return speak(text);
        }
        count = 0;
        document.addEventListener("click", e => {
            if (e.target.matches(".ButtonsNum > button")) {
                count++;
                $progressBar.style.height = `${parseInt($progressBar.getAttribute("data-progress")) - 5}%`;
                $progressBar.setAttribute("data-progress", $progressBar.getAttribute("data-progress") - 5);

                if (e.target.textContent == $containerPlayer.getAttribute("data-num")) {
                    acceptedPoints++;
                    console.info(acceptedPoints)
                    $gem.innerHTML = `${1 + Number.parseInt($gem.textContent)}`;

                    randomNumber = Math.floor(Math.random() * 4);
                    console.warn(randomNumber)
                    defineNumber01("6", "9", "3", randomNumber)

                } else {
                    failed++;
                }
                if (count === 20) {
                    if (acceptedPoints == 0) {
                        $messageResult.innerHTML = "¡Anímate! Todavía tienes oportunidades para mejorar.";
                    } else if (acceptedPoints < 5) {
                        $messageResult.innerHTML = "Has demostrado lo mejor de ti. Con un poco más de esfuerzo, alcanzarás tus metas.";
                    } else if (acceptedPoints < 10) {
                        $messageResult.innerHTML = "¡Has demostrado un gran potencial, sigue asi!";
                    } else if (acceptedPoints < 15) {
                        $messageResult.innerHTML = "¡Enhorabuena! Tu dedicación y esfuerzo han dado sus frutos. <br>  Sigue así y alcanzarás grandes logros. "
                    } else if (acceptedPoints < 21) {
                        $messageResult.innerHTML = "¡Felicidades! Has completado la lección con un 100% de aciertos. ¡Excelente trabajo!"
                    }
                    return endOfLesson()
                }
            }
        });

        let timer;
        let seconds = 0,
            minutes = 0,
            hours = 0;

        function updateDisplay() {
            document.getElementById('time').innerText =
                (hours < 10 ? '0' : '') + hours + ':' +
                (minutes < 10 ? '0' : '') + minutes + ':' +
                (seconds < 10 ? '0' : '') + seconds;
        }

        function start() {
            if (!timer) {
                timer = setInterval(() => {
                    seconds++;
                    if (seconds == 60) {
                        seconds = 0;
                        minutes++;
                        if (minutes == 60) {
                            minutes = 0;
                            hours++;
                        }
                    }
                    updateDisplay();
                }, 1000);
            }
        }

        async function endOfLesson() {
            function top() {
                clearInterval(timer);
                timer = null;
            }
            await top();
            $gemsResult.innerHTML = $gem.textContent;
            $timeResult.innerHTML = $time.textContent;

            let resulFormuleP = parseInt(Math.round((acceptedPoints / 20) * 100));

            $porcentageResult.innerHTML = resulFormuleP + "%";
            $containerResultsLesson.removeAttribute("style");
            $contentResultsLesson.classList.add("backInLeft")
            await fetch("./../../../../../php/user/unlockUpdateLesson.php", {
                method: 'POST',
                body: new URLSearchParams({
                    typeAccess : "Pre_Numerico",
                    statu: searchParams.get("statu"),
                    id_lesson: 1,
                    failed: failed,
                    gems: parseInt($gem.textContent),
                    porcentage: resulFormuleP,
                    time: $time.textContent,
                }),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });

        }

        function defineNumber01(similar01, similar02, mainNumber, c) {
            let contador = 0;
            let numeroR = [];
            $containerPlayer.setAttribute("data-num", mainNumber)
            for (let i = 0; i < $ButtonsNum.length; i++) {
                numeroR.push(Math.trunc(Math.random() * 4))
            }

            for (let i = 0; i < $ButtonsNum.length; i++) {
                contador += 1;
                if (c === contador) {
                    $ButtonsNum[i].innerHTML = `${mainNumber}`;
                    continue;
                } else if (numeroR[i] % 2 == 0) {
                    $ButtonsNum[i].innerHTML = `${similar01}`;
                } else {
                    $ButtonsNum[i].innerHTML = `${similar02}`;
                }
            }
            let use = false
            for (let i = 0; i < $ButtonsNum.length; i++) {
                if ($ButtonsNum[i].textContent == $containerPlayer.getAttribute("data-num") || $ButtonsNum[i] == "") {
                    use = true
                    break;
                } else {
                    use = false
                }
            }
            if (use === false) {
                $ButtonsNum[0].innerHTML = mainNumber;
            }
            return true;
        }
    </script>
    <script>
        let $modalWindowBack = document.querySelector(".modalWindowBack");
        let $containerBack = document.querySelector(".containerBack");
        let $backContent = document.querySelector(".containerBack > .content")
        let $body = document.querySelector("body");
        let $buttonOpenModalGuide = document.querySelector(".OpenModalGuide")
        let $containerGuideModal = document.querySelector(".containerGuide")
        let $begin = document.querySelector(".begin");
        let $GuidaContent = document.querySelector(".containerGuide > .content")
        let $containerPlay = document.querySelector(".containerPlay");
        function recargarPagina() {
            window.location.reload()
        }
       

        setTimeout(() => {
            $begin.removeChild($begin.children[7]);
        }, 2500);
        document.addEventListener("click", e => {

            const $buttonPlay = e.target.closest(".btnPlay");

            if (e.target.matches(".OpenModalGuide")) {
                $containerGuideModal.removeAttribute("style")
                $GuidaContent.classList.add("backInLeft")
            }

            if (e.target.matches(".modalWindowBack")) {
                $containerBack.removeAttribute("style");
                $backContent.classList.add("backInLeft")
            }

            if (e.target.matches(".exitButtonBlue")) { //Cerrar ventana modal de irse de la leccion
                $containerBack.style.display = "none";
            }

            if (e.target.matches(".exitButtonB")) { //Cerrar ventana modal de la guia de la leccion
                $containerGuideModal.style.display = "none";
            }
            if ($buttonPlay) {
                $begin.classList.add("animationDeleteLabel");
                setTimeout(() => {
                    $containerPlay.removeChild($containerPlay.children[2])
                }, 1000);
                setTimeout(() => {
                    FromOneToThree()
                    setTimeout(() => {
                        start();
                        
                    }, 3000);
                }, 800);

            }

        })
    </script>
</body>

</html>