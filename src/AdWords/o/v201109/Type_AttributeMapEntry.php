<?php

namespace AdWords\o\v201109;



class Type_AttributeMapEntry 
{
    /**
     * @var \AdWords\o\v201109\AttributeType
     */
    public $key;
    /**
     * @var \AdWords\o\v201109\Attribute
     */
    public $value;

    public function __construct($key = null, $value = null)
    {
        $this->key = $key;
        $this->value = $value;
    }
}