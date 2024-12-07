<?php

include './../../../php/validations/authorizedChild.php';

function showLessons(){

include './../../../php/connectionBD.php';

$id_usuario = $_SESSION["id_user"];
$SqlLessons = "SELECT  id_leccion , completado from desbloqueos_lecciones WHERE id_usuario = :id_usuario";
$queryLessons = $pdo->prepare($SqlLessons);
$queryLessons->bindParam('id_usuario',$id_usuario, PDO::PARAM_INT);
$queryLessons->execute(); 
$lessons = $queryLessons->fetchAll(PDO::FETCH_ASSOC);
function validationURL($status){
    return $dataEnter = match ($status) {
        'bloqueado' => "data-enter='false'",
        'completado' => "data-enter='true'" ,
        'en_espera' => "data-enter='true'",
    };
}
function validationIcon($status){
    return $dataEnter = match ($status) {
        'bloqueado' => "bi bi-lock fs-1",
        'completado' => "bi bi-check fs-1" ,
        'en_espera' => "bi bi-hourglass-top fs-1",
    };
}

function validationFilter($status){
    return $status == "bloqueado" ? "filterGrayscale" : "";
}
$arreglo_indexado = array_column($lessons, "completado");

echo "  <article class='moduleOne'>
                        <strong class='fs-3'>Módulo 1: Fundamentos Numéricos</strong>
                        <section class='theContent'>
                            <section class='temaOneInformation'>
                                <span><b>Tema 1: Conceptos básicos:</b> </span>
                                <div class='d-flex flex-direction-row gap-4 lessons'>
                                    <div class='one p-1 my-3 ". validationFilter($arreglo_indexado[0]). "'>
                                        <a href='./moduleOne/topicOne/lesson1.php' ". validationURL($arreglo_indexado[0]) ."
                                            title='Asociación de cantidad con objetos: ejercicios de contar objetos de diferentes tipos y tamaños.'>
                                            <div class='img'>
                                                <i class='". validationIcon($arreglo_indexado[0]) ."'></i>
                                            </div>
                                            <div class='titleLesson mt-2'>
                                                <small>Asociación de cantidad </small>
                                            </div>

                                        </a>
                                    </div>
                                    <div class='two p-1 my-3 ". validationFilter($arreglo_indexado[1]). "'>
                                        <a href='./moduleOne/topicOne/lesson2.php'  ". validationURL($arreglo_indexado[1]) ."
                                            title='Comparación de cantidades: actividades para identificar 'más', 'menos' e 'igual'.'>
                                            <div class='img'>
                                                <i class='". validationIcon($arreglo_indexado[1]) ."'></i>
                                            </div>
                                            <div class='titleLesson mt-2'>
                                                <small>Comparación de <br>cantidades</small>
                                            </div>

                                        </a>
                                    </div>
                                    <div class='thre p-1 my-3 ". validationFilter($arreglo_indexado[2]). "'>
                                        <a href='./moduleOne/topicOne/lesson3.php'
                                             ". validationURL($arreglo_indexado[2]) ."
                                            title='Seriación: ordenar objetos según tamaño, color o forma.'>
                                            <div class='img'>
                                                <i class='". validationIcon($arreglo_indexado[2]) ."'></i>
                                            </div>
                                            <div class='titleLesson mt-2'>
                                                <small>Seriación para <br> ordenar objetos</small><br>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                            </section>
                            <section class='temaTwoInformation'>
                                <span><b>Tema 2: Introducción a los números:</b> </span>
                                <div class='d-flex flex-direction-row gap-4 lessons'>
                                    <div class='one p-1 my-3 ". validationFilter($arreglo_indexado[3]). "'>
                                        <a href='./moduleOne/topicTwo/lesson1.php'  ". validationURL($arreglo_indexado[3]) ."
                                            title='Reconocimiento de números: ejercicios de identificación visual y auditiva.'>
                                            <div class='img'>
                                                <i class='". validationIcon($arreglo_indexado[3]) ."'></i>
                                            </div>
                                            <div class='titleLesson mt-2'>
                                                <small>Reconocimiento <br>de números</small>
                                            </div>

                                        </a>
                                    </div>
                                    <div class='two p-1 my-3 ". validationFilter($arreglo_indexado[4]). "'>
                                        <a href='./moduleOne/topicTwo/lesson3.php'  ". validationURL($arreglo_indexado[4]) ."
                                            title='Escritura de números: actividades para practicar la escritura de números.'>
                                            <div class='img'>
                                                <i class='". validationIcon($arreglo_indexado[4]) ."'></i>
                                            </div>
                                            <div class='titleLesson mt-2'>
                                            <small>Escritura de números</small>
                                            </div>

                                        </a>
                                    </div>
                                    <div class='thre p-1 my-3 ". validationFilter($arreglo_indexado[5]). "'>
                                        <a href='./moduleOne/topicTwo/lesson3.php'  ". validationURL($arreglo_indexado[5]) ."
                                            title='Correspondencia número-cantidad: relacionar un número con la cantidad correspondiente de objetos.'>
                                            <div class='img'>
                                                <i class='". validationIcon($arreglo_indexado[5]) ."'></i>
                                            </div>
                                            <div class='titleLesson mt-2'>
                                                <small>Correspondencia <br> número-cantidad</small>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </article>";

                    $pdo = null;
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | :3</title>
    <link rel="stylesheet" href="../../../css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../css/components/offcanvas.css">
    <link rel="stylesheet" href="../../../css/components/header.css">
    <link rel="stylesheet" href="../../../css/components/semanticTag.css">
    <link rel="stylesheet" href="../../../css/admin/addAndModifyChild.css">
    <link rel="stylesheet" href="../../../css/admin/dashboard.css">
    <link rel="stylesheet" href="../../../css/components/row.css">


    <style>
        .lessons>div a {
            text-align: center;
        }

        .moduleOne>strong {
            display: block;
            background: #906df2;
            color: white;
            border-radius: 1rem 1rem 0rem 0rem;
            padding: 0.6rem 1rem;
        }

        .col-9>div {
            padding: 0rem
        }

        [class*="tema"]>span {
            display: block;
            background: #ff7d45;
            color: white;
            padding: 0.6rem 1rem;
        }

        .lessons {
            padding: 0.6rem 1rem;
        }

        .col-9>div {
            border: solid 1px #e8d8ff;
        }

        .img {
            background: #7a5bd2;
            padding: 0.3rem;
            border-radius: 100%;
            border-radius: 100%;
            outline-color: #7a5bd2;
            outline-offset: 0.2rem;
            outline-style: solid;
            outline-width: 5px;
            color: white;
            width: 75px;
        }

        .lessons>div>a {
            color: rgb(47, 47, 47);
            width: 130px;
            height: 100px;
        }

        .filterGrayscale {
            outline-style: none !important;
            filter: grayscale(100%);
        }

        .lessons>div>a {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <?php include './../../include/user/header.php' ?>

    <main>
        <div class="row h-100">
            <div class="col-3 h-100">
                <section class="historyChilds">
                    <span>Recientes</span><br>
                    <hr>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                    </div><br>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                    </div><br>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                    </div><br>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                    </div><br>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                    </div><br>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                    </div><br>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                    </div><br>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button> <br>
                    </div><br>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                    </div><br>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                    </div>
                    <a href="#allHistoryChilds"> Ver todas</a>
                </section>
            </div>
            <div class="col-9">
                <div>
                <?php 
                showLessons();
                ?> 
                </div>
            </div>
        </div>
    </main>
    <?php include './../../include/footer.php' ?>
    <?php include './../../include/user/offcanvasUser.php' ?>
    <?php include './../../include/user/offcanvasAplication.php' ?>
    <script>
        document.addEventListener("click", (e) => {
            const clickedElement = e.target.closest("[data-enter]");
            if (clickedElement && clickedElement.getAttribute("data-enter") === "false") {
                console.info(e.target);
                e.preventDefault();
            }
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>

</html>