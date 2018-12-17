<?php

class RoundedColorDiv extends ColorDiv
{
    private $round;

    public function __construct($width, $height, $color, $r)
    {
        parent:: __construct($width, $height, $color);
        $this -> round = $r;
    }

    public function getStyle()
    {
        $style = parent:: getStyle();
        return $style . "; border-radius: {$this -> round}px";
    }

}