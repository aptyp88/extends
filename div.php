<?php

class Div
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this -> width = $width;
        $this -> height = $height;
    }

    public function getStyle()
    {
        return "width: {$this->width}px; height: {$this->height}px; border: 1px solid #000;";
    }

    public function __toString()
    {
        return '<div style="'.$this->getStyle().'"></div>';
    }
}