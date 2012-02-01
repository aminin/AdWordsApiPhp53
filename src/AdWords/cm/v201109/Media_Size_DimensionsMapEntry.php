<?php

namespace AdWords\cm\v201109;



class Media_Size_DimensionsMapEntry 
{
    /**
     * @var \AdWords\cm\v201109\MediaSize
     */
    public $key;
    /**
     * @var \AdWords\cm\v201109\Dimensions
     */
    public $value;

    public function __construct($key = null, $value = null)
    {
        $this->key = $key;
        $this->value = $value;
    }
}