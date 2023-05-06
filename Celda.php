<?php
class Celda{
    private $num;
    private $mostrar;

    public function __construct(){

    }

    public function getNum(){
        return $this->num;
    }

    public function getMostrar(){
        return $this->mostrar;
    }

    public function setNum($num){
        $this->num=$num;
    }
    public function setMostrar($mostrar){
        $this->mostrar=$mostrar;
    }
}