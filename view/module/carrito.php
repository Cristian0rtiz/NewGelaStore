<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alimentos GELA</title>
    <link rel="shortcut icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/styleMain.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>


<body>
    
    <div class="collapse navbar-collapse"></div>
    <header class="p-2 mb-2">
        <div class="container-lg">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="../module/Main.php" class="btn btn-outline-light-bottom-3 btn-lg">GelaStore</a>
            <br><br>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href="../module/About.php" class="nav-link px-2 link-dark">Acerca de nosotros</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 link-dark">Tu carrito</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Opciones de soporte</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="#">Llamanos 👉 3004589584</a></li>
                        <li><a class="dropdown-item" href="#">Escribenos 👉 GelaStore@gmail.com</a></li>
                        <li><a class="dropdown-item" href="#">Chatea con nosotros 👉 +57 3004589584</a></li>
                    </ul>
                </li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Buscar... " aria-label="Search">
            </form>
            <div class="text-end">
                <a href="#" type="button" class="btn btn-primary">Login</a>
                <a href="#" type="button" class="btn btn-primary">Sign-up</a>
            </div>
            </div> 
        </div>
    </header>

    <main>
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Nombre_prod
                            </td>
                            <td>
                                <br>
                            </td>
                            <td>
                                <input type="number" min="1" max="30" step="1" value="" name="" id="cantidad">
                            </td>
                            <td>
                                <br>
                            </td>
                            <td>
                                <a href="#" id="eliminar" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="eliminarModal">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="2">
                                <p class="h3" id="total">#</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-4 offset-sm-6 d-grid gap-2">
                    <a href="#"class="btn btn-primary btn-md">Pagar</a>
                </div>
            </div>
        </div>
    </main>
    <br><br><br><br>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 GelaStore </p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
            <li class="list-inline-item"><a href="#">Twitter</a></li>
            <li class="list-inline-item"><a href="#">Soporte</a></li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>