<?php

namespace AdWords\cm\v201109;



class OperationAccessDeniedReason
{
    /**
     * Unauthorized invocation of a service&#039;s method (get, mutate, etc.)
     */
    const CHOICE_ACTION_NOT_PERMITTED = 'ACTION_NOT_PERMITTED';
    /**
     * Unauthorized ADD operation in invoking a service&#039;s mutate method.
     */
    const CHOICE_ADD_OPERATION_NOT_PERMITTED = 'ADD_OPERATION_NOT_PERMITTED';
    /**
     * Unauthorized REMOVE operation in invoking a service&#039;s mutate method.
     */
    const CHOICE_REMOVE_OPERATION_NOT_PERMITTED = 'REMOVE_OPERATION_NOT_PERMITTED';
    /**
     * Unauthorized SET operation in invoking a service&#039;s mutate method.
     */
    const CHOICE_SET_OPERATION_NOT_PERMITTED = 'SET_OPERATION_NOT_PERMITTED';
    /**
     * A mutate action is not allowed on this campaign, from this client.
     */
    const CHOICE_MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT = 'MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT';
    /**
     * The reason the invoked method or operation is prohibited is not known
     * (the client may be of an older version than the server).
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'ACTION_NOT_PERMITTED',
        'ADD_OPERATION_NOT_PERMITTED',
        'REMOVE_OPERATION_NOT_PERMITTED',
        'SET_OPERATION_NOT_PERMITTED',
        'MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT',
        'UNKNOWN',
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