<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Attribute;


class WebpageDescriptorAttribute extends Attribute
{
    /**
     * {@link WebpageDescriptor} value contained by this {@link Attribute}.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\WebpageDescriptor
     */
    public $value;
}