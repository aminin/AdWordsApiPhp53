<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class SeedAdGroupIdSearchParameter extends SearchParameter
{
    /**
     * The adGroupId for the AdGroup that should be used as a seed
     * for generating new ideas.
     * @var string
     */
    public $adGroupId;
}