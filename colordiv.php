<?php

class ColorDiv extends Div
{
    private $bg;

    public function __construct($width, $height, $color)
    {
        $this -> width = $width;
        $this -> height = $height;
        $this -> bg = $color;
    }

    public function getStyle()
    {
        return "width: {$this->width}px; height: {$this->height}px; border: 1px solid #000; background: {$this -> bg};";
    }

    
}