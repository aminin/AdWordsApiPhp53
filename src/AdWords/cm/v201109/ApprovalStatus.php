<?php

namespace AdWords\cm\v201109;



class ApprovalStatus
{
    /**
     * Criterion with no reportable policy problems.
     */
    const CHOICE_APPROVED = 'APPROVED';
    /**
     * Criterion that is yet to be reviewed.
     */
    const CHOICE_PENDING_REVIEW = 'PENDING_REVIEW';
    /**
     * Criterion that is under review.
     */
    const CHOICE_UNDER_REVIEW = 'UNDER_REVIEW';
    /**
     * Criterion disapproved due to policy violation.
     */
    const CHOICE_DISAPPROVED = 'DISAPPROVED';

    private $_validValues = array(
        'APPROVED',
        'PENDING_REVIEW',
        'UNDER_REVIEW',
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