<?php

namespace AdWords\cm\v201109;



class Paging 
{
    /**
     * Index of the first result to return in this page.
     * This field must be greater than or equal to 0.
     * @var string
     */
    public $startIndex;
    /**
     * Maximum number of results to return in this page. Set this to a reasonable value to limit
     * the number of results returned per page.
     * This field must be greater than or equal to 0.
     * @var string
     */
    public $numberResults;
    private $_propertyMap = array (
    );

    /**
     * Set property with php-incompatiable name
     *
     * @param $var attribute name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        } else if (get_parent_class(__CLASS__)) {
            parent::__set($var, $value);
        }
    }

    /**
     * Get property with php-incompatiable name
     *
     * @param $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else if (get_parent_class(__CLASS__)) {
            parent::__get($var);
        } else {
            return null;
        }
    }
}