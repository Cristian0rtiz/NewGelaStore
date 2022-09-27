<?php

    class Matricula{

        private $mCode;
        private $mDate;
        private $nameC;
        private $cost;
        private $state;
        private $pCode;
        private $aCode;

        ///////GET/////
        public function getMCode(){
            return $this -> mCode;
        }

        public function getMDate(){
            return $this -> mDate;
        }

        public function getNameC(){
            return $this -> nameC;
        }

        public function getCost(){
            return $this -> cost;
        }

        public function getState(){
            return $this -> state;
        }

        public function getPCode(){
            return $this -> pCode;
        }

        public function getACode(){
            return $this -> aCode;
        }
        
        //////SET//////
        public function setMCode($mCode){
            $this-> mCode = $mCode;
        }

        public function setMDate($mDate){
            $this-> mDate = $mDate;
        }

        public function setNameC($nameC){
            $this-> nameC = $nameC;
        }

        public function setCost($cost){
            $this-> cost = $cost;
        }

        public function setState($state){
            $this-> state = $state;
        }

        public function setPCode($pCode){
            $this-> pCode = $pCode;
        }

        public function setACode($aCode){
            $this-> aCode = $aCode;
        }
        
        
        

        

    }

?>