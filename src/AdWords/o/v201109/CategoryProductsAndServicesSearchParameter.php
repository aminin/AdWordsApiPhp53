<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class CategoryProductsAndServicesSearchParameter extends SearchParameter
{
    /**
     * A keyword category ID in the &quot;Products and Services&quot; taxonomy that all
     * search results should belong to.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $categoryId;
}