<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Media;


class Audio extends Media
{
    /**
     * The duration of the associated audio, in milliseconds.
     * This field can be selected using the value &quot;DurationMillis&quot;.This field can be filtered on.
     * @var string
     */
    public $durationMillis;
    /**
     * The streaming url of the audio.
     * This field can be selected using the value &quot;StreamingUrl&quot;.
     * @var string
     */
    public $streamingUrl;
    /**
     * Indicates whether the audio is ready to play on the web.
     * This field can be selected using the value &quot;ReadyToPlayOnTheWeb&quot;.
     * @var string
     */
    public $readyToPlayOnTheWeb;
}