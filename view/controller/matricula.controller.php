<?php
    class MatriculaController{

    public function setInsertMatricula($mDate,$nameC,$cost,$state,$pCode,$aCode){
        try{
            $objDtoMatricula = new Matricula();
            $objDtoMatricula ->  setMDate($mDate);
            $objDtoMatricula ->  setNameC($nameC);
            $objDtoMatricula ->  setCost($cost);
            $objDtoMatricula ->  setState($state);
            $objDtoMatricula ->  setPCode($pCode);
            $objDtoMatricula ->  setACode($aCode);
            
            $objDaoMatricula = new MatriculaModel($objDtoMatricula);
            if($objDaoMatricula -> mldInsertMatricula()){
                ;
            }
        }catch (exception $e) {
            print "error en el controlador de matricula".$e ->getMessage();
        }


    }

    public function setInsertUser($name,$lastName,$user,$pass){
        try {
            $objDtoMatricula = new Matricula();
            $$objDtoMatricula -> setMDate($name);
            $$objDtoMatricula -> setNameC($lastName);
            $$objDtoMatricula -> setCost($user);
            $objDtoMatricula -> setState($pass); 

            $objDaoUser = new UserModel($objDtoUser);
            if($objDaoUser -> mldInsertUser()){
                ;
            }

        } catch (Exception $e) {
            print "error en el controlador de insercion".$e ->getMessage();
        }
        

    }//fin controlador insercion

    }

    

?>