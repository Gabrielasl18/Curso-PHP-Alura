<?php 

class Carro {
    private $name;
    private $ano;
    private $color;

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }   
    public function getAno() {
        return $this->ano;
    }
    public function setAno($ano) {
        $this->ano = $ano;
    }
    public function getColor() {
        return $this->color;
    }
    public function setColor($color) {
        $this->color = $color;
    }
}