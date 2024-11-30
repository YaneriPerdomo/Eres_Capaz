<?php

include './../../php/validations/authorizedUser.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/admin/components/table.css">
    <link rel="stylesheet" href="../../css/admin/components/offcanvas.css">
    <link rel="stylesheet" href="../../css/admin/components/modalWindows.css">
    <link rel="stylesheet" href="../../css/admin/components/header.css">
    <link rel="stylesheet" href="../../css/admin/components/semanticTag.css">
    <link rel="stylesheet" href="../../css/admin/components/row.css">
    <link rel="stylesheet" href="../../css/admin/dashboard.css">
    <style>
        .modalTitleNotification {
            margin: 0rem;
            background: #2e7bcc;
            padding: 1rem;
            color: white;
        }

        .yesButtonSend {
            background: #2e7bcc;
            color: white;
        }

        .yesButtonSend:hover{
            transition: all 0.5s;
            background: #1d5c9f !important;
            color: white !important;
        }
        [name="messenger"] {
            color: rgb(47, 47, 47);
        }

        .containerSendNotifiacion>div>form {
            padding: 1rem;
            padding-top: 1rem;
            padding-top: 0.5rem;
        }

        .containerSendNotifiacion>div>form>p {
            padding: 0.5rem;
            margin: 0rem;
        }
    </style>
</head>

