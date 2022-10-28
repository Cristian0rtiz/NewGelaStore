<?php

    /////////////////////////////////////////////
    //                 CONTROLLER              //
    /////////////////////////////////////////////
    require_once 'controller/kernel.controller.php';
    require_once 'controller/user.controller.php';
    require_once 'controller/dashboard.controller.php';
    require_once 'controller/products.controller.php';
    /////////////////////////////////////////////
    //                   MODEL                 //
    /////////////////////////////////////////////
    require_once 'model/dao/user.dao.php';
    require_once 'model/dto/user.dto.php';
    require_once 'model/dao/product.dao.php';
    require_once 'model/dto/products.dto.php';
    
    /////////////////////////////////////////////
    //                 CONEXION                //
    /////////////////////////////////////////////
    require_once 'model/conexion.php';

    /////////////////////////////////////////////
    //                  LIBRARYS               //
    /////////////////////////////////////////////
    

    /////////////////////////////////////////////
                    /* run */ 
    $objRun = new Dashboard();
    // $objRun = new Kernel();
    $objRun->getIntro();

?>