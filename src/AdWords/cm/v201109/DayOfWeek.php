<?php

namespace AdWords\cm\v201109;



class DayOfWeek
{
    /**
     * The day of week named Monday.
     */
    const CHOICE_MONDAY = 'MONDAY';
    /**
     * The day of week named Tuesday.
     */
    const CHOICE_TUESDAY = 'TUESDAY';
    /**
     * The day of week named Wednesday.
     */
    const CHOICE_WEDNESDAY = 'WEDNESDAY';
    /**
     * The day of week named Thursday.
     */
    const CHOICE_THURSDAY = 'THURSDAY';
    /**
     * The day of week named Friday.
     */
    const CHOICE_FRIDAY = 'FRIDAY';
    /**
     * The day of week named Saturday.
     */
    const CHOICE_SATURDAY = 'SATURDAY';
    /**
     * The day of week named Sunday.
     */
    const CHOICE_SUNDAY = 'SUNDAY';

    private $_validValues = array(
        'MONDAY',
        'TUESDAY',
        'WEDNESDAY',
        'THURSDAY',
        'FRIDAY',
        'SATURDAY',
        'SUNDAY',
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