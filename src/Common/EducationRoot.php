<?php

/**
 * Modified: 2020-05-25T06:42:59+00:00
 */
namespace Office365\Common;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class EducationRoot extends ClientObject
{
    /**
     * @return EducationUser
     */
    public function getMe()
    {
        if (!$this->isPropertyAvailable("Me")) {
            $this->setProperty("Me", new EducationUser($this->getContext(), new ResourcePath("Me", $this->getResourcePath())));
        }
        return $this->getProperty("Me");
    }
}