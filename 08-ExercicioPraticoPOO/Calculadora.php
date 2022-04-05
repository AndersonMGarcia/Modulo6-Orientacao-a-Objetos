<?php

    class Calculadora{

        private float $num = 0;


        # Métodos
        public function add(float $num = 0){

            $this->setNum($this->getNum() + $num);
        }

        public function sub(float $num = 0){
            $this->setNum($this->getNum() - $num);
        }

        public function mult(float $num = 0){
            $this->setNum($this->getNum() * $num);
        }

        public function div(float $num){
            $this->setNum($this->getNum() / $num);
        }

        

        #Getters / Setters
        public function getNum(){
            return $this->num;
        }
        public function setNum($num){
            $this->num = $num;
        }
        


    }