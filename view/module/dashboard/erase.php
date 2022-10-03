<?php
// print "<h1>hola carebola</h1>";
eraseUser();
function eraseUser(){
    try {
        $objDtoUser = new User();
        $objDtoUser -> setId($_GET['id']);
        $objDaoUser = new UserModel($objDtoUser);
        if ( $objDaoUser -> mldEraseUser() == true ) {

            echo "<script>
                    Swal.fire(
                        'Borrado!',
                        'El registro ha sido borrado',
                        'success'
                    )
                </script>";
                include_once 'view/module/dashboard/users.php';
        }

    } catch ( PDOException $e ) {
        echo "Error on the delete of the controller of show all " . $e->getMessage();
    }


}

?>
