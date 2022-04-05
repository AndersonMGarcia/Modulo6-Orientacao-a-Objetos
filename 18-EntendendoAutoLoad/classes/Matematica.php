<?php

    class Matematica{

        private int $num1;
        private int $num2;

        # Método Construtor

        public function __construct()
        {
            $this->setNum1(0);
            $this->setNum2(0);
        }

        # Métodos

        public function somar($n1, $n2){
            $this->setNum1($n1);
            $this->setNum2($n2);
            return $this->getNum1() + $this->getNum2();
        }

        # Getters / Setters
        public function getNum1(){
            return $this->num1;
        }
        public function setNum1($num1){
            $this->num1 = $num1;
        }

        public function getNum2(){
            return $this->num2;
        }
        public function setNum2($num2){
            $this->num2 = $num2;
        }

    }