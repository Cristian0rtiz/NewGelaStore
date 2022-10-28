<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Gela</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="view/css/ohsnap.css">
    <link rel="stylesheet" href="view/css/dragDrop.css">
    <link rel="stylesheet" href="view/css/sweetalert2.min.css">
    
    <link href="view/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="index.php">Gela</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form method="post">
          <input type="hidden" class="nav-item" name="close">
          <button type="submit" class="btn btn-outline-light px-3 fs-6">Sign out</button>
        </form>
        <?php
        if (isset($_POST['close'])){
            $_SESSION['login'] = false;
            unset($_SESSION['login']);
            header('location: index.php');
        }
        ?>
      </div>
    </div>
  </header>
  <div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php?route=users">
              <i class="bi bi-people-fill"></i>
              Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?route=products">
              <i class="bi bi-cart-fill"></i>
              Productos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?route=orders">
              <i class="bi bi-file-earmark-bar-graph"></i>
              ordenes
            </a>
        </ul>
      </div>
</div>
      <?php
          if (isset($_GET['route'])){
            switch ($_GET['route']) {
              case 'users':
                include_once 'users.php';
              break;
              case 'products':
                include_once 'products.php';
              break;
              case 'orders':
                include_once 'orders.php';
              break;
              case 'erase':
                include_once 'erase.php';
              break;
              case 'erasep':
                include_once 'eraseP.php';
              break;
              default:
                include_once 'users.php';
              break;
            }
      }   else {
        include_once 'users.php';
      }
      include_once 'view/module/footer.php';
    ?>
    <!-- <div id="ohsnap"></div> -->
    </nav>