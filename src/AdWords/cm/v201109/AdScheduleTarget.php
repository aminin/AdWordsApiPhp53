<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Target;


class AdScheduleTarget extends Target
{
    /**
     * Day of the week the schedule applies to.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\DayOfWeek
     */
    public $dayOfWeek;
    /**
     * Starting hour in 24 hour time.
     * This field must be between 0 and 23, inclusive.
     * @var string
     */
    public $startHour;
    /**
     * Interval starts these minutes after the starting hour.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\MinuteOfHour
     */
    public $startMinute;
    /**
     * Ending hour in 24 hour time; 24 signifies end of the day.
     * This field must be between 0 and 24, inclusive.
     * @var string
     */
    public $endHour;
    /**
     * Interval ends these minutes after the ending hour.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\MinuteOfHour
     */
    public $endMinute;
    /**
     * Multiplying factor for bids during this specified time interval.
     * @var string
     */
    public $bidMultiplier;
}