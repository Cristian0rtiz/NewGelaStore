<?php
    //require_once "../model/conexion.php";
    //require_once "../model/dto/user.dto.php";

    class AprendizModel{
        private $code;
        private $aprendiz;
        private $dateB;
        private $sex;
        private $city;

        public function __construct($objDtoAprendiz){
            $this ->code = $objDtoAprendiz -> getCode();
            $this ->aprendiz = $objDtoAprendiz -> getAprendiz();
            $this ->password = $objDtoAprendiz -> getdateB();
            $this ->name = $objDtoAprendiz -> getSex();
            $this ->lastName = $objDtoAprendiz -> getCity();
        }
        public function getQueryLogin(){

            $sql  = "SELECT * FROM USER
                    WHERE USER = ? AND PASSWORD = ?";
            try {
                $objCon = new Conexion();

                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> user,  PDO::PARAM_STR);
                $stmt ->  bindParam(2,  $this -> password,  PDO::PARAM_STR);
                $stmt -> execute();
                $result = $stmt;
            } catch (Exception $e) {
                echo "Error al consultar Aprendiz " . $e ->getMessage();
            }
            return $result;
        }//END METHOD
        public function mldInsertAprendiz(){
            $sql  = "CALL spInsertAprendiz (?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> aprendiz,      PDO::PARAM_STR);
                $stmt ->  bindParam(2,  $this -> dateB,  PDO::PARAM_STR);
                $stmt ->  bindParam(3,  $this -> sex,      PDO::PARAM_STR);
                $stmt ->  bindParam(4,  $this -> city,  PDO::PARAM_STR);
                $estado = $stmt -> execute();
            } catch (PDOException $e) {
                echo "Error al insertar usuarios " . $e ->getMessage();
            }
            return $estado;
        }
        public function mldSearchAllAprendiz(){
            $respon=false;
            $sql  = "call spSearchAllAprendiz()";
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt -> execute();
                $respon = $stmt;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al mostrar los datos en el dao " . $e -> getMessage() ;
            }//end try-catch
            return $respon;
        }//END SEARCHALLAPRENDIZ
        public function mldEraseAprendiz(){
            $respon = false;
            $sql  = "call spDeleteAprendiz( ? )";
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> code,      PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al mostrar los datos en el dao " . $e -> getMessage() ;
            }//end try-catch
            return $respon;
        }


    public function mldUpdateAprendiz(){
        $sql  = "CALL spUpdateAprendiz (?, ?, ?, ?, ?);";
        $estado = false;
        try {
            $objCon = new Conexion();
            $stmt = $objCon->getConect() -> prepare($sql);
            $stmt ->  bindParam(1,  $this -> code, PDO::PARAM_INT);
            $stmt ->  bindParam(2,  $this -> aprendiz, PDO::PARAM_STR);
            $stmt ->  bindParam(3,  $this -> dateB, PDO::PARAM_STR);
            $stmt ->  bindParam(4,  $this -> sex, PDO::PARAM_STR);
            $stmt ->  bindParam(5,  $this -> city, PDO::PARAM_STR);

            $estado = $stmt -> execute();
        } catch (PDOException $e) {
            echo "Error al modfiicar aprendices " . $e ->getMessage();
        }
        return $estado;
    }
}//END CLASS
?>