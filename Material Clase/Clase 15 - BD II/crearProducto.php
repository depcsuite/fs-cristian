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
        include_once("Clases/Producto.php");

        if (isset($_POST["enviar"])) {
            $n = $_POST["nombreProd"];
            $d = $_POST["descProd"];
            $p = $_POST["precProd"];
            $c = $_POST["cantProd"];
            $i = $_POST["imgProd"];
            $idT = $_POST["tipoProd"];
            $idM = $_POST["marcProd"];
            $producto = new Producto($n, $c, $p, $d, $i, $idT, $idM);
            $producto->crearProducto();
            echo "Producto creado.<br>";

            
        } else {

        ?>
            <form action="crearProducto.php" method="POST">
                <label>Nombre producto:</label>
                <input type="text" class="form-control form-cust" name="nombreProd">
                <label>Descripción:</label>
                <textarea class="form-control form-cust" name="descProd">Ingrese la descripción</textarea>
                <label>Cantidad inicial:</label>
                <input type="text" class="form-control form-cust" name="cantProd">
                <label>Precio:</label>
                <input type="text" class="form-control form-cust" name="precProd">
                <label>Imagen:</label>
                <input type="text" class="form-control form-cust" name="imgProd">
                <label>ID tipo:</label>
                <input type="text" class="form-control form-cust" name="tipoProd">
                <label>ID marca:</label>
                <input type="text" class="form-control form-cust" name="marcProd">
                <input class="form-control" type="submit" name="enviar" value="Crear producto">
            </form>
        <?php
        }
        ?>
    </main>
    <footer></footer>
</body>