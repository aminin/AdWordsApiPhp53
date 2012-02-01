<?php

namespace AdWords\mcm\v201109;



class ServicedAccountSelector 
{
    /**
     * If nonempty, only customers (recursively) managed by these &quot;seeds&quot; will be returned.
     * @var string
     */
    public $customerIds;
    /**
     * Whether to treat the results as a flat list instead of a graph of links.
     * If false, paging options will be ignored.
     * @var string
     */
    public $enablePaging;
    /**
     * Whether the result should only return accounts that themselves can manage clients.
     * @var string
     */
    public $submanagersOnly;

    public function __construct($customerIds = null, $enablePaging = null, $submanagersOnly = null)
    {
        $this->customerIds = $customerIds;
        $this->enablePaging = $enablePaging;
        $this->submanagersOnly = $submanagersOnly;
    }
}