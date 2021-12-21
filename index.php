<?php

class Movies{
public $nameF;
public $nPosti;
public $orario;
public $Room;


public function __construct(string $nameF, float $nPosti, float $orario, float $Room ) {
    $this->nameF = $nameF;
    $this->nPosti = $nPosti;
    $this->orario = $orario;
    $this->Room = $Room;
}


}

$film_1 = new Movies('Spiderman', 60, 19.30, 30);

var_dump($film_1);