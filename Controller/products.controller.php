<?php
class ProductController{

    public function setInsertProducts($name, $img, $code, $price){
        try{
            $objDtoProduct = new Product();
            $objDtoProduct -> setName($name);
            $objDtoProduct -> setImg($img);
            $objDtoProduct -> setCode($code);
            $objDtoProduct -> setPrice($price);

            $objDaoProduct = new ProductModel($objDtoProduct);

            if ($objDaoProduct -> mldInsertProduct()){
                echo "<script>
                    Swal.fire(
                    'Guardado',
                    'Registro insertado',
                    'success')
                </script>";
            }

        } catch(Exception $e){
            echo "Error en el controlador de insercion " . $e->getMessage();
        }

    }// FIN DEL CONTROLADOR DE INSERCION
    public function getSearchAllProducts(){
        $respon = false;
        try {
            $objDtoProduct = new Product();
            $objDaoProduct = new productModel($objDtoProduct);
            $respon = $objDaoProduct -> mldSearchAllProducts()->fetchAll();
        } catch (PDOException $e) {
            echo "Error on the creation of the 
            controller of show all " . $e->getMessage();
        }
        return $respon;
    }//FIN DE MOSTRAR TODOS
    public function setUpdateProduct($id, $name, $img, $code, $price){
        try{
            $objDtoProduct = new Product();
            $objDtoProduct -> setId($id);
            $objDtoProduct -> setName($name);
            $objDtoProduct -> setImg($img);
            $objDtoProduct -> setCode($code);
            $objDtoProduct -> setPrice($price);
            $objDaoProduct = new ProductModel($objDtoProduct);
            if ($objDaoProduct -> mldUpdateProduct()){
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
    }
}//END UPDATEprivate $id;
?>