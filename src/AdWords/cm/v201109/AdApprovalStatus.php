<?php

namespace AdWords\cm\v201109;



class AdApprovalStatus
{
    /**
     * Approved
     */
    const CHOICE_APPROVED = 'APPROVED';
    /**
     * Approved - famiy safe
     */
    const CHOICE_FAMILY_SAFE = 'FAMILY_SAFE';
    /**
     * Approved - non-family safe
     */
    const CHOICE_NON_FAMILY_SAFE = 'NON_FAMILY_SAFE';
    /**
     * Approved - adult content
     */
    const CHOICE_PORN = 'PORN';
    /**
     * Pending review
     */
    const CHOICE_UNCHECKED = 'UNCHECKED';
    /**
     * Disapproved
     */
    const CHOICE_DISAPPROVED = 'DISAPPROVED';

    private $_validValues = array(
        'APPROVED',
        'FAMILY_SAFE',
        'NON_FAMILY_SAFE',
        'PORN',
        'UNCHECKED',
        'DISAPPROVED',
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