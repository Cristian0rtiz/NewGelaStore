<?php
class AprendizController{

    public function getVerifyPass( $aprendiz, $dateB, $sex, $city){

        try{

            $objDtoAprendiz = new Aprendiz();
            $objDtoAprendiz -> setAprendiz($aprendiz);
            $objDtoAprendiz -> setdateB($dateB);
            $objDtoAprendiz -> setSex($sex);
            $objDtoAprendiz -> setCity($city);
            $objDaoAprendiz = new AprendizModel($objDtoAprendiz);

            if (gettype($objDaoAprendiz -> getQueryLogin() -> fetch()) == 'boolean'){

                print "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password error!'})
                </script>
                ";

            }else{
                $_SESSION['login'] = true;
                header('location: index.php');
            }

        } catch(Exception $e){
            echo "Error on the creation of the controller";
        }
    }
        public function setInsertAprendiz($aprendiz, $dateB, $sex, $city){
            try{
                $objDtoAprendiz = new Aprendiz();
                $objDtoAprendiz -> setAprendiz($aprendiz);
                $objDtoAprendiz -> setDateB($dateB);
                $objDtoAprendiz -> setSex($sex);
                $objDtoAprendiz -> setCity($city);

                $objDaoAprendiz = new AprendizModel($objDtoAprendiz);

                if ($objDaoAprendiz -> mldInsertAprendiz()){
                    echo "<script>
                    Swal.fire(
                        'Guardado',
                        'Registro insertado',
                        'success')
                    </script>";
                }

            }   catch(Exception $e){
                echo "Error en el controlador de insercion " . $e->getMessage();
            }

    }// FIN DEL CONTROLADOR DE INSERCION
    public function getSearchAllAprendiz(){
        $respon = false;
        try {
            $objDtoAprendiz = new Aprendiz();
            $objDaoAprendiz = new AprendizModel($objDtoAprendiz);
            $respon = $objDaoAprendiz -> mldSearchAllAprendiz()->fetchAll();
        } catch (PDOException $e) {
            echo "Error on the creation of the controller of show all " . $e->getMessage();
        }
        return $respon;
    }//FIN DE MOSTRAR TODOS
    public function setUpdateAprendiz($code, $aprendiz, $dateB, $sex, $city){
        try{
            $objDtoAprendiz = new Aprendiz();
            $objDtoAprendiz -> setCode($code);
            $objDtoAprendiz -> setAprendiz($aprendiz);
            $objDtoAprendiz -> setDateB($dateB);
            $objDtoAprendiz -> setSex($sex);
            $objDtoAprendiz -> setCity($city);
            $objDaoAprendiz = new AprendizModel($objDtoAprendiz);
            if ($objDaoAprendiz -> mldUpdateAprendiz()){
                echo "<script>
                    Swal.fire(
                    'Actualizado!',
                    'El registro ha sido actualizado',
                    'success'
                )
            </script>";
            }
        } catch(PDOException $e){
            echo 'Error al modificara'.$e->getMessage();
        }
    }//END UPDATE

}// END CLASS

//$objCtr = new UserController();
//$objCtr -> getVerifyPass('abrazo','150');

// ?>