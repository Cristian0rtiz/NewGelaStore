<?php

eraseProduct();
function eraseProduct(){
    try {
        $objDtoProduct = new Product();
        $objDtoProduct -> setId($_GET['id']);
        $objDaoProduct = new ProductModel($objDtoProduct);
        if ($objDaoProduct -> mldEraseProduct() == true ) {

            echo "<script>
                    Swal.fire(
                        'Borrado!',
                        'El registro ha sido borrado',
                        'success'
                        )
                </script>";
                include_once 'view/module/dashboard/products.php';
        }

    } catch ( PDOException $e ) {
        echo "Error on the delete of the controller of show all " . $e->getMessage();
    }


}
?>