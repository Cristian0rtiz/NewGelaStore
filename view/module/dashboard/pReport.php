<?php
  require_once '../../../controller/products.controller.php';
  require_once '../../../model/dao/product.dao.php';
  require_once '../../../model/dto/products.dto.php';
  require_once '../../../model/conexion.php';
  ob_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Productos</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">imagen</th>
                <th scope="col">precio</th>
                <th scope="col">descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = new ProductController();
            if(gettype($data)>0){
                foreach($data -> getSearchAllProducts() as $key => $value){
                    print'<tr>
                    <td>'.$value["ID"].'</td>
                    <td>'.$value["NAME"].'</td>
                    <td><img class="img-responsive img-rounded img-thumbnail" src='.$value["IMG"].'></td>
                    <td>'.$value["PRICE"].'</td>
                <td>'.$value["CODE"].'</td>
                        </tr>';
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
        <div id="ohsnap"></div>
        </main>

</body>
</html>

<?php
include_once 'view/module/footer.php';

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
$options->set('tempDir', '/view/tmp');
$options->set('chroot', __DIR__);
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