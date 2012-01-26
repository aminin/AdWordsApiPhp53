<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class Language extends Criterion
{
    /**
     * This field can be selected using the value &quot;LanguageCode&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $code;
    /**
     * This field can be selected using the value &quot;LanguageName&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $name;
}