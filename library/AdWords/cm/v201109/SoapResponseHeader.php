<?php

namespace AdWords\cm\v201109;



class SoapResponseHeader 
{
    /**
     * Unique id that identifies this request. If developers have any support issues, sending us
     * this id will enable us to find their request more easily.
     * @var string
     */
    public $requestId;
    /**
     * The name of the service being invoked.
     * @var string
     */
    public $serviceName;
    /**
     * The name of the method being invoked.
     * @var string
     */
    public $methodName;
    /**
     * Number of operations performed for this SOAP request.
     * @var string
     */
    public $operations;
    /**
     * Elapsed time in milliseconds between the AdWords API receiving the request and sending the
     * response.
     * @var string
     */
    public $responseTime;
    /**
     * Total number of API units the SOAP request used.
     * @var string
     */
    public $units;

    public function __construct($requestId = null, $serviceName = null, $methodName = null, $operations = null, $responseTime = null, $units = null)
    {
        $this->requestId = $requestId;
        $this->serviceName = $serviceName;
        $this->methodName = $methodName;
        $this->operations = $operations;
        $this->responseTime = $responseTime;
        $this->units = $units;
    }
}