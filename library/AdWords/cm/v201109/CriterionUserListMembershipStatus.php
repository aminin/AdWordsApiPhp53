<?php

namespace AdWords\cm\v201109;



class CriterionUserListMembershipStatus
{
    /**
     * Open status - list is accruing members and can be targeted to.
     */
    const CHOICE_OPEN = 'OPEN';
    /**
     * Closed status - No new members being added. Can not be used for targeting.
     */
    const CHOICE_CLOSED = 'CLOSED';

    private $_validValues = array(
        'OPEN',
        'CLOSED',
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