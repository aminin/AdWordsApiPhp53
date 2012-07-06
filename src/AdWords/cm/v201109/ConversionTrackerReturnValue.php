<?php

namespace AdWords\cm\v201109;

/**
 * A container for return values from the ConversionTrackerService.
 */
class ConversionTrackerReturnValue extends ListReturnValue {
    /**
     * @var ConversionTracker[]
     */
    public $value;

    public function __construct($value = NULL, $ListReturnValueType = NULL) {
        $this->value = $value;
        $this->ListReturnValueType = $ListReturnValueType;
    }
}