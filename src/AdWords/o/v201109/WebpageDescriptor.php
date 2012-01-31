<?php

namespace AdWords\o\v201109;



class WebpageDescriptor 
{
    /**
     * The URL of the webpage.
     * @var string
     */
    public $url;
    /**
     * The title of the webpage.
     * @var string
     */
    public $title;

    public function __construct($url = null, $title = null)
    {
        $this->url = $url;
        $this->title = $title;
    }
}