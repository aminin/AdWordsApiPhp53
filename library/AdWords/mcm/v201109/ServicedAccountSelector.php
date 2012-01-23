<?php

namespace AdWords\mcm\v201109;



class ServicedAccountSelector 
{
    /**
     * If nonempty, only customers (recursively) managed by these &quot;seeds&quot; will be returned.
     * @var string
     */
    public $customerIds;
    /**
     * Whether to treat the results as a flat list instead of a graph of links.
     *                 If false, paging options will be ignored.
     * @var string
     */
    public $enablePaging;
    /**
     * Whether the result should only return accounts that themselves can manage clients.
     * @var string
     */
    public $submanagersOnly;
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