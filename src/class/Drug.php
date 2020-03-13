<?php

    class Drug {
        private 
            $ID,
            $name,
            $producer,
            $controled,
            $quantify,
            $price;
        
        public function __construct (
            $name,
            $producer,
            $controled,
            $quantify,
            $price) 
        {
            $this -> name = $name;
            $this -> producer = $producer;
            $this -> controled = $controled;
            $this -> quantify = $quantify;
            $this -> price = $price;
        }

        /**
         * @DESC Getters
         */

        public function getID () {
            return $this -> ID;
        }

        public function getName() {
            return $this -> name;
        }
        public function getProducer() {
            return $this -> producer;
            
        }
        public function getQuantify() {
            return $this -> quantify;
            
        }
        public function getPrice() {
            return $this -> price;
        }

        /**
         * @DESC Setter
         */

        public function setID ($ID) {
            $this -> ID = $ID;
        }

        public function setName($name) {
            $this -> name = $name;
        }
        public function setProducer($procucer) {
            $this -> producer = $producer;
            
        }
        public function setQuantify($quantify) {
            $this -> quantify = $quantify;
            
        }
        public function setPrice($price) {
            $this -> price = $price;
        }
    }

?>