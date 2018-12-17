<?php

class Div
{
    protected $width;
    protected $height;
    public static $borderColor = '#0f0';
    const BORDER_WIDTH = 10;

    public function __construct($width, $height)
    {
        $this -> width = $width;
        $this -> height = $height;
    }

    public function getStyle()
    {
        return "width: {$this->width}px; height: {$this->height}px; border: " . self:: BORDER_WIDTH . "px solid " . self::$borderColor . ";";
    }

    public function __toString()
    {
        return '<div style="'.$this->getStyle().'"></div>';
    }

    public function getWidth()
    {
        return $this -> width;
    }

    public static function getBorder()
    {
        return self :: $borderColor;
    }
}