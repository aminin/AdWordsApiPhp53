<?php

namespace AdWords\o\v201109;



class TargetingIdeaPage 
{
    /**
     * Total number of entries that can be retrieved using
     * the get method.
     * @var string
     */
    public $totalNumEntries;
    /**
     * The result entries in this page, as list of {@link TargetingIdea}s.
     * @var \AdWords\o\v201109\TargetingIdea
     */
    public $entries;

    public function __construct($totalNumEntries = null, $entries = null)
    {
        $this->totalNumEntries = $totalNumEntries;
        $this->entries = $entries;
    }
}