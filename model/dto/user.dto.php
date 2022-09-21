<?php

    class User{

        private $code;
        private $name;
        private $email;
        private $user;
        private $password;



        /*GETTERS*/
        public function getCode(){
            return $this->code;
        }
        public function getName(){
            return $this->name;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getUser(){
            return $this->user;
        }
        public function getPassword(){
            return $this->password;
        }
        /*SETTING */
        public function setCode ( $code ){
            $this -> code = $code;
        }
        public function setName ( $name ){
            $this -> name = $name;
        }
        public function setEmail ( $email ){
            $this -> email = $email;
        }
        public function setUser ( $user ){
            $this -> user = $user;
        }
        public function setPassword ( $password ){
            $this -> password = $password;
        }
    }

?>