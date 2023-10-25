<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar película</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="estilo.css" type="text/css" rel="stylesheet">
    <?php require '../funciones/util.php' ?>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_id_pelicula = depurar($_POST["id_pelicula"]);
        $temp_titulo = depurar($_POST["titulo"]);
        $temp_fecha_estreno = depurar($_POST["fecha_estreno"]);
        if(isset($_POST["edad_recomendada"])) {
            $temp_edad_recomendada = depurar($_POST["edad_recomendada"]);
        } else {
            $temp_edad_recomendada = "";
        }
        
        #   Validación de id_pelicula
        if(strlen($temp_id_pelicula) == 0) {
            $err_id_pelicula = "Campo obligatorio";
        } else {
            if(filter_var($temp_id_pelicula, FILTER_VALIDATE_INT) === FALSE) {
                $err_id_pelicula = "Introduce un número";
            } else {
                if(strlen($temp_id_pelicula) > 8) {
                    $err_id_pelicula = "El número no puede tener más de 8 dígitos";
                } else {
                    $temp_id_pelicula = (int) $temp_id_pelicula;
                    $id_pelicula = $temp_id_pelicula;
                }
            }
        }

        #   Validación del título
        if(strlen($temp_titulo) == 0) {
            $err_titulo = "Campo obligatorio";
        } else {
            if(strlen($temp_titulo) > 80) {
                $err_titulo = "No puede tener más de 80 caracteres";
            } else {
                $titulo = $temp_titulo;
            }
        }

        #   Validación de fecha de estreno
        if(strlen($temp_fecha_estreno) == 0) {
            $err_fecha_estreno = "Campo obligatorio";
        } else {
            list($anyo, $mes, $dia) = explode('-', $temp_fecha_estreno);
            if($anyo < 1895) {
                $err_fecha_estreno = "Aún no se habían inventado las películas";
            } else {
                $fecha_estreno = $temp_fecha_estreno;
            }
        }

        #   Validación de edad recomendada
        if(strlen($temp_edad_recomendada) == 0) {
            $err_edad_recomendada = "Campo obligatorio";
        } else {
            $edades_recomendadas = ["0", "3", "7", "12", "16", "18"];
            if(!in_array($temp_edad_recomendada, $edades_recomendadas)) {
                $err_edad_recomendada = "La edad recomendada no es válida";
            } else {
                $edad_recomendada = $temp_edad_recomendada;
            }
        }

        if(isset($id_pelicula) && isset($titulo) && 
            isset($fecha_estreno) && isset($edad_recomendada)) {

            echo "<h1>Exito!</h1>";
        }
    }
    ?>
    <div class="container">
        <h1>Insertar película</h1>
        <div class="col-6">
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">ID Película: </label>
                    <input class="form-control" type="text" name="id_pelicula">
                </div>
                <div class="mb-3">
                    <label class="form-label">Título: </label>
                    <input class="form-control" type="text" name="titulo">
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha de estreno: </label>
                    <input class="form-control" type="date" name="fecha_estreno">
                </div>
                <div class="mb-3">
                    <label class="form-label">Edad recomendada</label> 
                    <select class="form-select" name="edad_recomendada">
                        <option disabled selected hidden>-- Elige una edad --</option>
                        <option value="0">Todos los públicos</option>
                        <option value="3">Mayores de 3 años</option>
                        <option value="7">Mayores de 7 años</option>
                        <option value="12">Mayores de 12 años</option>
                        <option value="16">Mayores de 16 años</option>
                        <option value="18">Mayores de 18 años</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>