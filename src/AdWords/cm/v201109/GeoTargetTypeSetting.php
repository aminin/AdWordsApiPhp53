<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Setting;


class GeoTargetTypeSetting extends Setting
{
    /**
     * The setting used for positive geotargeting in this particular campaign.
     * 
     * Again, the campaign can be positively targeted using solely LOP, solely
     * AOI, or either. Positive targeting triggers ads only for users
     * whose location is related to the given locations.
     * 
     * The default value is DONT_CARE.
     * @var \AdWords\cm\v201109\GeoTargetTypeSettingPositiveGeoTargetType
     */
    public $positiveGeoTargetType;
    /**
     * The setting used for negative geotargeting in this particular campaign.
     * 
     * Again, the campaign can be negatively targeted using solely LOP or
     * both AOI and LOP. Negative targeting triggers ads for all users
     * except those whose location is related to the given locations.
     * 
     * The default value is LOP.
     * @var \AdWords\cm\v201109\GeoTargetTypeSettingNegativeGeoTargetType
     */
    public $negativeGeoTargetType;
}