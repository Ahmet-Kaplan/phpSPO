<?php

/**
 * Generated by phpSPO model generator 2020-05-24T21:28:29+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientValueObject;
class AuditActivityInitiator extends ClientValueObject
{
    /**
     * @var UserIdentity
     */
    public $User;
    /**
     * @var AppIdentity
     */
    public $App;
}