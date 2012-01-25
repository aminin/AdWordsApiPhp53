<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class EntityCountLimitExceeded extends ApiError
{
    /**
     * Specifies which level&#039;s limit was exceeded.
     * @var \AdWords\cm\v201109\EntityCountLimitExceededReason
     */
    public $reason;
    /**
     * Id of the entity whose limit was exceeded.
     * @var string
     */
    public $enclosingId;
    /**
     * The limit which was exceeded.
     * @var string
     */
    public $limit;
}