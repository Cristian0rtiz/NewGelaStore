<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Pagar compra</title>

    <script src="https://www.paypal.com/sdk/js?client-id=AeAbBP26bjOqlMLlJF-2OTndvVvQGTgtmLbMq6lj_-pU9V-iKYicoMvQwSzK0tiQIlJAP2dC7Fv6XEOD&currency=USD"></script>
</head>
<body class="d-center h-100px text-center text-dark bg-white">

    <header class="p-2 mb-2">
        <div class="container-lg">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="../module/Main.php" class="btn btn-outline-light-bottom-3 btn-lg">GelaStore</a>
            <br><br>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href="#" class="nav-link px-2 link-dark">Acerca de nosotros</a></li>
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
                <a href="{{route('registro')}}" type="button" class="btn btn-primary">Sign-up</a>
            </div>
            </div> 
        </div>
    </header>

    <main>
    <div class="p-lg-5" id="paypal-button-container" name="paypalBtn"></div>
    <script src="../js/PaypalSc.js"></script>
    </main>
    
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 GelaStore </p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
            <li class="list-inline-item"><a href="#">Twitter</a></li>
            <li class="list-inline-item"><a href="#">Soporte</a></li>
        </ul>
    </footer>
</body>
</html>