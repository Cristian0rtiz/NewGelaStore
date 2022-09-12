<?php
session_start();
class Kernel{
    public function getIntro(){
        
        if (isset($_SESSION['login']) and $_SESSION['login'] == true ){
            require_once "view/module/Main.php";
        }else{
            require_once "view/module/Main.php";
        }

    }
}
?>