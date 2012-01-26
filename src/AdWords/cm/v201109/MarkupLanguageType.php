<?php

namespace AdWords\cm\v201109;



class MarkupLanguageType
{
    /**
     * HyperText Markup Language.
     */
    const CHOICE_HTML = 'HTML';
    /**
     * Compact HyperText Markup Language.
     */
    const CHOICE_CHTML = 'CHTML';
    /**
     * eXtensible HyperText Markup Language.
     */
    const CHOICE_XHTML = 'XHTML';
    /**
     * Wireless Markup Language.
     */
    const CHOICE_WML = 'WML';

    private $_validValues = array(
        'HTML',
        'CHTML',
        'XHTML',
        'WML',
    );

    private $_value;

    public function __construct($value)
    {
        if (!in_array($value, $this->_validValues))
            throw new \InvalidArgumentException(
                sprintf('Invalid enum value %s', $value)
            );

        $this->_value = $value;
    }

    public function __toString()
    {
        return $this->_value;
    }
}