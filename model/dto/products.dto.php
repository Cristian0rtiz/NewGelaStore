<?php
    class Product{

        private $id;
        private $name;
        private $img;
        private $code;
        private $price;



        /*GETTERS*/
        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getImg(){
            return $this->img;
        }
        public function getCode(){
            return $this->code;
        }
        public function getPrice(){
            return $this->price;
        }
        /*SETTING */
        public function setId($id){
            $this -> id = $id;
        }
        public function setName($name){
            $this -> name = $name;
        }
        public function setImg($img){
            $this -> img = $img;
        }
        public function setCode($code) {
            $this -> code = $code;
        }
        public function setPrice($price){
            $this -> price = $price;
        }
    }

?>