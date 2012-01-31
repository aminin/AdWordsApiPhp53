<?php

namespace AdWords\o\v201109;



class AdFormatSpec 
{
    /**
     * The ad format specifier.
     * @var \AdWords\o\v201109\SiteConstantsAdFormat
     */
    public $format;

    public function __construct($format = null)
    {
        $this->format = $format;
    }
}