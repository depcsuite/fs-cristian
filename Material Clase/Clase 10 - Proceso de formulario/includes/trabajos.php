<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Primera web</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <?php include_once("navbar.php"); ?>

        </header>
    </div>


    <div class="container-fluid">
        <main>
            <!–– PRIMERA FILA -->

                <div class="row">
                    <div class="col-12 col-sm-8">
                        <div class="container p-5">
                            <h1 class="text-cust">Mis productos...</h1>
                            <p class="desc-cust">A continuación una lista de mis productos y trabajos</p>

                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="container p-5">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Menú</h3>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><a class="nav-link link-cust" href="#t1">Trabajo I</a></li>
                                        <li><a class="nav-link link-cust" href="#t2">Trabajo II</a></li>
                                        <li><a class="nav-link link-cust" href="#t3">Trabajo III</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row">

                    <div class="col-12 col-sm-8 p-5">

                        <div class="cont-cust p-5">
                            <h3 id="t1">Trabajo I</h3>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-12 col-sm-4 p-5">

                    </div>


                </div>

                <div class="row">
                    <div class="col-12 col-sm-4 p-5">

                    </div>
                    <div class="col-12 col-sm-8 p-5">

                        <div class="cont-cust p-5">
                            <h3 id="t2">Trabajo II</h3>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                    <p>Contenidos acerca de mi primer producto....</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="col-12 col-sm-8 p-5">

                            <div class="cont-cust p-5">
                                <h3 id="t3">Trabajo III</h3>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                        <p>Contenidos acerca de mi primer producto....</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-sm-4 p-5">

                        </div>


                    </div>


        </main>


        <?php include_once("footer.php"); ?>
    </div>
</body>

</html>