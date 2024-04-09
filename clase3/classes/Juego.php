<?php

class Juego
{
    private array $seleccion;

    public function __construct()
    {
        $this->seleccion = [];
    }

    public function seleccionar(Seleccionable $elemento)
    {
        $elemento->setSeleccion(true);
        $this->seleccion[] = $elemento;
    }

    public function click($x, $y)
    {
        // Mover todos los elementos seccionados
        foreach($this->seleccion as $elemento) {
            // Elemento, sos un movible?
            if ($elemento instanceof Movible) {
                $elemento->mover($x, $y);
            }
        }

        $this->seleccion = [];
    }
}
