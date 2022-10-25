<?php
    //require_once "../model/conexion.php";
    //require_once "../model/dto/user.dto.php";

    class productModel{
        private $id;
        private $name;
        private $img;
        private $code;
        private $price;

        public function __construct($objDtoProduct){
            $this -> id = $objDtoProduct -> getId();
            $this -> name = $objDtoProduct -> getName();
            $this -> img = $objDtoProduct -> getImg();
            $this -> code = $objDtoProduct -> getCode();
            $this -> price = $objDtoProduct -> getPrice();
        }
        
        public function mldInsertProduct(){
            $sql  = "CALL spInsertProduct (?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConect() -> prepare($sql);
                $stmt ->  bindParam(1, $this -> name, PDO::PARAM_STR);
                $stmt ->  bindParam(3, $this -> img, PDO::PARAM_STR);
                $stmt ->  bindParam(2, $this -> code, PDO::PARAM_STR);
                $stmt ->  bindParam(4, $this -> price, PDO::PARAM_STR);
                $estado = $stmt -> execute();
            } catch (PDOException $e) {
                echo "Error al insertar productos " . $e ->getMessage();
            }
            return $estado;
        }
        public function mldSearchAllProducts(){
            $respon = false;
            $sql  = "call spShowAllProducts()";
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConect() -> prepare($sql);
                $stmt -> execute();
                $respon = $stmt;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al mostrar los datos en el dao " . $e -> getMessage() ;
            }//end try-catch
            return $respon;
        }//END SEARCHALLUSER
        public function mldEraseProduct(){
            $respon = false;
            $sql  = "call spDeleteProduct( ? )";
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConect() -> prepare($sql);
                $stmt ->  bindParam(1, $this -> id, PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al mostrar los datos en el dao " . $e -> getMessage() ;
            }//end try-catch
            return $respon;
        }

    public function mldUpdateProduct(){
        $sql  = "CALL spUpdateProduct (?, ?, ?, ?, ?);";
        $estado = false;
        try {
            $objCon = new Conexion();
            $stmt = $objCon->getConect() -> prepare($sql);
            $stmt -> bindParam(1, $this -> id, PDO::PARAM_INT);
            $stmt -> bindParam(2, $this -> name, PDO::PARAM_STR);
            $stmt -> bindParam(3, $this -> img, PDO::PARAM_STR);
            $stmt -> bindParam(4, $this -> code, PDO::PARAM_STR);
            $stmt -> bindParam(5, $this -> price, PDO::PARAM_STR);

            $estado = $stmt -> execute();
        } catch (PDOException $e) {
            echo "Error al modfiicar Productos " . $e ->getMessage();
        }
        return $estado;
    }
}//END CLASS
?>