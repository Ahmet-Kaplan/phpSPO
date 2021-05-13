<?php

/**
 * Modified: 2020-05-26T22:07:25+00:00
 */
namespace Office365\Common;

use Office365\Runtime\ClientValue;
class TimeSlot extends ClientValue
{
    /**
     * @var DateTimeTimeZone
     */
    public $Start;
    /**
     * @var DateTimeTimeZone
     */
    public $End;
}