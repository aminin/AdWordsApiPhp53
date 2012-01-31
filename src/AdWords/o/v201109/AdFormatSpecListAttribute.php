<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Attribute;


class AdFormatSpecListAttribute extends Attribute
{
    /**
     * A list of {@link AdFormatSpec}s indicating the type of ad
     * the network supports. For example, an ad of type
     * {@link AdFormat#IMAGE}.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\AdFormatSpec
     */
    public $value;
}