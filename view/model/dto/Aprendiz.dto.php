<?php
    class Aprendiz{

        private $code;
        private $aprendiz;
        private $dateB;
        private $sex;
        private $city;

        /*GETTERS*/
        public function getCode(){
            return $this-> code;
        }
        public function getAprendiz(){
            return $this-> aprendiz;
        }
        public function getdateB(){
            return $this-> dateB;
        }
        public function getSex(){
            return $this->sex;
        }
        public function getCity(){
            return $this->city;
        }
        /*SETTING */
        public function setCode ( $code ){
            $this -> code = $code;
        }
        public function setAprendiz ( $aprendiz ){
            $this -> aprendiz = $aprendiz;
        }
        public function setDateB ( $dateB ){
            $this -> dateB = $dateB;
        }
        public function setSex ( $sex ){
            $this -> sex = $sex;
        }
        public function setCity ( $city ){
            $this -> city = $city;
        }
    }

?>