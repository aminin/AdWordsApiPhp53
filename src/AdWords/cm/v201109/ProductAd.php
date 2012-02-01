<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Ad;


class ProductAd extends Ad
{
    /**
     * Promotional line for this ad. This text will be displayed in addition to
     * the products.
     * This field can be selected using the value &quot;PromotionLine&quot;.This field can be filtered on.
     * @var string
     */
    public $promotionLine;
}