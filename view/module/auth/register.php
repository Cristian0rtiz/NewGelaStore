<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="view/img/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GELA</title>
    <link rel="stylesheet" href="view/css/app.css">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="view/css/app.css" rel="stylesheet">
</head>
<body class="text-center">

    <main class="form-signin">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <form method="post" id="frmUsuario" class="container-xl">

        <img class="mb-4" src="view/img/logo.jpg" alt="" width="72" height="57">

        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Juan Perez" required="required" autofocus>
            <label for="floatingEmail">Name</label>
        </div>
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" id="txtClave" name="txtClave" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" id="txtClave" name="txtClave" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" onclick="validate(event)">Register</button>
    </form>
    <?php
          if (isset($_POST['txtNombre'])){
            $objCtrUser = new UserController();
            $objCtrUser -> setInsertUser(
              $_POST['txtNombre'],
              $_POST['txtEmail'],
              $_POST['txtUsuario'],
              $_POST['txtClave']
            );
          }
        ?>
    </main>
 <?php
 include_once 'view/module/footer.php';
 ?>

</body>
</html>

