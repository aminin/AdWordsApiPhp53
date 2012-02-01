<?php

namespace AdWords\cm\v201109;



class Dimensions 
{
    /**
     * Width of the dimension
     * This field can be selected using the value &quot;Width&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $width;
    /**
     * Height of the dimension
     * This field can be selected using the value &quot;Height&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $height;

    public function __construct($width = null, $height = null)
    {
        $this->width = $width;
        $this->height = $height;
    }
}