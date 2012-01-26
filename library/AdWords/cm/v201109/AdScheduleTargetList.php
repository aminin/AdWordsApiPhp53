<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\TargetList;


class AdScheduleTargetList extends TargetList
{
    /**
     * List of ad schedule targets. An empty list means all time is targeted.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * @var \AdWords\cm\v201109\AdScheduleTarget
     */
    public $targets;
}