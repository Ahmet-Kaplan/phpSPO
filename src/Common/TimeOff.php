<?php

/**
 * Modified: 2020-05-29T07:19:37+00:00
 */
namespace Office365\Common;

use Office365\Runtime\ClientObject;

/**
 * A unit of non-work in a schedule.
 */
class TimeOff extends ClientObject
{
    /**
     * @return string
     */
    public function getUserId()
    {
        if (!$this->isPropertyAvailable("UserId")) {
            return null;
        }
        return $this->getProperty("UserId");
    }
    /**
     * @var string
     */
    public function setUserId($value)
    {
        $this->setProperty("UserId", $value, true);
    }
}