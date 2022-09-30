<div class="collapse navbar-collapse"></div>
    <header class="p-2 mb-2">
        <div class="container-lg">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <button href="../module/Main.php" class="btn btn-outline-light-bottom-3 btn-lg">GelaStore</button>
            <br><br>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href= "view/module/about.php" class="nav-link px-2 link-dark">Acerca de nosotros</a></li>
                <li class="nav-item"><a href= "view/module/carrito.php" class="nav-link px-2 link-dark">Tu carrito</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Opciones de soporte</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" onClick="window.open('mailto:gelastore@gmail.com' )">Escribenos un correo</a></li>
                        <li><a class="dropdown-item" href="https://api.WhatsApp.com/send?phone=3012439584">Chatea con nosotros</a></li>
                    </ul>
                </li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Buscar... " aria-label="Search">
            </form>
            <div class="text-end">
                <a href="view/module/auth/login.php" type="button" class="btn btn-primary">Login</a>
                <a href="view/module/auth/register.php" type="button" class="btn btn-primary">Sign-up</a>
            </div>
            </div>
        </div>
    </header>