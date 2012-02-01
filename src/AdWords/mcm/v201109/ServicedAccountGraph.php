<?php

namespace AdWords\mcm\v201109;



class ServicedAccountGraph 
{
    /**
     * The accounts found that match the selector query
     * @var \AdWords\mcm\v201109\Account
     */
    public $accounts;
    /**
     * The manager links between the listed accounts
     * @var \AdWords\mcm\v201109\Link
     */
    public $links;

    public function __construct($accounts = null, $links = null)
    {
        $this->accounts = $accounts;
        $this->links = $links;
    }
}