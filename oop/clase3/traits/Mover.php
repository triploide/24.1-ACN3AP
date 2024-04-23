<?php

trait Mover
{
    private int $x;
    private int $y;

    public function mover(int $x, int $y) : void
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX() : int
    {
        return $this->x;
    }

    public function getY() : int
    {
        return $this->y;
    }
}
