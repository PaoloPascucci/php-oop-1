<?php

class Movies{
public $nameF;
public $nPosti;


public function __construct( $nameF,  $nPosti ) {
    $this->nameF = $nameF;
    $this->nPosti = $nPosti;
    $this->orario = $orario;
    $this->Room = $Room;
}

public function getnameF(string $nameF){
    return $this->nameF;
}
public function getnPosti(float $nPosti){
    return $this->nPosti;
}
}

$Movie_1 = new Movies('Spiderman', 60);
$Movie_2 = new Movies('Avengers', 10);

var_dump($Movie_1, $Movie_2);