<?php

namespace AdWords\cm\v201109;

/**
 * Base class for Get results for a page of entities that do not use statistics.
 */
class NoStatsPage extends Page {

    public function __construct($totalNumEntries = NULL, $PageType = NULL) {
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}