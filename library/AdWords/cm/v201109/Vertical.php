<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class Vertical extends Criterion
{
    /**
     * The category to target or exclude. Each subsequent element in the array
     * describes a more specific sub-category. For example,
     * {&quot;Pets &amp; Animals&quot;, &quot;Pets&quot;, &quot;Dogs&quot;} represents the &quot;Pets &amp;
     * Animals/Pets/Dogs&quot; category. A complete list of available vertical categories
     * is available here
     * This field is required and must not be empty.
     * This field can be selected using the value &quot;Path&quot;.
     * @var string
     */
    public $path;
}