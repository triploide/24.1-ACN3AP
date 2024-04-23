<?php

class Scout implements Movible, Seleccionable
{
    use Mover;

    public function __construct()
    {
        $this->x = 3;
        $this->y = 5;
    }
}
