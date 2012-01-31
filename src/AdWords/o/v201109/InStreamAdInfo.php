<?php

namespace AdWords\o\v201109;



class InStreamAdInfo 
{
    /**
     * The maximum ad duration (sec).
     * @var string
     */
    public $maxAdDuration;
    /**
     * The minimum ad duration (sec).
     * @var string
     */
    public $minAdDuration;
    /**
     * The median ad duration (sec).
     * @var string
     */
    public $medianAdDuration;
    /**
     * Percentage of ads shown before the video content.
     * @var string
     */
    public $preRollPercent;
    /**
     * Percentage of ads shown during the video content.
     * @var string
     */
    public $midRollPercent;
    /**
     * Percentage of ads shown after the video content.
     * @var string
     */
    public $postRollPercent;

    public function __construct($maxAdDuration = null, $minAdDuration = null, $medianAdDuration = null, $preRollPercent = null, $midRollPercent = null, $postRollPercent = null)
    {
        $this->maxAdDuration = $maxAdDuration;
        $this->minAdDuration = $minAdDuration;
        $this->medianAdDuration = $medianAdDuration;
        $this->preRollPercent = $preRollPercent;
        $this->midRollPercent = $midRollPercent;
        $this->postRollPercent = $postRollPercent;
    }
}