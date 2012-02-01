<?php

namespace AdWords\mcm\v201109;



class Link 
{
    /**
     * The ID of the manager represented in ths link.
     * @var \AdWords\mcm\v201109\CustomerId
     */
    public $managerId;
    /**
     * The ID of the client represented in this link.
     * @var \AdWords\mcm\v201109\CustomerId
     */
    public $clientId;
    /**
     * Whether the link has been established.
     * @var \AdWords\mcm\v201109\LinkType
     */
    public $typeOfLink;
    /**
     * The descriptive name used by the manager to refer to the client.
     * @var string
     */
    public $descriptiveName;
    /**
     * Indicates that this instance is a subtype of Link.
     * Although this field is returned in the response, it is ignored on input
     * and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $LinkType;
    private $_propertyMap = array(
        "Link.Type" => "LinkType",
    );

    public function __construct($managerId = null, $clientId = null, $typeOfLink = null, $descriptiveName = null, $LinkType = null)
    {
        $this->managerId = $managerId;
        $this->clientId = $clientId;
        $this->typeOfLink = $typeOfLink;
        $this->descriptiveName = $descriptiveName;
        $this->LinkType = $LinkType;
    }

    /**
     * Set property with php-incompatible name
     *
     * @param string $var   attribute name to set
     * @param mixed  $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        }
    }

    /**
     * Get property with php-incompatible name
     *
     * @param string $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else {
            return null;
        }
    }
}