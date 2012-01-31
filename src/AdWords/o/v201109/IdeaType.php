<?php

namespace AdWords\o\v201109;



class IdeaType
{
    /**
     * Keyword idea.
     */
    const CHOICE_KEYWORD = 'KEYWORD';
    /**
     * Placement idea.
     */
    const CHOICE_PLACEMENT = 'PLACEMENT';

    private $_validValues = array(
        'KEYWORD',
        'PLACEMENT',
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