<?php

/**
 * Generated by phpSPO model generator 2020-05-24T21:58:36+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientValueObject;
class LicenseAssignmentState extends ClientValueObject
{
    /**
     * @var string
     */
    public $SkuId;
    /**
     * @var array
     */
    public $DisabledPlans;
    /**
     * @var string
     */
    public $AssignedByGroup;
    /**
     * @var string
     */
    public $State;
    /**
     * @var string
     */
    public $Error;
}