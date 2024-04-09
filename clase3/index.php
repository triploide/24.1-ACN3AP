<?php

require 'contracts/Seleccionable.php';
require 'contracts/Movible.php';
require 'traits/Mover.php';
require 'classes/Lago.php';
require 'classes/Juego.php';
require 'classes/Arbol.php';
require 'classes/Scout.php';
require 'classes/Aldeano.php';

echo '<pre>';

// $scout = new Scout;
// $scout->mover(10, 14);
// var_dump($scout);

// $aldeano = new Aldeano;
// $aldeano->mover(20, 30);
// var_dump($aldeano->getX());

$scout = new Scout;
$aldeano = new Aldeano;
$arbol = new Arbol;
$lago = new Lago;

$juego = new Juego;
$juego->seleccionar($scout);
$juego->seleccionar($aldeano);
$juego->seleccionar($arbol);
$juego->seleccionar($lago);
$juego->seleccionar('string');
// $juego->click(30, 40);

// var_dump($arbol, $aldeano, $scout);
var_dump($juego);
