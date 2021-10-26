<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Primera web</title>
    <script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>

    </header>
    <main>
        <?php
        include_once("funcionesCero.php");
        if (isset($_POST["enviar"]) && $_POST["nombreUs"] != "" && $_POST["emailUs"] != "" && $_POST["passUs"] != "") {
            echo "Formulario enviado.<br>";
            $nombreUsuario = $_POST["nombreUs"];
            $emailUsuario = $_POST["emailUs"];
            $passUs = md5($_POST["passUs"]);
            echo login($nombreUsuario, $emailUsuario, $passUs);
        } else {

        ?>
            <form action="formulario.php" method="POST">
                <label>Nombre:</label>
                <input type="text" class="form-control form-cust" name="nombreUs">
                <label>Email:</label>
                <input type="text" class="form-control form-cust" name="emailUs">
                <label>Contraseña:</label>
                <input type="password" class="form-control form-cust" name="passUs">
                <input class="form-control" type="submit" name="enviar" value="Enviar datos">
            </form>
        <?php
        }
        ?>
    </main>
    <footer></footer>
</body>