<?php

namespace AdWords\cm\v201109;

/**
 * Contains a subset of ConversionTrackers resulting from the filtering
 * and paging of the ConversionTrackerService::get().
 */
class ConversionTrackerPage extends NoStatsPage {
    /**
     * @var ConversionTracker[]
     */
    public $entries;


    public function __construct($entries = NULL, $totalNumEntries = NULL, $PageType = NULL) {
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}