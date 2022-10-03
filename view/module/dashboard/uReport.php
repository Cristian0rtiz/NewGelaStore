<?php
  require_once '../../../controller/user.controller.php';
  require_once '../../../model/dao/user.dao.php';
  require_once '../../../model/dto/user.dto.php';
  require_once '../../../model/conexion.php';
  ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/dashboard.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<h2>Usuarios</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Usuario</th>
              <th scope="col">Correo</th>
              <th scope="col">Contraseña</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $data = new UserController();
              if(gettype($data)>0){
                foreach($data -> getSearchAllUser() as $key => $value){
                  print'<tr>
                  <td>'.$value["ID"].'</td>
                  <td>'.$value["NAME"].'</td>
                  <td>'.$value["USER"].'</td>
                  <td>'.$value["EMAIL"].'</td>
                  <td>'.$value["PASSWORD"].'</td>
                  </tr>';
                  // <td>
                  // <button class="btn btn-danger" onClick="erase(this.parentElement.parentElement)"><span data-feather="trash-2"></span></button>
                  // </td>
                  // <td>
                  // <button class="btn btn-info" onclick="edit(this.parentElement.parentElement)" data-toggle="modal" data-target="#myModal"><span class="text-light" data-feather="edit-2"></span></button>
                  // </td>
                        
                }
                
              }else{ echo'<tr>
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
                <td>Vacío</td>
            </tr>';}
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="../../js/dashboard.js"></script>
</body>
</html>


<?php

$info = ob_get_clean();
// print $info;
require '../../../vendor/autoload.php';
// require_once 'autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
// $options = $dompdf->getOptions();
// $options->setDefaultFont('Courier');
// $dompdf->setOptions($options);

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled'=> true));
$dompdf->setOptions($options);

//GENERATE PDF WITH HTML
$dompdf->loadHtml($info);
// print $info;

//TYPE PAPER
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("reporte.pdf", array("Attachment"=> false));
?>