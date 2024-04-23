<?php

class Aldeano implements Movible, Seleccionable
{
    use Mover;

    public function __construct()
    {
        $this->x = 10;
        $this->y = 10;
    }
}
