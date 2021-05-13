<?php

/**
 * Modified: 2020-05-29T07:19:37+00:00
 */
namespace Office365\Common;

use Office365\Runtime\ClientObject;

/**
 * Represents a type of shift request to take [timeOff](../resources/timeoff.md).
 */
class TimeOffRequest extends ClientObject
{
    /**
     * The reason for the time off.
     * @return string
     */
    public function getTimeOffReasonId()
    {
        if (!$this->isPropertyAvailable("TimeOffReasonId")) {
            return null;
        }
        return $this->getProperty("TimeOffReasonId");
    }
    /**
     * The reason for the time off.
     * @var string
     */
    public function setTimeOffReasonId($value)
    {
        $this->setProperty("TimeOffReasonId", $value, true);
    }
}