<body>

    <?php include './../include/admin/header.php' ?>
    <main class="">
        <div class="row h-100">
            <div class="col-3 h-100">
                <section class="historyChilds">
                    <span>Recientes</span><br>
                    <hr>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button></button>
                        <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Borrar</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button></button>
                        <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Borrar</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button></button>
                        <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Borrar</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button></button>
                        <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Borrar</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button></button>
                        <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Borrar</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button></button>
                        <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Borrar</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button></button>
                        <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Borrar</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button></button>
                        <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Borrar</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button></button>
                        <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Borrar</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn"><button type="button" class=" " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button></button>
                        <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Borrar</a></li>
                        </ul>
                    </div>
                    <a href="#allHistoryChilds"> Ver todas</a>
                </section>
            </div>
            <div class="col-9">
                <div>
                    <section class="childs">
                        <h1 class="m-2"><b>Panel administrativo</b></h1>
                        <div class="containerAddChilds">
                            <div>
                                <a href="./child/add.php">Agregar niño</a>
                            </div>
                        </div>
                    </section>
                    <?php

                    function showChilds()
                    {
                        // Incluimos el archivo de conexión a la base de datos
                        include '../../php/connectionBD.php';
                        $id_admin = $_SESSION["id_profesional"];
                        // Preparamos la consulta SQL para obtener información de los niños
                        // Se realiza una unión entre las tablas 'ninos' y 'usuarios' para obtener más datos
                        // Se filtra por el id_profesional para obtener los niños de un profesional específico (en este caso, el de ID 7)
                    
                        echo " <section class='table'>
                        <table class='dataTable'>
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Edad</th>
                                    <th>Aprendizaje</th>
                                    <th>Operaciones</th>
                                </tr>
                            </thead>";

                        $pagina_actual = isset($_GET['pagina']) && is_numeric($_GET['pagina']) ? $_GET['pagina'] : 1;
                        $sqlCount = 'SELECT COUNT(*) as total FROM ninos WHERE id_profesional = :id';
                        $count = $pdo->prepare($sqlCount);
                        $count->bindParam('id', $id_admin, PDO::PARAM_INT);
                        $count->execute();
                        $total = $count->fetch(PDO::FETCH_ASSOC);
                        $total_registros = $total["total"];
                        $registros_por_pagina = 5;
                        $total_paginas = ceil($total_registros / $registros_por_pagina);
                        // Verificamos si se encontraron resultados
                    
                        $sqlSelect = 'SELECT id_nino, ninos.id_usuario as id_usuario_nino, usuario, nombre, apellido, id_categoria_actividades, fecha_nacimiento FROM ninos 
                                INNER JOIN usuarios ON ninos.id_usuario = usuarios.id_usuario WHERE id_profesional = :id
                                LIMIT :inicio, :registros_por_pagina
                                ';
                        $inicio = ($pagina_actual - 1) * $registros_por_pagina;

                        // Preparamos la sentencia SQL para evitar inyección SQL
                        $stmt = $pdo->prepare($sqlSelect);
                        $stmt->bindParam('id', $id_admin, PDO::PARAM_INT);
                        $stmt->bindValue(':inicio', $inicio, PDO::PARAM_INT);
                        $stmt->bindValue(':registros_por_pagina', $registros_por_pagina, PDO::PARAM_INT);
                        // Ejecutamos la consulta
                        $stmt->execute();

                        if ($stmt->rowCount() > 0) {
                            // Si hay resultados, los obtenemos en un array asociativo
                            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            // Iteramos sobre cada fila del resultado
                            foreach ($result as $row) {
                                // Obtenemos la categoría de actividad y la asignamos a una variable
                    
                                switch ($row["id_categoria_actividades"]) {
                                    case 1:
                                        $showA = "Pre Numerico";
                                        break;
                                    case 2:
                                        $showA = "Numerico Emergente";
                                        break;
                                    case 3:
                                        $showA = "Desarrollo Numerico";
                                        break;
                                    default:
                                        $showA = "Categoría desconocida";
                                }

                                $fecha_nacimiento = $row["fecha_nacimiento"];
                                $fecha_actual = date("Y-m-d"); // Obtener la fecha actual completa
                                // Convertir ambas fechas a timestamps
                                $timestamp_nacimiento = strtotime($fecha_nacimiento);
                                $timestamp_actual = strtotime($fecha_actual);
                                // Calcular la diferencia en segundos
                                $diferencia_segundos = $timestamp_actual - $timestamp_nacimiento;
                                // Convertir la diferencia de segundos a años (aproximado)
                                $edad_en_anos = floor($diferencia_segundos / (60 * 60 * 24 * 365.25));
                                // Generamos una fila en una tabla HTML con los datos del niño
                                echo "<tr class='show'>";
                                echo "<td >" . $row['usuario'] . "</td>";
                                echo "<td>" . $row['nombre'] . "</td>";
                                echo "<td>" . $row['apellido'] . "</td>";
                                echo "<td>" . $edad_en_anos . "</td>";
                                echo "<td>" . $showA . "</td>";
                                echo "<td class='operations'>";
                                echo "<button class='OpenDeleteChild' data-idc='" . $row['id_nino'] . "' data-idu='" . $row['id_usuario_nino'] . "'><i class='bi bi-trash'></i></button>";
                                echo "<a href='child/modify.php?id=" . $row['id_nino'] . "'><button><i class='bi bi-person-lines-fill'></i></button></a>";
                                echo "<button><i class='bi bi-bar-chart'></i></button></a>";
                                echo "<button class='OpenSendNotificationChild' data-idS='" . $row['id_nino'] . "' > <i class='bi bi-send-plus'></i></button> ";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            // Si no hay resultados, mostramos un mensaje
                            echo "<p>No hay registros disponibles en este momento.</p>";
                        }

                        // ... (código de conexión y cálculos anteriores)
                        echo " </table> </section>";
                        // Enlaces de paginación  
                        echo "<section class='d-flex justify-content-between align-items-center'>";
                        if ($total_registros == 0) {

                        } else if ($total_registros == 1) {
                            $userRegistration = 'registro disponible';
                            echo "<span class='messengerShowUsers'>Mostrando " . $total_registros . " de " . $registros_por_pagina . " 
                                    <span class='userRegistration'> " . $userRegistration . "</span></span>";
                            if ($pagina_actual > 1) {
                                echo "<a href='?page=" . ($pagina_actual - 1) . "'>Anterior</a> ";
                            }
                            for ($i = 1; $i <= $total_paginas; $i++) {
                                echo "<a href='?page=$i'>" . ($i == $pagina_actual ? '<b>' . $i . '</b>' : $i) . "</a> ";
                            }
                            if ($pagina_actual < $total_paginas) {
                                echo "<a href='?page=" . ($pagina_actual + 1) . "'>Siguiente</a>";
                            }
                            echo " </section>";
                        } else {
                            $userRegistration = 'registros disponibles';
                            echo "<span class='messengerShowUsers'>Mostrando " . $total_registros . " de " . $registros_por_pagina . " 
                                        <span class='userRegistration'> " . $userRegistration . "</span></span>";
                            if ($pagina_actual > 1) {
                                echo "<a href='?page=" . ($pagina_actual - 1) . "'>Anterior</a> ";
                            }
                            for ($i = 1; $i <= $total_paginas; $i++) {
                                echo "<a href='?page=$i'>" . ($i == $pagina_actual ? '<b>' . $i . '</b>' : $i) . "</a> ";
                            }
                            if ($pagina_actual < $total_paginas) {
                                echo "<a href='?page=" . ($pagina_actual + 1) . "'>Siguiente</a>";
                            }
                            echo " </section>";
                        }

                    }
                    showChilds();
                    ?>


                </div>
            </div>
        </div>
    </main>
    <?php include './../include/admin/footer.php' ?>

    <div class="containerDeleteChild" style="display:none">
        <div class="modal-content content">
            <div class="modal-header">
                <div class="text-center w-100">
                    <h2 class="modal-title modalTitleDetele fs-5" id="exampleModalLabel"><b>Eliminar Registro</b></h2>
                    <p>
                        Antes de confirmar, tenga en cuenta que al eliminar este registro perderá el
                        acceso a su plan de aprendizaje, incluido su historial de aprendizaje.
                    </p>
                </div>
            </div>
            <form action="./../../php/admin/child.php" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id_childC" value="">
                    <input type="hidden" name="id_childU">
                    <input type="hidden" name="valueFunction" value="delete">
                </div>
                <div class="modal-footer d-flex justify-content-center gap-4 align-items-center">
                    <button type="button" class="btn btn-secondary CancelModalDelet">Cancelar</button>
                    <button type="submit" class="btn yesButtonDelete">Si, eliminar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="containerSendNotification" style="display:none">
        <div class="modal-content content">
            <div class="modal-header">
                <div class="text-center w-100">
                    <h1 class="modal-title modalTitleNotification fs-5 text-center" id="exampleModalLabel"><b>Enviar notificacion</b></h1>
                </div>
            </div>
            <form action="./../../php/admin/child.php" method="post">
                <div class="modal-body">
                    <input type="hidden" name="valueFunction" value="sendNotification">
                    <input type="hidden" name="id_child" class="id_child" value="">
                    <input type="hidden" name="id_profesional" value="<?php echo $_SESSION["id_profesional"] ?> ">
                    <p class="text-center">Permite que el niño reciba notificacion personalizado en tiempo real que lo anima a
                        alcanzar sus objetivos.</p>
                    <select name="messenger" class="form-select" aria-label="Default select example">
                        <option selected value="¡Felicidades! Has completado una leccion mas.">¡Felicidades! Has
                            completado una lección mas. </option>
                        <option value="¡Genial! Has ganado mas estrellas."> ¡Genial! Has ganado más estrellas. ✨
                        </option>
                        <option value="¡Lo lograste! Has superado la etapa 1."> ¡Lo lograste! Has superado la etapa 1.
                        </option>
                        <option value="¡Sigue asi! Has pasado a la etapa 2."> ¡Sigue así! Has pasado a la etapa 2.
                        </option>
                        <option value="¡Enhorabuena! Has completado todo el aprendizaje."> ¡Enhorabuena! Has completado
                            todo el aprendizaje. </option>
                        <option value="¡Ascendiste en la tabla de clasificación! Estás más cerca de la cima.">
                            ¡Ascendiste en la tabla de clasificación! Estás más cerca de la cima.
                        </option>
                        <option value="ranking_entered"> ¡Bienvenid@! Has entrado en la tabla de clasificación.
                        </option>
                    </select>
                </div>
                <div class="modal-footer d-flex justify-content-center gap-4 align-items-center"
                    style='  padding-top: 1rem;'>
                    <button type="button" class="btn btn-secondary CanceSendN">Cancelar</button>
                    <button type="submit" class="btn yesButtonSend">Si, enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>


<?php include "../include/admin/offcanvasAplication.php" ?>
<?php include "../include/admin/offcanvasUser.php" ?>
<?php include "../include/admin/detailsActivity.php" ?>
<?php include "../include/admin/sendNotificationChild.php" ?>
<?php include "../include/admin/searchChilds.php" ?>


<script src="./../../js/helpers/searchChilds.js"></script>
<script src="./../../js/helpers/modalWindows.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</html>